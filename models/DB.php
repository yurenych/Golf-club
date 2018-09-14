<?php

class DB
{
    public $table_name;
    public $mysqli;
    public $sql = "";
    public $sql_columns = "";

    /**
     * DB destructor - open, send parameters and connection from DB.
     * @param $table_name
     */
    public function __construct()
    {
        // Connect to DB.
        $this->mysqli = new mysqli(
            DB_LOCALHOST,
            DB_USERNAME,
            DB_PASSWORD,
            DB_DATABASE
        );

        // Set charset to db.
        $this->mysqli->set_charset("utf8");
    }

    /**
     * Set table name for operation;
     * @param null $arg
     * @return $this object
     */
    public function table($table_name)
    {
        $this->table_name = $table_name;
        return $this;
    }

    /**
     * Selected from table data.
     * @param string|array $columns - get margins from DB
     * @return $this SQL
     */
    public function select($columns = '*')
    {
        if(is_array($columns)) {
            foreach ($columns as $col) {
                $this->sql_columns .= $col . ', ';
            }
            $this->sql_columns = substr($this->sql_columns, 0, -2);
        } else {
            $this->sql_columns = $columns;
        }

        $this->sql .= "SELECT {$this->sql_columns} FROM {$this->table_name} ";
        return $this;
    }

    /**
     * Search refinement SQL request.
     * @param $arguments - arguments from search to DB
     * @return $this SQL
     */
    public function where($arguments)
    {
        $this->sql .= "WHERE {$arguments} ";
        return $this;
    }

    /**
     * Set limits selected SQL.
     * @param $arguments - arguments from search to DB
     * @return $this SQL
     */
    public function limit($arguments)
    {
        $this->sql .= "LIMIT {$arguments} ";
        return $this;
    }

    /**
     * Get only left join selected from DB.
     * @param null $keyBy - key from associative array.
     * @return array
     */
    public function leftJoin($table2, $table1_arg, $table2_arg)
    {
        $this->sql .= "LEFT JOIN {$table2} ON {$this->table_name}.{$table1_arg}={$table2}.{$table2_arg} ";
        return $this;
    }

    /**
     * This method is relationship between 2 tables, One-To-Many.
     * @param $table2
     * @param $table1_arg
     * @param $table2_arg
     * @param $key_by_table1
     * @return array result associative array.
     */
    public function hasMany($table2, $table1_arg, $table2_arg, $key_by_table1)
    {
        // Select all rows from DB.
        $queryTable1 = $this->mysqli->query("SELECT * FROM {$this->table_name}");
        $queryTable2 = $this->mysqli->query("SELECT * FROM {$table2}");

        // Get all records from table2 and get key this arrays table2_args.
        $resultTable2 = [];
        while ($rowTable2 = $queryTable2->fetch_assoc()) {
            $resultTable2[$rowTable2[$table2_arg]][] = $rowTable2;
        }

        // Get all records from table1 and get key this arrays table1_args.
        $resultTable1 = [];
        while ($rowTable1 = $queryTable1->fetch_assoc()) {
            $resultTable1[$rowTable1[$key_by_table1]] = $rowTable1;
            $resultTable1[$rowTable1[$key_by_table1]][$table2] = $resultTable2[$rowTable1[$table1_arg]];
        }

        return $resultTable1;
    }

    /**
     * This method is create new entry if not exists from DB and vice versa
     * @param $set
     * @return $this SQL
     */
    public function createOrUpdate($set)
    {
        array_walk($set, function(&$value, $key) {
            $value = "{$key} = {$value}";
        });

        $args = implode(', ', $set);
        $this->sql = "REPLACE INTO {$this->table_name} SET {$args} ";

        return $this;
    }

    /**
     * Inserting to DB data prepare methods.
     * @param $array = [
     *  [], [], []
     * ]
     * @return [id record]|[false]
     */
    public function insert($type, $array)
    {
        // Array to string convertions.
        $fields = implode(", ", array_keys($array));

        // Fields name to ? replaced.
        $replaced_fields = preg_replace('/\w+/', '?', $fields);

        // Prepare SQL query.
        $insert = $this->mysqli->prepare("INSERT INTO {$this->table_name} ({$fields}) VALUES ({$replaced_fields})");

        call_user_func_array([$insert, 'bind_param'], $this->bindParamsForInsert(array_merge([$type], $array)));

        return $insert->execute() ? $insert->insert_id : false;
    }

    /**
     * Special method for inserting data.
     * @param $arr
     * @return array
     */
    private function bindParamsForInsert($arr){
        $refs = [];
        foreach($arr as $key => $value) {
            $refs[$key] = &$arr[$key];
        }
        return $refs;
    }

    /**
     * Delete recordings.
     * @return $this
     */
    public function delete()
    {
        $this->sql .= "DELETE FROM {$this->table_name} ";
        return $this;
    }

    /**
     * Upate entry from DB.
     * @param array $set
     * @return boolean result
     */
    public function update(array $set)
    {

//        $a = new PDO("mysql:host=localhost;dbname=database;","root","");
//        $b=$a->prepare("UPDATE `users` SET user=:var");
//        $b->bindParam(":var",$var);
//        $b->execute();

//        array_walk($set, function(&$value, $key) {
//            $value = "{$key} = {$value}";
//        });
//
//        $args = implode(', ', $set);
//        $this->sql = "UPDATE {$this->table_name} SET {$args} ";
//
//        return $this;
    }

    /**
     * Processing and get all data from DB
     * @param null $keyBy - key from associative array.
     * @return array
     */
    public function get($keyBy = null)
    {
        $query = $this->mysqli->query($this->sql);

        $result = [];
        $i = 0;

        if($query) {
            while ($row = $query->fetch_assoc()) {
                $result[!$keyBy ? $i++ : $row[$keyBy]] = $row;
            }
        }

        return $result;
    }

    /**
     * Processing and get only first data from DB.
     * @param null $keyBy - key from associative array.
     * @return array
     */
    public function first($key = null)
    {
        $query = $this->mysqli->query($this->sql);

        return $query
            ? ($key
                ? $query->fetch_assoc()[$key]
                : $query->fetch_assoc())
            : false;
    }

    /**
     * Set from DB inserting methods.
     * @return bool|mysqli_result
     */
    public function query()
    {
        $query = $this->mysqli->query($this->sql);
        return $query;
    }

    /**
     * DB destructor - close connection from DB.
     * @param $table_name
     */
    public function __destruct()
    {
        $this->mysqli->close();
    }
}