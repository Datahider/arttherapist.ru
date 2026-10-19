<?php

declare(strict_types=1);

$footer_name = $display_name ?? 'Наталья Иоанниди';
?>
<footer class="site-footer">
    <div class="shell footer-inner">
        <div>
            <strong><?= htmlspecialchars($footer_name, ENT_QUOTES, 'UTF-8') ?></strong>
            <p>Практический психолог, арт-терапевт</p>
        </div>
        <nav class="footer-links" aria-label="Ссылки в подвале">
            <a href="https://disk.yandex.ru/d/o9gz82aJnASqJg" target="_blank" rel="noopener">Документы об образовании</a>
            <a href="https://t.me/Nata_lia1">Telegram · @Nata_lia1</a>
        </nav>
        <small>© <?= date('Y') ?> <?= htmlspecialchars($footer_name, ENT_QUOTES, 'UTF-8') ?></small>
    </div>
</footer>
