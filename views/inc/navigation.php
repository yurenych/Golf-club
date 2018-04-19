<nav class="container-fluid navContainer">
    <div class="row">
        <div class="col-md-12 logoContainer"><img class="navLogo" src="/public/src/img/logo.jpg"></div>
    </div>
    <div class="navContainer">
        <div class="buttonContainer"><a class="navButton" href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/aktualnosci" : "/{$lang_id}/aktualnosci" ?>"><?= $trans['news'] ?></a></div>
        <div class="buttonContainer"><a class="navButton" href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/ground-golf" : "/{$lang_id}/ground-golf" ?>"><?= $trans['ground-golf'] ?></a></div>
        <div class="buttonContainer"><a class="navButton" href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/gg-zdrowie"  : "/{$lang_id}/gg-zdrowie"  ?>"><?= $trans['gg-zdrowie'] ?></a></div>
        <div class="buttonContainer"><a class="navButton" href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/klub"        : "/{$lang_id}/klub"        ?>"><?= $trans['club'] ?></a></div>
        <div class="buttonContainer"><a class="navButton" href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/turnieje"    : "/{$lang_id}/turnieje"    ?>"><?= $trans['tournaments'] ?></a></div>
        <div class="buttonContainer"><a class="navButton" href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/jak-zaczac"  : "/{$lang_id}/jak-zaczac"  ?>"><?= $trans['how-to-start'] ?></a></div>
        <div class="buttonContainer"><a class="navButton" href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/galeria"     : "/{$lang_id}/galeria"     ?>"><?= $trans['gallery'] ?></a></div>
        <div class="buttonContainer"><a class="navButton" href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/kontakt"     : "/{$lang_id}/kontakt"     ?>"><?= $trans['contact'] ?></a></div>
    </div>
    <div class="row">
        <div class="col-md-12"><img class="navImgLine" src="/public/src/img/obi2.gif"></div>
    </div>
</nav>