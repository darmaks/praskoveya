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
                    <h2 class="article-heading">ОШИБКА 403</h2>
                    <p class="article-content">К сожалению, у Вас недостаточно прав доступа для просмотра этой страницы.<br><br>
                   Если вы уверены, что страница с заданным URL очень нужна Вам или Вы считаете, что у Вас есть права на доступ к этой странице, пожалуйста, <a href="/contacts/">свяжитесь с нами</a> и сообщите об ошибке.<br><br>
                    Спасибо.</p>
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