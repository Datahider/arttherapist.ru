<?php

declare(strict_types=1);
?>
<section class="section request-result">
    <div class="shell narrow">
        <p class="eyebrow"><?= htmlspecialchars($result_eyebrow, ENT_QUOTES, 'UTF-8') ?></p>
        <h1><?= htmlspecialchars($result_title, ENT_QUOTES, 'UTF-8') ?></h1>
        <p><?= htmlspecialchars($result_message, ENT_QUOTES, 'UTF-8') ?></p>
        <a class="button" href="<?= htmlspecialchars($result_url, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($result_button, ENT_QUOTES, 'UTF-8') ?></a>
    </div>
</section>
<?php if ($request_delivered): ?>
<script>
    ym(113678955,'reachGoal','form_submit');
</script>
<?php endif; ?>
