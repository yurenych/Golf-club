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

  <script type="text/javascript" src="/public/src/js/admin/aktualnosci.js" defer></script>
  <script type="text/javascript" src="/public/src/js/editor.js"></script>

  <link rel="stylesheet" href="/public/src/css/editor.css"/>
  <link rel="stylesheet" href="/public/src/css/styles.css"/>
  <link rel="stylesheet" href="/public/src/css/aktualnosci.css"/>
  <link rel="stylesheet" href="/public/src/css/font-awesome.min.css"/>
</head>

<body>
  <div class="dark-body"></div>

  <!-- csrf-validation-->
  <input type="hidden" name="_token" value="<?= CSRF_TOKEN ?: '' ?>">
  <!-- end csrf-validation-->

  <!-- inc header menu -->
  <?php include 'views/inc/header-menu.php' ?>
  <!-- end inc header menu -->

  <!-- inc navigation menu -->
  <?php include 'views/inc/navigation.php' ?>
  <!-- end inc navigation menu -->

  <div class="container-fluid">
      <div class="row mainContainer">
          <div class="col-md-2 photoWrapper">
              <h3 class = "sideBarTitle">
                  <?= $trans['our-photos'] ?>
              </h3>
              <form action="/admin/aktualnosci/save_photo" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="<?= CSRF_TOKEN ?: '' ?>">
                  <?php foreach ($data['aktualnosci_photo'] as $aktualnosci_photo) { ?>
                      <img src="/public/src/img/aktualnosci/photo/<?= $aktualnosci_photo['obraz'] ?>" class="previewPhoto">
                      <input type="text" name="aktualnosci[<?= $aktualnosci_photo['id'] ?>][opis]" value="<?= $aktualnosci_photo['opis'] ?>">
                      <input type="file" name="aktualnosci[<?= $aktualnosci_photo['id'] ?>][obraz]" accept="image/*">

                      <input type="submit" name="remove[<?= $aktualnosci_photo['id'] ?>]" value="x">
                  <?php } ?>
                  <input type="submit" name="add" value="+">
                  <input type="submit" name="save" value="Save">
              </form>
          </div>
          <div class="wrapper col-md-8">
              <div class="headline"><?= $trans['NEWS'] ?></div>
              <div class="news-container">
                  <form id='posts-form' action="/admin/aktualnosci/save" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="<?= CSRF_TOKEN ?: '' ?>">
                      <button type='button' id="addRow">+</button>
                      <input type="submit" value="Save">
                      <?php $i = 0; ?>
                      <?php foreach ($data['aktualnosci_post'] as $aktualnosci_post) { ?>
                          <div class="news-photo-container row" data-id="<?= $aktualnosci_post['id'] ?>">
                              <a id="removeRow">x</a>
                              <h3 class="newsTitle">
                                  <input class='input-to-clone' type="text" name="aktualnosci[<?= $aktualnosci_post['id'] ?>][temat]" value="<?= $aktualnosci_post['temat'] ?>">
                              </h3>
                              <div class="photo-news col-md-3 col-md-offset-1">
                                  <img src="/public/src/img/aktualnosci/post/<?= $aktualnosci_post['obraz'] ?>">
                                  <input class='input-to-clone' type="file" name="aktualnosci[<?= $aktualnosci_post['id'] ?>][obraz]" accept="image/*">
                              </div>
                              <div class="news-text col-md-8">
                                  <div>
                                      <textarea class='post-textarea input-to-clone' id="post-textarea-<?= $aktualnosci_post['id']?>" name="aktualnosci[<?= $aktualnosci_post['id'] ?>][opis]"><?= $aktualnosci_post['opis'] ?></textarea>
                                  </div>
                              </div>
                          </div>
                      <?php } ?>

                  </form>
              </div>
          </div>
          <div class="col-md-2 videoWrapper">
              <h3 class = "sideBarTitle">
                  <?= $trans['our-films'] ?>
              </h3>
              <form action="/admin/aktualnosci/save_wideo" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="<?= CSRF_TOKEN ?: '' ?>">
                  <?php foreach ($data['aktualnosci_video'] as $aktualnosci_video) { ?>

                      <div class="videoContainer">
                          <img src="https://i.ytimg.com/vi_webp/<?= $aktualnosci_video['wideo'] ?>/hqdefault.webp" class="previewVideo">
                      </div>
                      <div class="viewVideoContainer">
                          <img src="/public/src/img/closeButton.png" class="closeButton">
                          <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $aktualnosci_video['wideo'] ?>" allowscriptaccess="always" frameborder="0" allow="autoplay; encrypted-media" class="video" allowfullscreen></iframe>
                      </div>
                      <input type="submit" name="remove[<?= $aktualnosci_video['id'] ?>]" value="x">

                      <input type="text" name="aktualnosci[<?= $aktualnosci_video['id'] ?>][opis]" value="<?= $aktualnosci_video['opis'] ?>">
                      <input type="text" name="aktualnosci[<?= $aktualnosci_video['id'] ?>][wideo]" value="<?= $aktualnosci_video['wideo'] ?>">
                  <?php } ?>

                  <input type="submit" name="add" value="+">
                  <input type="submit" name="save" value="Save">
              </form>
          </div>
      </div>
  </div>
  <script type="text/javascript">
  </script>
  <!-- inc footer -->
  <?php include 'views/inc/footer.php' ?>
  <!-- inc footer -->

</body>
