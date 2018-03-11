<?php if(isset($_SESSION['_token'])) { ?>
    <a href="/logout">Logout</a>
<?php } ?>

<div class="fat-nav">
    <div class="fat-nav__wrapper">
        <ul>
            <li class="a"><a href="<?= isset($_SESSION['_token']) ? '/admin/aktualnosci' : '/aktualnosci' ?>">Aktualności</a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? '/admin/ground-golf' : '/ground-golf' ?>">Ground Golf</a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? '/admin/gg-zdrowie' : '/gg-zdrowie' ?>">GG a zdrowie</a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? '/admin/klub' : '/klub' ?>">Klub</a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? '/admin/turnieje' : '/turnieje' ?>">Turnieje</a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? '/admin/jak-zaczac' : '/jak-zaczac' ?>">Jak zacząć</a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? '/admin/galeria' : '/galeria' ?>">Galeria</a></li>
            <li class="a"><a href="#"><div class='circle'></div></a></li>

            <li class="a"><a href="<?= isset($_SESSION['_token']) ? '/admin/kontakt' : '/kontakt' ?>">Kontakt</a></li>
        </ul>
    </div>
</div>