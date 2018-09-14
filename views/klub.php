<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ground Golf Club Warszawa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

  <link rel="stylesheet" type="text/css" href="/public/src/lib/bootstrap/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="/public/src/lib/fatNav/jquery.fatNav.min.css">
  <link rel="stylesheet" type="text/css" href="/public/src/lib/slick/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="/public/src/lib/slick/slick/slick-theme.css"/>

  <script type="text/javascript" src="/public/src/lib/jquery/index.js" ></script>
  <script type="text/javascript" src="/public/src/lib/fatNav/jquery.fatNav.min.js" ></script>
  <script type="text/javascript" src="/public/src/js/main.js"></script>
  <script type="text/javascript" src="/public/src/lib/slick/slick/slick.min.js"></script>

  
  <link rel="stylesheet" href="/public/src/css/styles.css"/>
  <link rel="stylesheet" href="/public/src/css/klub.css"/>

</head>

<body class="klub">

  <!-- inc header menu -->
  <?php include 'views/inc/header-menu.php' ?>
  <!-- end inc header menu -->

  <!-- inc navigation menu -->
  <?php include 'views/inc/navigation.php' ?>
  <!-- end inc navigation menu -->

  <div class="wrapper container-fluid">
    <ul class="club">
      <li class="club-info-historia">
        <div class="history">
          <h2 class="headline"><?= $trans['club-title-1'] ?>
          </h2>
          <div class="row history-photo-block">
            <div class="col-md-12 histotyTitle"><?= $trans['club-text-1.1'] ?>
              <br><br><?= $trans['club-text-1.2'] ?>
              <br><?= $trans['club-text-2'] ?>
            </div>
            <div class="col-md-12 history-photo-block">
            <div class="slider">
              <div class="photo-intext-container">
                <img class="history-photo-slider" src="/public/src/img/club/wisla1.jpg">
                <div class="sliderText"><?= $trans['club-text-3'] ?></div>
              </div>
              <div class="photo-intext-container">
                <img class="history-photo-slider" src="/public/src/img/club/wisla2.jpg">
                <div class="sliderText"><?= $trans['club-text-3'] ?></div>
              </div>
              <div class="photo-intext-container">
                <img class="history-photo-slider" src="/public/src/img/club/wisla3.jpg">
                <div class="sliderText"><?= $trans['club-text-3'] ?></div>
              </div>
              <div class="photo-intext-container">
                <img class="history-photo-slider" src="/public/src/img/club/wisla4.jpg">
                <div class="sliderText"><?= $trans['club-text-3'] ?></div>
              </div>
            </div>
          </div> 
          <div class="col-md-12 histotyTitle">
            <br><?= $trans['club-text-4.1'] ?>
            <br><br><?= $trans['club-text-4.2'] ?>
          </div>
          <div class="col-md-12 history-photo-block">
            <div class="slider">
              <div class="photo-intext-container">
                <img class="history-photo-slider" src="/public/src/img/club/japan2016(1).jpg">
                <div class="sliderText"><?= $trans['club-text-5'] ?></div>
              </div>
              <div class="photo-intext-container">
                <img class="history-photo-slider" src="/public/src/img/club/japan2016(2).jpg">
                <div class="sliderText"><?= $trans['club-text-5'] ?></div>
              </div>
              <div class="photo-intext-container">
                <img class="history-photo-slider" src="/public/src/img/club/japan2016(3).jpg">
                <div class="sliderText"><?= $trans['club-text-5'] ?></div>
              </div>
              <div class="photo-intext-container">
                <img class="history-photo-slider" src="/public/src/img/club/japan2016(4).jpg">
                <div class="sliderText"><?= $trans['club-text-5'] ?></div>
              </div>
            </div>
          </div> 
          <div class="col-md-12 histotyTitle"> 
            <br><?= $trans['club-text-6'] ?>
          </div>
            <div class="col-md-12 history-photo-block">
            <div class="slider">
              <div class="photo-intext-container">
                <img class="history-photo-slider" src="/public/src/img/club/japan2017(1).jpg">
                <div class="sliderText"><?= $trans['club-text-7'] ?></div>
              </div>
              <div class="photo-intext-container">
                <img class="history-photo-slider" src="/public/src/img/club/japan2017(2).jpg">
                <div class="sliderText"><?= $trans['club-text-7'] ?></div>
              </div>
              <div class="photo-intext-container">
                <img class="history-photo-slider" src="/public/src/img/club/japan2017(9).jpg">
                <div class="sliderText"><?= $trans['club-text-7'] ?></div>
              </div>
              <div class="photo-intext-container">
                <img class="history-photo-slider" src="/public/src/img/club/japan2017(3).jpg">
                <div class="sliderText"><?= $trans['club-text-7'] ?></div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="club-info-cele">
        <div class="cele">
          <h2 class="headline"><?= $trans['club-title-2'] ?></h2>
          <?= $trans['club-text-8.1'] ?>
          <br><br><?= $trans['club-text-8.2'] ?>
          <br><br><?= $trans['club-text-8.3'] ?>
          <br><br><?= $trans['club-text-8.4'] ?>
          <br><br><?= $trans['club-text-8.5'] ?>
          <div class="KlubPhoto">
            <img class="naszKlubPhoto" src="/public/src/img/club/klub1.jpg">
          </div>
        </div>
      </li>
      <li class="club-info-cele">
        <div class="cele">
          <h2 class="headline"><?= $trans['club-title-3'] ?></h2>
            <br>1. <?= $trans['club-goals-1']?>	
            <br>2. <?= $trans['club-goals-2']?>
            <br>3. <?= $trans['club-goals-3']?>
            <br>4. <?= $trans['club-goals-4']?>
            <br>5. <?= $trans['club-goals-5']?>
            <br>6. <?= $trans['club-goals-6']?>
            <br>7. <?= $trans['club-goals-7']?>
            <br>8. <?= $trans['club-goals-8']?>
            <br>9. <?= $trans['club-goals-9']?>
            <br>10. <?= $trans['club-goals-10']?>
            <br>11. <?= $trans['club-goals-11']?>
            <br>12. <?= $trans['club-goals-12']?>
            <br>13. <?= $trans['club-goals-13']?>
            <br>14. <?= $trans['club-goals-14']?>
            <br>15. <?= $trans['club-goals-15']?>
            <br>16. <?= $trans['club-goals-16']?>
        </div>
        <div class="jak-dolaczyc">
          <h2 class="headline"><?= $trans['club-title-6'] ?></h2>
          <br><?= $trans['club-text-9'] ?>
        </div>
        <h1><?= $trans['status-bodies']?></h1>
      </li>
      <li class="">
        <ul class="government row">
          <li class="club-info-zarzad col-md-6">
            <div class="zarzad">
              <h2 class="headline"><?= $trans['club-title-4'] ?>
              </h2>
              <br><b><?= $trans['club-government-1']?></b> Och Bataa
              <br><b><?= $trans['club-government-2']?></b> Edwin Zbigniew Truksa
              <br><b><?= $trans['club-government-3']?></b> Altankhuyag Erdenekhuyag
            </div> 
          </li>
          <li class="club-info-komisje col-md-6">
            <div class="komisje">
              <h2 class="headline"><?= $trans['club-title-5'] ?>
              </h2>
              <br>Anna Teresa Łysek
              <br>Tatiana Michalewicz-Filus
              <br>Wasik Bożena
            </div>
          <li>
        </ul>
      </li>
    </ul>
  </div>

  <!-- inc footer -->
  <?php include 'views/inc/footer.php' ?>
  <!-- inc footer -->

</body>
</html>