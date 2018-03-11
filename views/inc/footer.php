<footer>
    <div class="footerContainer">
        <div class="footerButton"><a href="<?= isset($_SESSION['_token']) ? '/admin/aktualnosci' : '/aktualnosci' ?>">Aktualności</a></div>
        <div class="footerButton"><a href="<?= isset($_SESSION['_token']) ? '/admin/ground-golf' : '/ground-golf' ?>">Ground Golf</a></div>
        <div class="footerButton"><a href="<?= isset($_SESSION['_token']) ? '/admin/gg-zdrowie' : '/gg-zdrowie' ?>">GG a zdrowie</a></div>
        <div class="footerButton"><a href="<?= isset($_SESSION['_token']) ? '/admin/klub' : '/klub' ?>">Klub</a></div>
        <div class="footerButton"><a href="<?= isset($_SESSION['_token']) ? '/admin/turnieje' : '/turnieje' ?>">Turnieje</a></div>
        <div class="footerButton"><a href="<?= isset($_SESSION['_token']) ? '/admin/jak-zaczac' : '/jak-zaczac' ?>">Jak zacząć</a></div>
        <div class="footerButton"><a href="<?= isset($_SESSION['_token']) ? '/admin/galeria' : '/galeria' ?>">Galeria</a></div>
        <div class="footerButton"><a href="<?= isset($_SESSION['_token']) ? '/admin/kontakt' : '/kontakt' ?>">Kontakt</a></div>
    </div>
    </div>
    <div class="socials">
        <div class="facebook">
            <img class='fbLogo' src="/public/src/img/fb-logo.png">
            <div>Facebook</div>
        </div>
        <div class="contactus">
            <img class='mailLogo' src="/public/src/img/mail-icon.png">
            <div>Napisz nam</div>
        </div>
    </div>
</footer>

<div class="copyright">
    <div>Copyright © <?= YEAR ?> All rights reserved</div>
</div>