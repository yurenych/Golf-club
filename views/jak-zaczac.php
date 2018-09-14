<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Golf-club</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

  <link rel="stylesheet" type="text/css" href="/public/src/lib/bootstrap/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="/public/src/lib/fatNav/jquery.fatNav.min.css">

  <script type="text/javascript" src="/public/src/lib/jquery/index.js" ></script>
  <script type="text/javascript" src="/public/src/lib/fatNav/jquery.fatNav.min.js" ></script>
  <script type="text/javascript" src="/public/src/js/main.js"></script>

  <link rel="stylesheet" href="/public/src/css/styles.css"/>
  <link rel="stylesheet" href="/public/src/css/jak-zaczac.css"/>
</head>
<body class="jak-zaczac">

  <!-- inc header menu -->
  <?php include 'views/inc/header-menu.php' ?>
  <!-- end inc header menu -->

  <!-- inc navigation menu -->
  <?php include 'views/inc/navigation.php' ?>
  <!-- end inc navigation menu -->

  <div class="wrapper container-fluid">
    <div class="row jak-zaczac-text">
      <h2 class="headline"><?= $trans['how-to-start'] ?></h2>
      <div class="col-md-12"><?= $trans['how-to-start-text-1'] ?>
        <br><br><?= $trans['how-to-start-text-2'] ?>
        <br><br><?= $trans['how-to-start-text-3'] ?>
        <br><br><b><?= $trans['how-to-start-text-4'] ?></b>
        <br><br><?= $trans['how-to-start-text-5'] ?> <b>603 563 399</b> <?= $trans['how-to-start-text-6'] ?> <b>603 336 095</b><?= $trans['how-to-start-text-7'] ?>
      </div>
    </div>
    <div class="row jak-zaczac-gdzie">
      <h2 class="headline"><?= $trans['how-to-start-text-8'] ?></h2>
      <a target="_blank" href="https://www.google.pl/maps/place/Adama+Branickiego+10,+02-972+Warszawa/@52.1579917,21.0790087,19.08z/data=!4m5!3m4!1s0x47192d69c03bc977:0x2c5c742f697beaa5!8m2!3d52.1579772!4d21.0794523">
        <div class="col-md-4 jak-zaczac-gdzie-container">
          Wilanów <br> <?= $trans['how-to-start-text-9'] ?>
        </div>
      </a>
      <a target="_blank" href="https://www.google.pl/maps/place/Sinus+Sport+Club+Mieczyslaw+%C5%81uczy%C5%84ski/@52.164306,21.129702,15z/data=!4m5!3m4!1s0x0:0xb322010339b2e904!8m2!3d52.164306!4d21.129702">
        <div class="col-md-4 jak-zaczac-gdzie-container">
        Wilanów <br><?= $trans['how-to-start-text-10'] ?><br><?= $trans['how-to-start-text-11'] ?>
        </div>
      </a>
      <a target="_blank" href="https://www.google.pl/maps/place/T%C4%99%C5%BCnia+Solankowa/@52.0856717,21.1115671,17z/data=!4m5!3m4!1s0x47192c1dee7d0291:0xcaae54ad92d282c8!8m2!3d52.0862003!4d21.1129499">
        <div class="col-md-4 jak-zaczac-gdzie-container">
          <br><?= $trans['how-to-start-text-12'] ?>
        </div>
      </a>
    </div> 
  </div>
  
  <!-- inc footer -->
  <?php include 'views/inc/footer.php' ?>
  <!-- inc footer -->

</body>
</body>
</html>