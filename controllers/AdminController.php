<?php

class AdminController extends Route
{
    public $redirect_to_admin = 'admin'; // Where redirecting user if here login.
    public $path_to_show_login = 'login'; // Route to show login form.
    public $redirect_after_logout = '/'; // Route to show login form.


    // This method validate data before call method.
    // If condition redirect to another page.
    public function middleWare()
    {
        if($_SESSION['_token'] !== CSRF_TOKEN){
            $this->redirect($this->path_to_show_login);
        }

        return $this;
    }

    // Show login form if user not auth.
    public function showLoginForm()
    {
        return [
            'auth/login-form' => []
        ];
    }

    // Show login form if user not auth.
    public function logout()
    {
        unset($_SESSION['_token']);

        $this->redirect($this->redirect_after_logout);
    }

    // Get user data, validate and gives permission.
    public function loginUser($post)
    {
        // Validate user.
        if($this->validateLogin($post)){
            $_SESSION['_token'] = $post['_token'];
            $this->redirect($this->redirect_to_admin);
        }

        // If bad validate redirect back.
        $this->redirect($this->path_to_show_login);
    }

    // Validate login data.
    public function validateLogin($data)
    {
        $csrf_token = htmlspecialchars(trim($data['_token']));
        $login = htmlspecialchars(trim($data['login']));
        $password = htmlspecialchars(trim($data['password']));

        if(isset($login) && isset($password) && isset($csrf_token)){
            return $login === USER_LOGIN &&
                   $password === USER_PASSWORD &&
                   $csrf_token === CSRF_TOKEN;
        }
    }

    // Show aktualnosci.
    public function aktualnosci()
    {
        $aktualnosci_post = parent::models('DB')
            ->table('aktualnosci_post')
            ->select()
            ->get('id');

        $aktualnosci_video = parent::models('DB')
            ->table('aktualnosci_video')
            ->select()
            ->get('id');


        return [
            'admin/aktualnosci' => [
                'aktualnosci_post' => $aktualnosci_post ?: [['id' => '']],
                'aktualnosci_video' => $aktualnosci_video
            ]
        ];
    }

    // Show turnieje.
    public function turnieje()
    {
        $turnieje = parent::models('DB')
            ->table('turnieje')
            ->select()
            ->get('id');

        return [
            'admin/turnieje' => [
                'turnieje' => $turnieje
            ]
        ];
    }

    // Save form from turnieje.
    public function turniejeSave($post)
    {
        // Delete all record from table.
        if($post['turnieje']) {
            $delete = parent::models('DB')
                ->table('turnieje')
                ->delete()
                ->query();
        }

        // Save all record from table.
        if($delete) {
            foreach ($post['turnieje'] as $value) {
                // Push time from operation.
                $value = array_merge($value, [
                    'czas_stworzenia' => time()
                ]);

                // Save data.
                parent::models('DB')
                    ->table('turnieje')
                    ->insert('sssssi', $value);
            }
        }

        return $this->redirect('/admin/turnieje');
    }

    // Save actions turnieje from Ajax request.
    public function turniejeActions($post)
    {
        // If request send to this site.
        if($post['_token'] === CSRF_TOKEN) {
            switch ($post['action']) {
                case 'add_row':
                    return parent::models('DB')
                        ->table('turnieje')
                        ->insert('sssssi', [
                            'nr' => '',
                            'data' => '',
                            'czas' => '',
                            'nazva' => '',
                            'miejsce' => '',
                            'czas_stworzenia' => time(),
                        ]);

                case 'remove_row':
                    return parent::models('DB')
                        ->table('turnieje')
                        ->delete()
                        ->where("id = {$post['id']}")
                        ->query();
            }
        }

        return false;
    }

    // Save form from aktualnosci.
    public function aktualnosciSave($post, $files)
    {
        // Get isset images from DB.
        $active_images = parent::models('DB')
            ->table('aktualnosci_post')
            ->select('id, obraz')
            ->get('id');

        // Delete all record from table.
        if($post['aktualnosci']) {
            $delete = parent::models('DB')
                ->table('aktualnosci_post')
                ->delete()
                ->query();
        }

        // Save all record from table.
        if($delete) {
            foreach ($post['aktualnosci'] as $id => $value) {

                if($files['aktualnosci']['name'][$id]['obraz']) {
                    // Get images.
                    $images = pathinfo($files['aktualnosci']['name'][$id]['obraz']);

                    // Get the extension of the file and build path for save him.
                    $image_name = time() . '.' . $images['extension'];
                    $target = UPLOAD_IMAGES . 'aktualnosci/' . $image_name;

                    // Uploaded images.
                    move_uploaded_file($files['aktualnosci']['tmp_name'][$id]['obraz'], $target);
                } else {
                    $image_name = $active_images[$id]['obraz'];
                }

                // Push time from operation.
                $value = array_merge($value, [
                    'obraz' => $image_name ?: '',
                    'czas_stworzenia' => time()
                ]);

                // Save data.
                parent::models('DB')
                    ->table('aktualnosci_post')
                    ->insert('sssi', $value);
            }
        }

        return $this->redirect('/admin/aktualnosci');
    }

    // Save actions aktualnosci from Ajax request.
    public function aktualnosciActions($post)
    {
        // If request send to this site.
        if($post['_token'] === CSRF_TOKEN) {
            switch ($post['action']) {
                case 'add_row':
                    return parent::models('DB')
                        ->table('aktualnosci_post')
                        ->insert('sssi', [
                            'temat' => '',
                            'opis' => '',
                            'obraz' => '',
                            'czas_stworzenia' => time(),
                        ]);

                case 'remove_row':
                    var_dump($post);
                    return parent::models('DB')
                        ->table('aktualnosci_post')
                        ->delete()
                        ->where("id = {$post['id']}")
                        ->query();
            }
        }

        return false;
    }
}