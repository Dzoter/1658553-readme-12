<?php
/* @var string $block */
/* @var string $search */
?>
<h1 class="visually-hidden">Страница результатов поиска</h1>
<section class="search">
    <h2 class="visually-hidden">Результаты поиска</h2>
    <div class="search__query-wrapper">
        <div class="search__query container">
            <span>Вы искали:</span>
            <span class="search__query-text"><?=$search?></span>
        </div>
    </div>
    <div class="search__results-wrapper">
        <div class="container">
            <div class="search__content">
            <?= $block ?>
            </div>
        </div>
    </div>
</section>
</main>
