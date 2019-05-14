<?php include("../../includes/a_config.php");?>
<!DOCTYPE html>
<html lang="ru">
   <head>
      <?php include("../../includes/head.php");?>
   </head>
   <body class="about_museum">
      <?php include("../../includes/navigation.php") ?>
      <!-- <h3><?php print $CURRENT_PAGE;?></h3> -->
      <div class="container">
         <div class="row">
            <div class="sub-header">
               <h1>О компании</h1>
               <p class="h1-description">					
                  вековой опыт производства
               </p>
            </div>
         </div>
      </div>
      <section class="content">
         <div class="container">
            <div class="row no-gutters">
               <div class="col-lg-9">
                  <article class="intro">
                     <h2 class="article-heading">Музей виноделия</h2>
                     <p class="article-content">Прасковейский винзавод в год своего 120-летнего юбилея приготовил подарок своим почитателям и просто любителям вкусных и качественных натуральных алкогольных напитков: открыл музей своей истории.</p>
                  </article>
                  <section class="primary">
                     <h4>Экскурсия</h4>
                     <p>Экскурсию проводит опытный гид, который ознакомит Вас с более, чем вековой историей знаменитого предприятия, проведет по старинным подвалам, хранящим на выдержке благородный напиток и поделится тайнами технологии производства.</p>
                     </section>
                     <div class="gallery-slice grey">
                     <div class="left-column">
                        <a class="fancybox" data-fancybox="museum" rel="museum" title="Музей" href="/img/museum/museum_1.jpg"><img data-src="/img/museum/museum_main.jpg" alt="" src="/img/museum/museum_main.jpg" class="lazy-loaded"></a>
                        <div class="hidden">
                           <a class="fancybox" data-fancybox="museum" rel="museum" title="Музей" href="/img/museum/museum_2.jpg"></a>
                           <a class="fancybox" data-fancybox="museum" rel="museum" title="Музей" href="/img/museum/museum_3.jpg"></a>
                           <a class="fancybox" data-fancybox="museum" rel="museum" title="Музей" href="/img/museum/museum_4.jpg"></a>
                           <a class="fancybox" data-fancybox="museum" rel="museum" title="Музей" href="/img/museum/museum_5.jpg"></a>
                           <a class="fancybox" data-fancybox="museum" rel="museum" title="Музей" href="/img/museum/museum_6.jpg"></a>
                           <a class="fancybox" data-fancybox="museum" rel="museum" title="Музей" href="/img/museum/museum_7.jpg"></a>
                           <a class="fancybox" data-fancybox="museum" rel="museum" title="Музей" href="/img/museum/museum_8.jpg"></a>
                           <a class="fancybox" data-fancybox="museum" rel="museum" title="Музей" href="/img/museum/museum_9.jpg"></a>
                        </div>
                     </div>
                  </div>
                  
                  <table>
                     <tbody>
                        <tr>
                           <th>Программа экскурсии:</th>
                        </tr>
                        <tr>
                           <td><span>посещение исторического зала</span></td>
                        </tr>
                        <tr>
                           <td><span>рассказ о технологии производства</span></td>
                        </tr>
                        <tr>
                           <td><span>экскурсия по подвалам</span></td>
                        </tr>
                        <tr>
                           <td><span>просмотр кинофильма</span></td>
                        </tr>
                        <tr>
                           <td><span>дегустация образцов (18+)</span></td>
                        </tr>
                        <tr>
                           <td><span>посещение фирменного магазина</span></td>
                        </tr>
                     </tbody>
                  </table>
                  <article class="intro booking">
                  <h2 class="article-heading">Бронирование</h2>
                     <div class="museum_booking">                        
                        <div class="link-list">
                           <p>Забронировать посещение музея и задать вопросы Вы можете, связавшись с нами</p>
                        </div>
                        <div class="link-list link-list-tel">
                           <p class="tel">+7 (962) 740-80-80</p>
                           <p class="tel">+7 (86559) 7-70-90</p>
                           <p class="email">shuliko@praskoveya.ru</p>
                        </div>
                     </div>
                  </article>
               </div>
               <div class="col-lg-3">
                  <?php include($_SERVER["DOCUMENT_ROOT"].'/data/aside.php'); ?>
               </div>
            </div>
         </div>
      </section>
      <?php include("../../includes/footer.php") ?>
      <?php include("../../includes/footer_scripts.php") ?>
   </body>
</html>

