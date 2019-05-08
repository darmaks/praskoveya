<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include("includes/head.php");?>
</head>
<body class="homepage">
    <?php include("includes/navigation.php") ?>

    <div class="container">
        <div class="row">
            <div class="sub-header">
                <h1>Прасковейский<br>завод</h1>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-9">
                    <article class="intro">
                        <h2 class="article-heading">Музей виноделия</h2>
                        <p class="article-content">
                        Прасковейский винзавод в год своего 120-летнего юбилея приготовил подарок своим почитателям и просто любителям вкусных и качественных натуральных алкогольных напитков: <a href="/about/museum">открыл музей своей истории</a>.
                        </p>

                        <h2 class="article-heading">Традиции качества</h2>
                        <p class="article-content">Уже более 					
                            <?php
                                if ( date('n') == 5 )
                                    {
                                        if( date('j') < 15 )
                                        {
                                            $age = date('Y') - 1898 - 1;
                                            echo $age;
                                        }
                                        else
                                        {							
                                            $age = date('Y') - 1898;
                                            echo $age;
                                        }
                                    }
                                elseif ( date('n') > 5 )
                                    {
                                        $age = date('Y') - 1898;
                                        echo $age;
                                    }
                                elseif ( date('n') < 5 )
                                    {
                                        $age = date('Y') - 1898 - 1;
                                        echo $age;
                                    }
                            ?>
                            лет прасковейские мастера держат марку, производя алкогольную продукцию неизменно высокого качества.</p>
                            <div class="video-container">
                                <iframe width="597" height="315" src="https://www.youtube.com/embed/_a7Wtyyc-u8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                    </article>
                    <section class="primary">
                        <h3>От прошлого к будущему</h3>
                        <div class="full-image-slice">
                            <img src="/img/main/praskoveya-yard.jpg" alt="">
                        </div>
                        <div class="article-info-wrapper">
                            <p class="article-section-info">
                                15 мая 1898 года указом министров финансов в селе Прасковея был оборудован казенный винный склад для производства и розлива вин в Ставропольском крае. С этой даты начинает отсчет своей <a href="/history">истории</a> АО «Прасковейское» - современное предприятие по производству качественных коньяков, а также международная компания с широким ассортиментом продукции.
                            </p>
                        </div>
                    </section>
                    <section class="primary">
                        <h3>Коньяки Прасковеи</h3>
                        <div class="full-image-slice">
                            <img src="/img/main/praskoveya-cognac.jpg" alt="" />
                        </div>
                        <div class="article-info-wrapper">
                            <p class="article-section-info"><a href="/about/winerys/#praskoveya">Предприятие</a> специализируется на производстве высококачественных коньяков и крепких виноградных напитков. Дистилляция и выдержка спиртов проходят под контролем профессионалов в строгом соответствии с ГОСТ. Знание современных технологий и более полувековой опыт производства позволяют продукции АО&nbsp«Прасковейское» конкурировать с лучшими коньяками мира.</p>
                        </div>
                    </section>
                    <section class="primary">
                        <h3>Расширяем границы</h3>
                        <div class="full-image-slice">
                            <img src="/img/main/praskoveya-europe.jpg" alt="" />
                        </div>
                        <div class="article-info-wrapper">
                            <p class="article-section-info">АО «Прасковейское» имеет собственные предприятия в <a href="/about/winerys/#wine-union">Болгарии</a> и на юге <a href="/about/winerys/#st-martin">Франции</a>, с модернизированными заводами и землями с виноградниками. Процесс производства проходит в соответствии с жесткими технологическими требованиями, едиными для всех предприятий компании.</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3">
                    <?php include($_SERVER["DOCUMENT_ROOT"].'/data/aside.php'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php include("includes/footer.php") ?>
    <?php include("includes/footer_scripts.php") ?>
</body>
</html>