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
  <script type="text/javascript" src="/public/src/js/main.js" defer></script>
  
  <link rel="stylesheet" href="/public/src/css/styles.css"/>
  <link rel="stylesheet" href="/public/src/css/kontakt.css"/>

</head>

<body>

  <!-- inc header menu -->
  <?php include 'views/inc/header-menu.php' ?>
  <!-- end inc header menu -->

  <!-- inc navigation menu -->
  <?php include 'views/inc/navigation.php' ?>
  <!-- end inc navigation menu -->

  <div class="wrapper row">
    <div class="col-md-12 mainTitle">Skontaktuj się z nami</div>
    <div class="col-md-6 infoContainer">
      <h3 class="headline">
        Napisz nam
      </h3>
      <div class="borderContainer">
        <div class="napiszNam">
          <img class='poczta' src="/public/src/img/mail-icon.png">
        </div>
        <div class="kontaktText">
          <b>groundgolf@life.pl
          </b>
        </div>
      </div>
    </div>
    <div class="col-md-6 infoContainer">
      <h3 class="headline">
        Zadzwoń do nas 
      </h3>
      <div class="borderContainer">
        <div class="zadzwonDoNas">
          <img class='phone' src="/public/src/img/phone-icon.png">
        </div>
        <div class="zadzwonText">
          <br>Och Bataa <b>+48 603 336 095</b>
          <br>Eryka Nomindalai <b>+48 603 563 399</b>
        </div>
      </div>
    </div>
  </div>

  <!-- inc footer -->
  <?php include 'views/inc/footer.php' ?>
  <!-- inc footer -->

</body>
</html>