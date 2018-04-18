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
  <link rel="stylesheet" href="/public/src/css/gg-zdrowie.css"/>
</head>
<body class="gg-zdrowie">

  <!-- inc header menu -->
  <?php include 'views/inc/header-menu.php' ?>
  <!-- end inc header menu -->

  <!-- inc navigation menu -->
  <?php include 'views/inc/navigation.php' ?>
  <!-- end inc navigation menu -->

  <div class="wrapper container-fluid">
    <h2 class="headline"><?= $trans['gg-zdrowie-title-1']?>
    </h2>
    <div>
      <i class="mainQuote">„<?= $trans['gg-zdrowie-text-1']?>”</i>
      <br><i class="mainTitle"><?= $trans['gg-zdrowie-text-2']?></i>
      <div class="quoteDescription"><?= $trans['gg-zdrowie-text-3']?>
      </div>  
    </div>
    <h3><?= $trans['gg-zdrowie-text-4']?>
    </h3>
    <div><?= $trans['gg-zdrowie-text-5']?>
    </div>
    <div class="photoContainer">
    	<img src="/public/src/img/gg-zdrowie/gg-zdrowie1.jpg">
    </div>
    <h3><?= $trans['gg-zdrowie-text-6']?>
    </h3>
    <div><?= $trans['gg-zdrowie-text-7']?><br><?= $trans['gg-zdrowie-text-8']?><br><?= $trans['gg-zdrowie-text-9']?><br><?= $trans['gg-zdrowie-text-10']?>
    </div>
    <div class="photoContainer">
    	<img src="/public/src/img/gg-zdrowie/gg-zdrowie2.jpg">
    </div>
    <h3>
      <?= $trans['gg-zdrowie-text-11']?>
    </h3>
    <ul>
      <li><?= $trans['gg-zdrowie-text-12']?>
      </li>
      <li><?= $trans['gg-zdrowie-text-13']?>
      </li>
      <li><?= $trans['gg-zdrowie-text-14']?>
      </li>
    </ul>
    <div>
      <h4><?= $trans['gg-zdrowie-text-15']?>
      </h4> 
      <?= $trans['gg-zdrowie-text-16']?>
    </div>
    <div class="photoContainer">
    	<img src="/public/src/img/gg-zdrowie/gg-zdrowie3.jpg">
    </div>
    <h3><?= $trans['gg-zdrowie-text-17']?>
    </h3>
    <div><?= $trans['gg-zdrowie-text-18']?><br><br><?= $trans['gg-zdrowie-text-19']?><br><?= $trans['gg-zdrowie-text-20']?><br><br><?= $trans['gg-zdrowie-text-21']?><br><br><?= $trans['gg-zdrowie-text-22']?>
    </div>
    <div class="photoContainer">
    	<img src="/public/src/img/gg-zdrowie/gg-zdrowie4.jpg">
    </div>
    <h3><?= $trans['gg-zdrowie-text-23']?>
    </h3>
    <div><?= $trans['gg-zdrowie-text-24']?>
    </div>
    <ul>
      <li><?= $trans['gg-zdrowie-text-25']?>
      </li>
      <li><?= $trans['gg-zdrowie-text-26']?>
      </li>
      <li><?= $trans['gg-zdrowie-text-27']?>
      </li>
    </ul>
    <div class="completion"><?= $trans['gg-zdrowie-text-28']?>
      <br><br><?= $trans['gg-zdrowie-text-29']?>
    </div>
  </div>

  <!-- inc footer -->
  <?php include 'views/inc/footer.php' ?>
  <!-- inc footer -->

</body>
</html>