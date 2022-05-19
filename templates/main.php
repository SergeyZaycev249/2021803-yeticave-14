<?php

/**
 * @var array $categories
 * @var array $lots
 * @var array $time
 */

?>
<main class="container">
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <?php foreach ($categories as $val) : ?>
                <li class="promo__item promo__item--<?= $val['symbol_code']; ?>">
                    <a class="promo__link" href="/all-lots.php?category=<?= $val['symbol_code']; ?>"><?= $val['name']; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <?php foreach ($lots as $value) : ?>
                <li class="lots__item lot">
                    <div class="lot__image">
                        <img src="<?= htmlspecialchars($value['img_url']); ?>" width="350" height="260" alt="">
                    </div>
                    <div class="lot__info">
                        <span class="lot__category"><?= htmlspecialchars($value['cat_name']); ?> </span>
                        <h3 class="lot__title"><a class="text-link" href="/lot.php?id=<?= htmlspecialchars($value['id']); ?>"><?= htmlspecialchars($value['name']); ?></a></h3>
                        <div class="lot__state">
                            <div class="lot__rate">
                                <span class="lot__amount">Стартовая цена</span>
                                <span class="lot__cost"><?= price_format(htmlspecialchars($value['initial_price'])); ?></span>
                            </div>
                            <?php $time = remaining_time(htmlspecialchars($value['finished_date']), date('Y-m-d H:i:s')); ?>
                            <div class="lot__timer timer
                            <?php if ($time[0] < 1) {
                                echo 'timer--finishing';
                            } ?>">
                                <?= str_pad($time[0], 2, "0", STR_PAD_LEFT) ?>:<?= str_pad($time[1], 2, "0", STR_PAD_LEFT) ?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>