<?php if(isset($_SESSION['_token'])) { ?>
    <a href="/logout">Logout</a>
<?php } ?>

<div class="changeLanguage">
    <?php foreach ($GLOBALS['LANGUAGES'] as $language) { ?>
        <div class="language"><a href="/<?= $language ?>"><?= mb_strtoupper($language) ?></a></div>
    <?php } ?>
</div>

<div class="fat-nav">
    <div class="fat-nav__wrapper">
        <ul>
            <li class="a"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/aktualnosci" : "/{$lang_id}/aktualnosci" ?>">Aktualności</a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/ground-golf" : "/{$lang_id}/ground-golf" ?>">Ground Golf</a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/gg-zdrowie"  : "/{$lang_id}/gg-zdrowie" ?>">GG a zdrowie</a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/klub"        : "/{$lang_id}/klub" ?>">Klub</a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/turnieje"    : "/{$lang_id}/turnieje" ?>">Turnieje</a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/jak-zaczac"  : "/{$lang_id}/jak-zaczac" ?>">Jak zacząć</a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/galeria"     : "/{$lang_id}/galeria" ?>">Galeria</a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/kontakt"     : "/{$lang_id}/kontakt" ?>">Kontakt</a></li>
        </ul>
    </div>
</div>