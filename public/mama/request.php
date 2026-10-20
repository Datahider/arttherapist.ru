<?php

declare(strict_types=1);

function renderResult(int $status, string $eyebrow, string $title, string $message, string $button, string $url, bool $request_delivered = false): never
{
    http_response_code($status);

    $page_title = $title . ' — Наталья Иоанниди';
    $page_description = $message;
    $page_robots = 'noindex, nofollow';
    $canonical_url = 'https://arttherapist.ru/mama/';
    $og_image = 'https://arttherapist.ru/assets/images/natalia-at-work.jpg';
    $page_id = 'request-result';
    $display_name = 'Наталья Иоанниди';
    $site_name = 'Арт-терапевт Наталья Иоанниди';
    $base_path = '../';
    $content_template = dirname(__DIR__, 2) . '/content/request-result.php';
    $result_eyebrow = $eyebrow;
    $result_title = $title;
    $result_message = $message;
    $result_button = $button;
    $result_url = $url;

    require dirname(__DIR__, 2) . '/templates/layout.php';
    exit;
}

$direct_url = 'https://t.me/Nata_lia1?text=' . rawurlencode('Здравствуйте! Хочу познакомиться и узнать подробнее о программе арт-терапии для мам.');

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    renderResult(405, 'Анкета', 'Откройте форму на странице программы', 'Анкета отправляется со страницы программы для мам.', 'Вернуться к программе', './');
}

if (trim((string) ($_POST['website'] ?? '')) !== '') {
    renderResult(200, 'Спасибо', 'Анкета отправлена', 'Наталья напишет вам в Telegram.', 'Вернуться к программе', './');
}

$name = trim((string) ($_POST['name'] ?? ''));
$telegram = ltrim(trim((string) ($_POST['telegram'] ?? '')), '@');
$preferred_time = trim((string) ($_POST['preferred_time'] ?? ''));
$consent = (string) ($_POST['personal_data_consent'] ?? '');
$allowed_times = ['Утром', 'Днём', 'Вечером', 'Договоримся в Telegram'];

if ($name === '' || mb_strlen($name) > 100 || !preg_match('/^[A-Za-z0-9_]{5,32}$/', $telegram) || !in_array($preferred_time, $allowed_times, true) || $consent !== '1') {
    renderResult(422, 'Проверьте данные', 'Анкету не удалось отправить', 'Укажите имя, корректный Telegram и удобное время, затем подтвердите согласие.', 'Вернуться к анкете', './#request');
}

$config_file = '/home/arttherapist/.config/arttherapist/bot.php';
if (!is_file($config_file)) {
    renderResult(500, 'Ошибка', 'Анкета временно недоступна', 'Напишите Наталье напрямую в Telegram.', 'Написать Наталье', $direct_url);
}

$bot_config = require $config_file;
if (!is_array($bot_config) || !isset($bot_config['token'], $bot_config['chat_id'])) {
    throw new RuntimeException('Invalid bot configuration.');
}

$utm_source = mb_substr(trim((string) ($_POST['utm_source'] ?? '')), 0, 100);
$utm_campaign = mb_substr(trim((string) ($_POST['utm_campaign'] ?? '')), 0, 100);
$message = implode("\n", [
    'Новая заявка с arttherapist.ru/mama/',
    '',
    'Имя: ' . $name,
    'Telegram: @' . $telegram,
    'Удобное время: ' . $preferred_time,
    'Источник: ' . ($utm_source !== '' ? $utm_source : 'прямой переход'),
    'Кампания: ' . ($utm_campaign !== '' ? $utm_campaign : '—'),
]);

$request = curl_init('https://api.telegram.org/bot' . $bot_config['token'] . '/sendMessage');
if ($request === false) {
    throw new RuntimeException('Telegram request cannot be initialized.');
}

curl_setopt_array($request, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => ['chat_id' => (string) $bot_config['chat_id'], 'text' => $message],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_TIMEOUT => 10,
]);
$response = curl_exec($request);
$status = curl_getinfo($request, CURLINFO_RESPONSE_CODE);
$error = curl_error($request);
curl_close($request);

$telegram_response = is_string($response) ? json_decode($response, true) : null;
if ($error !== '' || $status !== 200 || !is_array($telegram_response) || ($telegram_response['ok'] ?? false) !== true) {
    renderResult(502, 'Ошибка доставки', 'Анкету не удалось отправить', 'Напишите Наталье напрямую в Telegram.', 'Написать Наталье', $direct_url);
}

renderResult(200, 'Спасибо', 'Анкета отправлена', 'Наталья получила заявку и напишет вам в Telegram.', 'Вернуться к программе', './', true);
