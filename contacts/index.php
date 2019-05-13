<?php include("../includes/a_config.php");?>
<!DOCTYPE html>
<html lang="ru">
   <head>
      <?php include("../includes/head.php");?>
   </head>
   <body class="contacts_page">
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
                        с. Прасковея, ул. Ленина, д. 11
                     </p>
                  </article>
                  <div class="map-responsive">
                     <iframe class="maps_contacts"src="https://www.google.ru/maps/embed?pb=!1m18!1m12!1m3!1d2922752.171246901!2d44.62295477449616!3d44.32536336041898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4055d687d3b834f1%3A0x3f7dff86109312b4!2sPraskoveya!5e0!3m2!1sen!2s!4v1399270097187" width="597" height="350" frameborder="0" style="border:0" class="contacts__map"></iframe>
                  </div>
                  <article class="intro reception">
                     <h2 class="article-heading">Приемная </h2>
                     <div class="row_contacts">
                        <div class="link-list">
                           <p class="article-content">Мы ждем вас ежедневно с 8-00 до 17-00.<br>Выходные дни: суббота, воскресенье.</p>
                        </div>
                        <div class="link-list data">
                           <h3>Секретарь-референт</h3>
                           <p>Торопцева Ирина Ивановна</p>
                           <ul>
                              <li class="nolink">+7 (86559) 7-70-80</li>
                              <li><a href="mailto:info@praskoveya.ru">info@praskoveya.ru</a></li>
                           </ul>
                        </div>
                     </div>
                  </article>
                  <article class="intro commerce">
                     <h2 class="article-heading">Коммерция </h2>
                     <div class="link-list data">
                        <h3>Зам. ген. директора по коммерции</h3>
                        <p>Титаренко Игорь Николаевич</p>
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

