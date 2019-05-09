

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
                  свяжитесь с нами
               </p>
            </div>
         </div>
      </div>
      <section class="content">
         <div class="container">
            <div class="row no-gutters">
               <div class="col-lg-9">
                  <article class="intro">
                     <h2 class="article-heading">Обратная связь </h2>
                     <form id="contactForm" action="handler.php" method="post">
			<div class="field-block">
				<label for="name">Ваше имя:</label>
				<input id="name" class="field" name="name" required type="text" placeholder="Иимя">
			</div>
			<div class="field-block">
				<label for="email">Ваш E-mail адрес:</label>
				<input id="email" class="field" name="email" required type="email" placeholder="Email-адрес">
			</div>
			<div class="field-block">
				<label for="message">Сообщение (не менее 20 символов)</label>
				<textarea id="message" class="field" required name="message" rows="4" placeholder="Сообщение (не менее 20 символов)"></textarea>
			</div>
			<div class="field-block">
				<input id="check" name="check" checked type="checkbox">
				<span class="check-text">Я добровольно отправляю свои данные</span>
			</div>
			<button id="button" class="button" type="submit">Отправить</button>
			<div class="result">
				<span id="answer"></span>
				<span id="loader"><img src="images/loader.gif" alt=""></span>
			</div>
		</form>
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

