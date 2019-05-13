<?php

$novelties_1 = '<div class="aside-slice newest-item">
                    <p class="newest-title">
                        Новинка <a href="/products/wine/collection/">Вина коллекционные</a>
                        <span class="aside-arrow"></span>
                    </p>
                    <p class="newest-image">
                        <a href="/products/wine/collection/">
                            <img class="aside-img" src="/img/aside/aside-new-products-8.jpg" alt="" />
                        </a>
                    </p>
                </div>';

$novelties_2 = '<div class="aside-slice newest-item">
                    <p class="newest-title">
                        Новинка <a href="/products/cognac/mrn/">Коньяк ОС «Прасковейский Премиум»</a>
                        <span class="aside-arrow"></span>
                    </p>
                    <p class="newest-image">
                        <a href="/products/cognac/mrn/">
                            <img class="aside-img" src="/img/aside/aside-new-products-9.jpg" alt="" />
                        </a>
                    </p>
                </div>';


$novelties_3 = '<div class="aside-slice newest-item">
                    <p class="newest-title">
                        Новинка <a href="/products/wine/sparkling/">Вино игристое сухое «Saint Martin de la Garrigue» белое</a>
                        <span class="aside-arrow"></span>
                    </p>
                    <p class="newest-image">
                        <a href="/products/wine/sparkling/">
                            <img class="aside-img" src="/img/aside/aside-new-products-10.jpg" alt="" />
                        </a>
                    </p>
                </div>';

$novelties_4 = '<div class="aside-slice newest-item">
                    <p class="newest-title">
                        Новое оформление <a href="/products/cognac/ordin/">Коньяк пятилетний «Пять звездочек»</a>
                        <span class="aside-arrow"></span>
                    </p>
                    <p class="newest-image">
                        <a href="/products/cognac/ordin/">
                            <img class="aside-img" src="/img/aside/aside-new-products-13.jpg" alt="" />
                        </a>
                    </p>
                </div>';

$novelties_5 = '<div class="aside-slice newest-item">
                    <p class="newest-title">
                        Новое оформление <a href="/products/cognac/ordin/">Коньяк трехлетний «Три звездочки»</a>
                        <span class="aside-arrow"></span>
                    </p>
                    <p class="newest-image">
                        <a href="/products/cognac/ordin/">
                            <img class="aside-img" src="/img/aside/aside-new-products-14.jpg" alt="" />
                        </a>
                    </p>
                </div>';

$array_novelties = array($novelties_1, $novelties_2, $novelties_3, $novelties_4, $novelties_5);
shuffle($array_novelties);
$rand_novelties = array_rand($array_novelties, 5);

?>
<aside>
    <h2>Новинки</h2>
    <?php
    foreach ($rand_novelties as $novelty) {
        echo $array_novelties[$novelty] . "\n";
    }
    ?>
</aside>