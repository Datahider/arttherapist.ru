<?php

declare(strict_types=1);

if (!isset($page_title, $page_description, $content_template, $base_path)) {
    throw new LogicException('Page metadata and content template are required.');
}

$asset_path = $base_path . 'assets/';
?><!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8') ?>">
    <link rel="icon" href="<?= $asset_path ?>images/favicon.png" type="image/png">
    <link rel="stylesheet" href="<?= $asset_path ?>style.css">
</head>
<body class="page-<?= htmlspecialchars($page_id ?? 'default', ENT_QUOTES, 'UTF-8') ?>">
<?php require __DIR__ . '/header.php'; ?>
<main id="content">
<?php require $content_template; ?>
</main>
<?php require __DIR__ . '/footer.php'; ?>
</body>
</html>

