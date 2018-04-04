<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Golf-club</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

  <link rel="stylesheet" type="text/css" href="/public/src/lib/bootstrap/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="/public/src/lib/fatNav/jquery.fatNav.min.css">
  <link rel="stylesheet" type="text/css" href="/public/src/lib/dataTables/datatables.min.css">

  <script type="text/javascript" src="/public/src/lib/jquery/index.js" ></script>
  <script type="text/javascript" src="/public/src/lib/fatNav/jquery.fatNav.min.js" ></script>
  <script type="text/javascript" charset="utf8" src="/public/src/lib/dataTables/datatables.min.js"></script>
  <script type="text/javascript" src="/public/src/js/main.js" defer></script>
  
  <link rel="stylesheet" href="/public/src/css/styles.css"/>
  <link rel="stylesheet" href="/public/src/css/turnieje.css"/>

</head>

<body class="turnieje">

  <!-- inc header menu -->
  <?php include 'views/inc/header-menu.php' ?>
  <!-- end inc header menu -->

  <!-- inc navigation menu -->
  <?php include 'views/inc/navigation.php' ?>
  <!-- end inc navigation menu -->

 <div class="wrapper"> 
  <h3 class="headline">
    Serdecznie zapraszamy do udziału w tegorocznych turniejach organizowanych przez AGI Ground Golf Klub!
  </h3>
  <div class="dataTableContainer">

    <table id="table_id" class="display">
      <thead class="dataTableNav">
          <tr>
              <th>Nr</th>
              <th>Data</th>
              <th>Czas</th>
              <th>Nazwa</th>
              <th>Miejsce</th>
          </tr>
      </thead>
      <tbody>
          <?php foreach ($data['turnieje'] as $turnieje) { ?>
              <tr>
                  <td><?= $turnieje['nr']?></td>
                  <td><?= $turnieje['data']?></td>
                  <td><?= $turnieje['czas']?></td>
                  <td><?= $turnieje['nazva']?></td>
                  <td><?= $turnieje['miejsce']?></td>
              </tr>
          <?php } ?>
      </tbody>
    </table>

    <div class="archiwum">
      <a href="../../tuturniejeCalendars/calendar2016.pdf" class="downloadButton" download>
        <button>Turnieje 2017.pdf</button>
      </a>
      <a href="../../tuturniejeCalendars/calendar2017.pdf" class="downloadButton" download>
        <button>Turnieje 2016.pdf</button>
      </a>
    </div>

    <div class="turniejeInfoText">
      Zapisy przyjmujemy pod mailem <b>info@groundgolf.pl</b> , ew. numerem telefonu <b>603 563 399</b>.
    </div>

  </div>
 </div>

  <!-- inc footer -->
  <?php include 'views/inc/footer.php' ?>
  <!-- inc footer -->

</body>