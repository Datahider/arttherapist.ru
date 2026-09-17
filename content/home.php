<?php

declare(strict_types=1);

$consultation_url = 'https://t.me/Nata_lia1?text=' . rawurlencode('Здравствуйте! Хочу получить консультацию. Мой вопрос: ');
?>
<section class="hero">
    <div class="shell hero-grid">
        <div class="hero-copy">
            <p class="eyebrow">Бережно. Творчески. О вас.</p>
            <h1>Давайте<br><em>порисуем?</em></h1>
            <p class="lead">Арт-терапия помогает услышать себя, когда для чувств трудно подобрать слова.</p>
            <a class="button" href="<?= $consultation_url ?>">Получить консультацию</a>
        </div>
        <div class="hero-portrait">
            <span class="paint-stroke" aria-hidden="true"></span>
            <img src="<?= $asset_path ?>images/natalia-portrait.png" alt="Арт-терапевт Наталья Харитон">
            <div class="portrait-note"><strong>Наталья Харитон</strong><span>практический психолог<br>арт-терапевт</span></div>
        </div>
    </div>
</section>

<section class="intro section" id="about">
    <div class="shell split">
        <div>
            <p class="eyebrow">Чем я могу быть полезна</p>
            <h2>От внутреннего напряжения — к спокойствию и пониманию</h2>
        </div>
        <div class="intro-text">
            <p>Арт-терапия — метод психологической помощи, в котором творчество становится инструментом для выражения чувств, исследования внутреннего мира и поиска решений.</p>
            <p>Это не урок искусства. Уметь рисовать не нужно. Это мягкий и безопасный способ работать с глубокими переживаниями, включая те, которые сложно описать словами.</p>
        </div>
    </div>
</section>

<section class="section muted">
    <div class="shell about-grid">
        <div class="photo-stack">
            <img src="<?= $asset_path ?>images/natalia-at-work.jpg" alt="Наталья ведёт арт-терапевтическую практику" loading="lazy">
            <span class="scribble" aria-hidden="true">творчество<br>возвращает<br>к себе</span>
        </div>
        <div>
            <p class="eyebrow">Обо мне</p>
            <h2>Я рядом, чтобы помочь вам услышать себя</h2>
            <p>Меня зовут Наталья. Я практический психолог и арт-терапевт. Провожу индивидуальные консультации, арт-терапевтические группы и творческие встречи онлайн и офлайн.</p>
            <ul class="timeline">
                <li><strong>2005</strong><span>МПГУ, высшее педагогическое образование</span></li>
                <li><strong>2013</strong><span>ИИПР, практическая психология</span></li>
                <li><strong>2024</strong><span>Академия арт-терапии, базовый курс</span></li>
                <li><strong>2025</strong><span>Психологическая помощь женщинам методами арт-терапии</span></li>
            </ul>
        </div>
    </div>
</section>

<section class="section requests">
    <div class="shell">
        <p class="eyebrow">С чем можно прийти</p>
        <h2>Ваш запрос не обязан быть идеально сформулирован</h2>
        <div class="card-grid">
            <article><span>01</span><h3>Потеря опоры</h3><p>Ощущение тупика, кризис, потеря себя или поиск внутренних ресурсов.</p></article>
            <article><span>02</span><h3>Отношения и границы</h3><p>Понимание чувств и потребностей, выстраивание границ с близкими и партнёрами.</p></article>
            <article><span>03</span><h3>Выгорание</h3><p>Материнское и эмоциональное выгорание, усталость и возвращение к себе.</p></article>
            <article><span>04</span><h3>Перемены</h3><p>Трудный выбор, неопределённость будущего или период после развода.</p></article>
        </div>
    </div>
</section>

<section class="section gallery-band" id="practice">
    <div class="shell practice-grid">
        <div>
            <p class="eyebrow">Как проходит арт-терапия</p>
            <h2>Разговор, творчество и бережное исследование</h2>
            <p>Мы начинаем с разговора о вашем запросе, затем выполняем подходящую технику и вместе исследуем получившуюся работу.</p>
            <p>Моя задача — создать доверительное пространство, в котором внимание сосредоточено на главном: встрече с собой.</p>
        </div>
        <div class="gallery-pair">
            <img src="<?= $asset_path ?>images/art-session-1.png" alt="Материалы арт-терапии" loading="lazy">
            <img src="<?= $asset_path ?>images/art-session-2.png" alt="Творческая работа на арт-терапии" loading="lazy">
        </div>
    </div>
</section>

<section class="section program-teaser">
    <div class="shell teaser-inner">
        <div>
            <p class="eyebrow">Авторская программа</p>
            <h2>«Трансформация»</h2>
            <p>Пять встреч для мягкого прохождения кризиса с моим сопровождением.</p>
        </div>
        <a class="button button-light" href="./transform/">Узнать подробнее</a>
    </div>
</section>

<section class="section faq">
    <div class="shell narrow">
        <p class="eyebrow">Частые вопросы</p>
        <h2>Можно начать без подготовки</h2>
        <details open><summary>Что делать, если я не умею рисовать?</summary><p>В арт-терапии умение рисовать не нужно. Каракули, пятна и простые линии — ваш уникальный язык, который помогает лучше понять себя.</p></details>
        <details><summary>Что понадобится для онлайн-сессии?</summary><p>Устройство с камерой и микрофоном, стабильный интернет, бумага и любые материалы, которые есть под рукой: карандаши, фломастеры или краски.</p></details>
        <details><summary>Как часто нужно заниматься?</summary><p>Частота зависит от целей. Обычно это одна встреча в неделю, но оптимальный график мы определим вместе на первой консультации.</p></details>
    </div>
</section>

<section class="section pricing">
    <div class="shell">
        <p class="eyebrow">Форматы и стоимость</p>
        <h2>Выберите подходящий формат</h2>
        <div class="price-grid">
            <article><h3>Индивидуальная сессия</h3><p class="price">3 500 ₽</p><p>Онлайн · 1,5 часа<br>Разовая или длительная работа</p><a href="<?= $consultation_url ?>">Записаться →</a></article>
            <article class="featured"><small>5 встреч</small><h3>Трансформация</h3><p class="price">от 10 000 ₽</p><p>Индивидуально или в мини-группе<br>Предварительное собеседование</p><a href="./transform/">О программе →</a></article>
            <article><h3>Групповая практика</h3><p class="price">10 000 ₽</p><p>До 8 человек<br>Онлайн или офлайн в Москве</p><a href="<?= $consultation_url ?>">Обсудить →</a></article>
        </div>
    </div>
</section>

<section class="section final-cta">
    <div class="shell narrow">
        <p class="eyebrow">Первый шаг</p>
        <h2>Можно просто написать</h2>
        <p>Расскажите в двух словах, что вас беспокоит. Я отвечу и помогу выбрать подходящий формат.</p>
        <a class="button" href="<?= $consultation_url ?>">Написать в Telegram</a>
    </div>
</section>

