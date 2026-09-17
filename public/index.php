<?php

declare(strict_types=1);

$request_path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$request_path = is_string($request_path) ? rawurldecode($request_path) : '/';

if (!in_array($request_path, ['/', '/index.php'], true)) {
    http_response_code(404);

    $page_title = 'Страница не найдена — Наталья Харитон';
    $page_description = 'Запрошенная страница не найдена.';
    $page_robots = 'noindex, follow';
    $canonical_url = 'https://arttherapist.ru/';
    $og_image = 'https://arttherapist.ru/assets/images/natalia-portrait.png';
    $page_id = 'not-found';
    $base_path = '/';
    $content_template = dirname(__DIR__) . '/content/not-found.php';

    require dirname(__DIR__) . '/templates/layout.php';
    return;
}

$page_title = 'Арт-терапевт Наталья Харитон';
$page_description = 'Индивидуальная и групповая арт-терапия онлайн и в Москве. Бережная психологическая помощь через творчество.';
$canonical_url = 'https://arttherapist.ru/';
$og_image = 'https://arttherapist.ru/assets/images/natalia-portrait.png';
$page_id = 'home';
$base_path = './';
$content_template = dirname(__DIR__) . '/content/home.php';

require dirname(__DIR__) . '/templates/layout.php';
