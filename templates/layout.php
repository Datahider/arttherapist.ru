<?php

declare(strict_types=1);

if (!isset($page_title, $page_description, $canonical_url, $og_image, $content_template, $base_path)) {
    throw new LogicException('Page metadata and content template are required.');
}

$asset_path = $base_path . 'assets/';
$style_version = md5_file(dirname(__DIR__) . '/public/assets/style.css');

if ($style_version === false) {
    throw new RuntimeException('Stylesheet version cannot be determined.');
}
?><!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8') ?>">
<?php if (isset($page_robots)): ?>
    <meta name="robots" content="<?= htmlspecialchars($page_robots, ENT_QUOTES, 'UTF-8') ?>">
<?php endif; ?>
    <link rel="canonical" href="<?= htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:site_name" content="Арт-терапевт Наталья Харитон">
    <meta property="og:title" content="<?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:image" content="<?= htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" href="<?= $asset_path ?>images/favicon.png" type="image/png">
    <link rel="stylesheet" href="<?= $asset_path ?>style.css?v=<?= $style_version ?>">
</head>
<body class="page-<?= htmlspecialchars($page_id ?? 'default', ENT_QUOTES, 'UTF-8') ?>">
<?php require __DIR__ . '/header.php'; ?>
<main id="content">
<?php require $content_template; ?>
</main>
<?php require __DIR__ . '/footer.php'; ?>
</body>
</html>
