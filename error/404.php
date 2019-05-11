<?php include("../includes/a_config.php");?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include("../includes/head.php");?>
</head>
<body class="homepage">
    <?php include("../includes/navigation.php") ?>

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
				    <h2 class="article-heading">Ошибка 404</h2>
				    <p class="article-content">Запрашиваемая Вами страница не найдена на сервере.</p>
			    </article>
                </div>
                <div class="col-lg-3">
                    <?php include($_SERVER["DOCUMENT_ROOT"].'/data/aside.php'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php include("../includes/footer.php") ?>
    <?php include("../includes/footer_scripts.php") ?>
</body>
</html>