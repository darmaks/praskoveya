

<?php include("../includes/a_config.php");?>
<!DOCTYPE html>
<html lang="ru">
   <head>
      <?php include("../includes/head.php");?>
   </head>
   <body class="history_page">
      <?php include("../includes/navigation.php") ?>
      <!-- <h3><?php print $CURRENT_PAGE;?></h3> -->
      <div class="container">
         <div class="row">
            <div class="sub-header">
               <h1>Контакты</h1>
               <p class="h1-description">
                    свяжитесь c нами
               </p>
            </div>
         </div>
      </div>
      <section class="content">
         <div class="container">
            <div class="row no-gutters">
               <div class="col-lg-9">
                  <article class="intro">
                     <h2 class="article-heading">Адрес </h2>
                     <p class="article-content">356817, Россия,<br>
                     Ставропольский край, Буденновский район,<br>
                     с. Прасковея, ул. Ленина, д. 11</p>
                  </article>

                  <article class="intro">
                     <h2 class="article-heading">Приемная </h2>                    
                     <div class="column two link-list">
                            <p class="article-content">Мы ждем вас ежедневно с 8-00 до 17-00.<br>Выходные дни: суббота, воскресенье.</p>
					</div>
                    <div class="column two link-list">
							<h3>Секретарь-референт</h3>
							<p>Торопцева Ирина Ивановна</p>
							<ul>
								<li class="nolink">+7 (86559) 7-70-80</li>
								<li><a href="mailto:info@praskoveya.ru">info@praskoveya.ru</a></li>
							</ul>
						</div>                     
                  </article>

                  <article class="intro">
                     <h2 class="article-heading">Коммерция </h2>
                     <div class="column two link-list">
							<h3>Зам. ген. директора по коммерции</h3>
							<p class="article-content">Титаренко Игорь Николаевич</p>
							<ul>
								<li class="nolink">+7 (86559) 7-70-82</li>
								<li><a href="mailto:titarenko@praskoveya.ru">titarenko@praskoveya.ru</a></li>
							</ul>
						</div>                     
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

