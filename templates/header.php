<?php

declare(strict_types=1);

$telegram_url = 'https://t.me/Nata_lia1';
?>
<header class="site-header">
    <div class="shell header-inner">
        <a class="brand" href="<?= $base_path ?>" aria-label="На главную">
            <span class="brand-mark" aria-hidden="true">Н</span>
            <span><strong>Наталья Харитон</strong><small>психолог · арт-терапевт</small></span>
        </a>
        <nav class="main-nav" aria-label="Основная навигация">
            <a href="<?= $base_path ?>#about">Обо мне</a>
            <a href="<?= $base_path ?>#practice">Как я работаю</a>
            <a href="<?= $base_path ?>transform/">Трансформация</a>
        </nav>
        <a class="button button-small" href="<?= $telegram_url ?>">Написать</a>
    </div>
</header>

