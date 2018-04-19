<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Golf-club</title>
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
  <link rel="stylesheet" href="/public/src/css/galeria.css"/>

</head>

<body class="galeria">

  <!-- inc header menu -->
  <?php include 'views/inc/header-menu.php' ?>
  <!-- end inc header menu -->

  <!-- inc navigation menu -->
  <?php include 'views/inc/navigation.php' ?>
  <!-- end inc navigation menu -->

  <div class="wrapper container-fluid">
    <div class="mainTitle"><?= $trans['gallery'] ?></div>
    <div class="buttonPrev"><img src="/public/src/img/left-arrow.png"></div>
    <div class="slider-for">

      <?php if(isset($data['images'])) { ?>
        <?php foreach($data['images'] as $image) { ?>
          <div class="photo-intext-container">
            <img class="history-photo-slider-main" src="<?= '/' . IMAGES_GALERIA . $image ?>">
          </div>
        <?php } ?>
      <?php } ?>
    </div>

    <div class="buttonNext"><img src="/public/src/img/right-arrow.png"></div>
    <div class="slider-nav">
      <?php if(isset($data['images'])) { ?>
        <?php foreach($data['images'] as $image) { ?>
          <div class="photo-intext-container">
            <img class="history-photo-slider" src="<?= '/' . IMAGES_GALERIA . $image ?>">
          </div>
        <?php } ?>
      <?php } ?>
    </div>
    <div class="row">
      <?php if(isset($data['images'])) { ?>
        <?php foreach($data['images'] as $image) { ?>
          <div class="col-md-4">
            <img class="photo-content" src="<?= '/' . IMAGES_GALERIA . $image ?>">
          </div>
        <?php } ?>
      <?php } ?>
    </div>
  </div>

  <!-- inc footer -->
  <?php include 'views/inc/footer.php' ?>
  <!-- inc footer -->

</body>
</html>
