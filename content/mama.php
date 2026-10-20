<?php

declare(strict_types=1);

$mama_url = 'https://t.me/Nata_lia1?text=' . rawurlencode('Здравствуйте! Хочу познакомиться и узнать подробнее о программе арт-терапии для мам.');
?>
<section class="mama-hero">
    <div class="shell mama-hero-grid">
        <div class="mama-hero-copy">
            <p class="eyebrow">Программа из 5 встреч · индивидуально · онлайн</p>
            <h1>Арт-терапия для мам, которые <em>устали держаться</em></h1>
            <p class="lead">Пространство, где не нужно быть сильной, всё успевать и подбирать правильные слова. Можно остановиться, услышать себя и постепенно вернуть внутреннюю опору.</p>
            <a class="button" href="<?= $mama_url ?>">Познакомиться бесплатно</a>
            <p class="mama-hero-note">25 минут онлайн · без обязательств</p>
        </div>
        <div class="mama-hero-photo">
            <span aria-hidden="true"></span>
            <img src="<?= $asset_path ?>images/natalia-at-work.jpg" alt="Арт-терапевт Наталья Иоанниди за работой">
        </div>
    </div>
</section>

<section class="section mama-recognition">
    <div class="shell">
        <p class="eyebrow">Возможно, вам знакомо</p>
        <h2>Забота обо всех стала привычной.<br>А на себя сил почти не осталось.</h2>
        <div class="mama-signs">
            <article><span>01</span><p>Даже после отдыха усталость быстро возвращается.</p></article>
            <article><span>02</span><p>Раздражение и чувство вины сменяют друг друга.</p></article>
            <article><span>03</span><p>Трудно понять, чего хочется именно вам.</p></article>
            <article><span>04</span><p>Просить о помощи непривычно, а справляться одной всё тяжелее.</p></article>
        </div>
        <p class="mama-recognition-text">С этим не обязательно оставаться один на один. На встречах мы не будем оценивать, насколько вы «хорошая мама». Будем бережно разбираться, что происходит с вами.</p>
    </div>
</section>

<section class="section muted">
    <div class="shell mama-support-grid">
        <div>
            <img class="rounded-image" src="<?= $asset_path ?>images/art-session-1.png" alt="Материалы для арт-терапевтической сессии" loading="lazy">
        </div>
        <div>
            <p class="eyebrow">Чем может помочь арт-терапия</p>
            <h2>Вернуть внимание к себе — без ещё одного списка задач</h2>
            <p>Когда переживания трудно объяснить словами, цвет, линия и образ помогают заметить их и безопасно выразить.</p>
            <ul class="mama-list">
                <li>снизить внутреннее напряжение;</li>
                <li>заметить свои чувства и потребности;</li>
                <li>найти доступные источники поддержки;</li>
                <li>восстановить контакт с собой за пределами материнской роли.</li>
            </ul>
            <p>Уметь рисовать не нужно. Здесь нет красивых или неправильных работ.</p>
        </div>
    </div>
</section>

<section class="section mama-process">
    <div class="shell">
        <p class="eyebrow">Программа из 5 встреч</p>
        <h2>От накопившейся усталости — к контакту с собой</h2>
        <div class="mama-steps">
            <article><strong>1</strong><h3>Останавливаемся</h3><p>Замечаем ваше текущее состояние и даём место усталости, которую приходилось откладывать.</p></article>
            <article><strong>2–3</strong><h3>Возвращаем контакт</h3><p>Исследуем чувства и потребности, отделяем своё от требований и ожиданий окружающих.</p></article>
            <article><strong>4–5</strong><h3>Собираем опоры</h3><p>Находим доступные способы поддерживать себя и переносим их из сессий в повседневную жизнь.</p></article>
        </div>
        <p class="mama-program-note">Это ориентир, а не жёсткий сценарий: содержание встреч адаптируется под ваш запрос и состояние.</p>
    </div>
</section>

<section class="section dark-section mama-about">
    <div class="shell mama-about-grid">
        <div>
            <p class="eyebrow">О специалисте</p>
            <h2>Наталья Иоанниди</h2>
            <p>Практический психолог и арт-терапевт. Специализируюсь на психологической помощи женщинам методами арт-терапии.</p>
            <p>Моя задача — создать принимающее пространство, в котором можно быть разной, не торопиться и исследовать то, что действительно важно.</p>
            <p class="mama-credentials">Высшее педагогическое образование · профессиональная переподготовка по практической психологии · профессиональная переподготовка по психологической помощи женщинам методами арт-терапии</p>
        </div>
        <img class="rounded-image" src="<?= $asset_path ?>images/natalia-portrait.png" alt="Психолог и арт-терапевт Наталья Иоанниди" loading="lazy">
    </div>
</section>

<section class="section mama-format">
    <div class="shell mama-format-grid">
        <div>
            <p class="eyebrow">Формат</p>
            <h2>Начать можно с короткого знакомства</h2>
            <p>За 25 минут вы сможете рассказать о своей ситуации, задать вопросы и понять, комфортно ли вам со мной.</p>
        </div>
        <div class="mama-offer">
            <p><span>Знакомство</span><strong>бесплатно</strong><small>25 минут · онлайн</small></p>
            <p><span>Программа</span><strong>14 000 ₽</strong><small>5 встреч по 1,5 часа · индивидуально · онлайн</small></p>
            <a class="button" href="<?= $mama_url ?>">Написать Наталье сразу</a>
        </div>
    </div>
</section>

<section class="section mama-request" id="request">
    <div class="shell mama-request-grid">
        <div>
            <p class="eyebrow">Если начинать разговор трудно</p>
            <h2>Заполните короткую анкету</h2>
            <p>Наталья получит заявку и сама напишет вам в Telegram, чтобы предложить время для бесплатного 25-минутного знакомства.</p>
            <p>Рассказывать о личной ситуации в форме не нужно.</p>
        </div>
        <form class="mama-form" action="./request.php" method="post">
            <label>Как к вам обращаться
                <input type="text" name="name" maxlength="100" autocomplete="name" required>
            </label>
            <label>Ваш Telegram
                <input type="text" name="telegram" maxlength="33" placeholder="@username" autocomplete="off" required>
            </label>
            <label>Когда удобнее познакомиться
                <select name="preferred_time" required>
                    <option value="">Выберите вариант</option>
                    <option value="Утром">Утром</option>
                    <option value="Днём">Днём</option>
                    <option value="Вечером">Вечером</option>
                    <option value="Договоримся в Telegram">Договоримся в Telegram</option>
                </select>
            </label>
            <label class="form-trap" aria-hidden="true">Ваш сайт<input type="text" name="website" tabindex="-1" autocomplete="off"></label>
            <input type="hidden" name="utm_source" value="<?= htmlspecialchars((string) ($_GET['utm_source'] ?? ''), ENT_QUOTES, 'UTF-8') ?>">
            <input type="hidden" name="utm_campaign" value="<?= htmlspecialchars((string) ($_GET['utm_campaign'] ?? ''), ENT_QUOTES, 'UTF-8') ?>">
            <label class="mama-consent">
                <input type="checkbox" name="personal_data_consent" value="1" required>
                <span>Даю <a href="../privacy/#consent" target="_blank">согласие на обработку персональных данных</a>.</span>
            </label>
            <button class="button" type="submit">Отправить анкету</button>
        </form>
        <script>
            (function () {
                var form = document.querySelector('.mama-form');
                var started = false;
                function trackStart(event) {
                    if (started || ['name', 'telegram', 'preferred_time'].indexOf(event.target.name) === -1 || event.target.value.trim() === '') {
                        return;
                    }
                    started = true;
                    ym(113678955,'reachGoal','form_start');
                }
                form.addEventListener('input', trackStart);
                form.addEventListener('change', trackStart);
            })();
        </script>
    </div>
</section>

<section class="section final-cta mama-final">
    <div class="shell narrow">
        <p class="eyebrow">Первый шаг</p>
        <h2>Не обязательно сначала собраться с силами</h2>
        <p>Можно просто написать. Мы познакомимся и спокойно решим, подходит ли вам арт-терапия сейчас.</p>
        <a class="button" href="<?= $mama_url ?>">Познакомиться бесплатно</a>
    </div>
</section>
