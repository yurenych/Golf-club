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
    <div class="col-md-2 photoWrapper">
      <h3 class = "sideBarTitlePhoto"><?= $trans['our-photos'] ?></h3>
        <?php foreach ($data['aktualnosci_photo'] as $aktualnosci_photo) { ?>
            <img src="/public/src/img/aktualnosci/photo/<?= $aktualnosci_photo['obraz'] ?>" class="previewPhoto">
            <div class="photoDescription"><?= $aktualnosci_photo['opis'] ?></div>
        <?php } ?>
        <a href="http://groundgolf.pl/galeria"><?= $trans['more'] ?></a>
    </div>
    <div class="wrapper col-md-8">
      <div class="headline"><?= $trans['news'] ?></div>
      <div class="news-container container-fluid">
          <?php $i = 0; ?>
          <?php foreach ($data['aktualnosci_post'] as $aktualnosci_post) { ?>
              <div class="news-photo-container row">
                  <h3 class="newsTitle col-md-12">
                      <?= $aktualnosci_post['temat'] ?>
                  </h3>
                  <div class="photo-news col-md-4">
                      <img src="/public/src/img/aktualnosci/post/<?= $aktualnosci_post['obraz'] ?>">
                  </div>
                  <div class="news-text col-md-8">
                      <div>
                          <?= $aktualnosci_post['opis'] ?>
                      </div>
                  </div>
              </div>
          <?php } ?>
      </div>
    </div>
    <div class="col-md-2 videoWrapper">
    <h3 class = "sideBarTitleVideo"><?= $trans['our-films'] ?></h3>
      <?php if(count($data['aktualnosci_video']) > $i++) { ?>
        <?php foreach ($data['aktualnosci_video'] as $key => $aktualnosci_video) { ?>
          <div class="videoContainer" data-video-key="<?= $key ?>">
              <img src="https://i.ytimg.com/vi_webp/<?= $aktualnosci_video['wideo'] ?>/hqdefault.webp" class="previewVideo">
              <div class="videoDescription"><?= $aktualnosci_video['opis'] ?></div>
          </div>
          <div class="viewVideoContainer" data-video-key="<?= $key ?>">
              <img src="/public/src/img/closeButton.png" class="closeButton">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $aktualnosci_video['wideo'] ?>?enablejsapi=1" allowscriptaccess="always" frameborder="0" allow="autoplay; encrypted-media" class="video" allowfullscreen></iframe>
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