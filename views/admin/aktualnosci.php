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

  <link rel="stylesheet" href="/public/src/css/styles.css"/>
  <link rel="stylesheet" href="/public/src/css/aktualnosci.css"/>
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

  <div class="wrapper container-fluid">
    <div class="headline">Aktualności</div>
    <div class="news-container">

        <form action="/admin/aktualnosci/save" method="POST" enctype="multipart/form-data">
            <?php $i = 0; ?>
            <?php foreach ($data['aktualnosci_post'] as $aktualnosci_post) { ?>
                <div class="news-photo-container row" data-id="<?= $aktualnosci_post['id'] ?>">
                    <a id="removeRow">x</a>
                    <h3 class="newsTitle">
                        <input type="text" name="aktualnosci[<?= $aktualnosci_post['id'] ?>][temat]" value="<?= $aktualnosci_post['temat'] ?>">
                    </h3>
                    <div class="photo-news col-md-3 col-md-offset-2">
                        <img src="/public/src/img/aktualnosci/<?= $aktualnosci_post['obraz'] ?>">
                        <input type="file" name="aktualnosci[<?= $aktualnosci_post['id'] ?>][obraz]" accept="image/*">
                    </div>
                    <div class="news-text col-md-5">
                        <div>
                            <textarea cols="55" rows="13" name="aktualnosci[<?= $aktualnosci_post['id'] ?>][opis]"><?= $aktualnosci_post['opis'] ?></textarea>
                        </div>
                    </div>

                    <?php if(count($data['aktualnosci_video']) > $i++) { ?>
                        <?php foreach ($data['aktualnosci_video'] as $aktualnosci_video) { ?>
                            <div class="videoContainer col-md-2">
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
            <?php } ?>

            <p id="addRow">+</p>
            <input type="submit" value="Save">
        </form>

    </div>
  </div>

  <!-- inc footer -->
  <?php include 'views/inc/footer.php' ?>
  <!-- inc footer -->

</body>