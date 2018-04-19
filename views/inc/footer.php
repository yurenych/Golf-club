<footer>
    <div class="footerContainer">
        <div class="footerButton"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/aktualnosci" : "/{$lang_id}/aktualnosci" ?>"><?= $trans['news'] ?></a></div>
        <div class="footerButton"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/ground-golf" : "/{$lang_id}/ground-golf" ?>"><?= $trans['ground-golf'] ?></a></div>
        <div class="footerButton"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/gg-zdrowie"  : "/{$lang_id}/gg-zdrowie"  ?>"><?= $trans['gg-zdrowie'] ?></a></div>
        <div class="footerButton"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/klub"        : "/{$lang_id}/klub"        ?>"><?= $trans['club'] ?></a></div>
        <div class="footerButton"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/turnieje"    : "/{$lang_id}/turnieje"    ?>"><?= $trans['tournaments'] ?></a></div>
        <div class="footerButton"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/jak-zaczac"  : "/{$lang_id}/jak-zaczac"  ?>"><?= $trans['how-to-start'] ?></a></div>
        <div class="footerButton"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/galeria"     : "/{$lang_id}/galeria"     ?>"><?= $trans['gallery'] ?></a></div>
        <div class="footerButton"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/kontakt"     : "/{$lang_id}/kontakt"     ?>"><?= $trans['contact'] ?></a></div>
    </div>
    <div class="socials">
        <div class="facebook">
            <img class='fbLogo' src="/public/src/img/fb-logo.png">
            <div><a target="_blank" href="https://www.facebook.com/Ground-Golf-Klub-2106618282906231/">Facebook</a></div>
        </div>
        <div class="contactus">
            <img class='mailLogo' src="/public/src/img/mail-icon.png">
            <div><p><a target="_blank" href="mailto:info@groundgolf.pl"><?= $trans['write-to-us'] ?></a></div>
        </div>
    </div>
</footer>

<div class="copyright">
    <div>Copyright © <?= YEAR ?> All rights reserved</div>
</div>


