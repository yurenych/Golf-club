<nav class="container-fluid navContainer">
    <div class="row">
        <div class="col-md-12 logoContainer"><img class="navLogo" src="/public/src/img/logo.jpg"></div>
    </div>
    <div class="navContainer">
        <div class="buttonContainer"><a class="navButton" href="<?= isset($_SESSION['_token']) ? '/admin/aktualnosci' : '/aktualnosci' ?>">Aktualności</a></div>
        <div class="buttonContainer"><a class="navButton" href="<?= isset($_SESSION['_token']) ? '/admin/ground-golf' : '/ground-golf' ?>">Ground Golf</a></div>
        <div class="buttonContainer"><a class="navButton" href="<?= isset($_SESSION['_token']) ? '/admin/gg-zdrowie'  : '/gg-zdrowie'  ?>">GG a zdrowie</a></div>
        <div class="buttonContainer"><a class="navButton" href="<?= isset($_SESSION['_token']) ? '/admin/klub'        : '/klub'        ?>">Klub</a></div>
        <div class="buttonContainer"><a class="navButton" href="<?= isset($_SESSION['_token']) ? '/admin/turnieje'    : '/turnieje'    ?>">Turnieje</a></div>
        <div class="buttonContainer"><a class="navButton" href="<?= isset($_SESSION['_token']) ? '/admin/jak-zaczac'  : '/jak-zaczac'  ?>">Jak zacząć</a></div>
        <div class="buttonContainer"><a class="navButton" href="<?= isset($_SESSION['_token']) ? '/admin/galeria'     : '/galeria'     ?>">Galeria</a></div>
        <div class="buttonContainer"><a class="navButton" href="<?= isset($_SESSION['_token']) ? '/admin/kontakt'     : '/kontakt'     ?>">Kontakt</a></div>
    </div>
    <div class="row">
        <div class="col-md-12"><img class="navImgLine" src="/public/src/img/obi2.gif"></div>
    </div>
</nav>