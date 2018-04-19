<?php if(isset($_SESSION['_token'])) { ?>
    <div class="logout"><a href="/logout">Logout</a>
    </div>
<?php } ?>

<div class="changeLanguage">
    <?php foreach ($GLOBALS['LANGUAGES'] as $language) { ?>
        <div class="language"><a href="/<?= $language ?>"><?= mb_strtoupper($language) ?></a></div>
    <?php } ?>
</div>

<div class="fat-nav">
    <div class="fat-nav__wrapper">
        <ul>
            <li class="a"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/aktualnosci" : "/{$lang_id}/aktualnosci" ?>"><?= $trans['news'] ?></a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/ground-golf" : "/{$lang_id}/ground-golf" ?>"><?= $trans['ground-golf'] ?></a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/gg-zdrowie"  : "/{$lang_id}/gg-zdrowie" ?>"><?= $trans['gg-zdrowie'] ?></a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/klub"        : "/{$lang_id}/klub" ?>"><?= $trans['club'] ?></a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/turnieje"    : "/{$lang_id}/turnieje" ?>"><?= $trans['tournaments'] ?></a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/jak-zaczac"  : "/{$lang_id}/jak-zaczac" ?>"><?= $trans['how-to-start'] ?></a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/galeria"     : "/{$lang_id}/galeria" ?>"><?= $trans['gallery'] ?></a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? "/{$lang_id}/admin/kontakt"     : "/{$lang_id}/kontakt" ?>"><?= $trans['contact'] ?></a></li>
        </ul>
    </div>
</div>