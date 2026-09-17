<?php

declare(strict_types=1);

$project_dir = dirname(__DIR__);
$failures = [];

function assertTrue(bool $condition, string $message): void
{
    global $failures;

    if (!$condition) {
        $failures[] = $message;
    }
}

function renderPage(string $path): string
{
    ob_start();
    require $path;

    return (string) ob_get_clean();
}

foreach ([
    '/templates/layout.php',
    '/templates/header.php',
    '/templates/footer.php',
    '/content/home.php',
    '/content/transform.php',
    '/public/index.php',
    '/public/transform/index.php',
    '/public/assets/style.css',
] as $required_file) {
    assertTrue(is_file($project_dir . $required_file), 'Missing required file: ' . $required_file);
}

if (is_file($project_dir . '/public/index.php')) {
    $home = renderPage($project_dir . '/public/index.php');
    assertTrue(str_contains($home, '<html lang="ru">'), 'Homepage must declare Russian language');
    assertTrue(str_contains($home, 'Наталья Харитон'), 'Homepage must name Natalia');
    assertTrue(str_contains($home, 'href="./transform/"'), 'Homepage must link to the program');
    assertTrue(substr_count($home, '<header') === 1, 'Homepage must render one shared header');
    assertTrue(substr_count($home, '<footer') === 1, 'Homepage must render one shared footer');
}

if (is_file($project_dir . '/public/transform/index.php')) {
    $program = renderPage($project_dir . '/public/transform/index.php');
    $telegram_link = 'https://t.me/Nata_lia1?text=';
    assertTrue(str_contains($program, 'Программа «Трансформация»'), 'Program page must have its public heading');
    assertTrue(substr_count($program, $telegram_link) >= 2, 'Both program calls to action must lead to Telegram');
    assertTrue(!preg_match('/href=["\']#["\']/', $program), 'Program page must not contain placeholder links');
    assertTrue(substr_count($program, '<header') === 1, 'Program must render one shared header');
    assertTrue(substr_count($program, '<footer') === 1, 'Program must render one shared footer');
}

if ($failures !== []) {
    fwrite(STDERR, implode(PHP_EOL, $failures) . PHP_EOL);
    exit(1);
}

fwrite(STDOUT, "All tests passed\n");
