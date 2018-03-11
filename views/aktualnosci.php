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
  <link rel="stylesheet" href="/public/src/css/aktualnosci.css"/>
</head>

<body>
  <div class="dark-body"></div>

  <!-- inc header menu -->
  <?php include 'views/inc/header-menu.php' ?>
  <!-- end inc header menu -->

  <!-- inc navigation menu -->
  <?php include 'views/inc/navigation.php' ?>
  <!-- end inc navigation menu -->

<div class="container-fluid">
  <div class="row mainContainer">
    <div class="col-md-2 videoWrapper">
      <?php if(count($data['aktualnosci_video']) > $i++) { ?>
        <?php foreach ($data['aktualnosci_video'] as $aktualnosci_video) { ?>
          <div class="videoContainer">
              <img src="<?= $aktualnosci_video['obraz'] ?>" class="previewVideo">
              <div class="videoDescription"><?= $aktualnosci_video['opis'] ?></div>
          </div>
          <div class="viewVideoContainer">
              <img src="/public/src/img/closeButton.png" class="closeButton">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $aktualnosci_video['wideo'] ?>" allowscriptaccess="always" frameborder="0" allow="autoplay; encrypted-media" class="video" allowfullscreen></iframe>
          </div>
        <?php } ?>
      <?php } ?>
    </div>
    <div class="wrapper col-md-8">
      <div class="headline">Aktualności</div>
      <div class="news-container">
          <?php $i = 0; ?>
          <?php foreach ($data['aktualnosci_post'] as $aktualnosci_post) { ?>
              <div class="news-photo-container row">
                  <h3 class="newsTitle">
                     <?= $aktualnosci_post['temat'] ?>
                  </h3>
                  <div class="photo-news col-md-3">
                      <img src="/public/src/img/aktualnosci/<?= $aktualnosci_post['obraz'] ?>">
                  </div>
                  <div class="news-text col-md-9">
                      <div>
                         <?= $aktualnosci_post['opis'] ?>
                      </div>
                  </div>
              </div>
          <?php } ?>

      </div>
    </div>
    <div class="col-md-2 videoWrapper">
      <?php if(count($data['aktualnosci_video']) > $i++) { ?>
        <?php foreach ($data['aktualnosci_video'] as $aktualnosci_video) { ?>
          <div class="videoContainer ">
              <img src="<?= $aktualnosci_video['obraz'] ?>" class="previewVideo">
              <div class="videoDescription"><?= $aktualnosci_video['opis'] ?></div>
          </div>
          <div class="viewVideoContainer">
              <img src="/public/src/img/closeButton.png" class="closeButton">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $aktualnosci_video['wideo'] ?>" allowscriptaccess="always" frameborder="0" allow="autoplay; encrypted-media" class="video" allowfullscreen></iframe>
          </div>
        <?php } ?>
      <?php } ?>
      </div>
  </div>
</div>

  <!-- inc footer -->
  <?php include 'views/inc/footer.php' ?>
  <!-- inc footer -->

</body>