<?php include("../../../includes/a_config.php");?>
<?php include($_SERVER["DOCUMENT_ROOT"].'/data/rating/_drawrating.php'); ?>
<!DOCTYPE html>
<html lang="ru">
   <head>
      <?php include("../../../includes/head.php");?>
   </head>
   <body class="products">
      <?php include("../../../includes/navigation.php") ?>
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
                     <h2 class="article-heading">Игристые вина</h2>
                     <p class="article-content">Серия игристых вин «Saint Martin De la Garrigue» изготавливается из винограда выращенного на юге Франуии. Имеет изысканный цветочный букет, гармонично освежающий вкус, характерные игристые и пенистые свойства.</p>
                  </article>
                  <section class="primary">
                     <div class="product-box">
                        <h3 class="product-title">Вино игристое сухое «Saint Martin De la Garrigue» розовое </h3>
                        <div class="product-info">
                           <div class="product-column_content">
                              <div class="product-column left">
                                 <a class="fancybox" title="Вино игристое сухое «Saint Martin De la Garrigue» розовое" href="/img/products/bigsize/sm-sparkling-rose.jpg"><img class="products-mini" src="/img/products/sm-sparkling-rose.png" alt=""></a>
                              </div>
                              <div class="product-column right">
                                 <p>Вино изготавливается из красных сортов винограда, выращенных на юге Франции. Цвет бутона розы с отблесками. Легкое, хорошо сбалансированное вино с магкой шампанизацией.</p>
                                 <p>Произведено и розлито в замке Шато Сант Мартин де ла Гарриг в соответствии с европейскими стандартами. Превосходно подойдет к фруктам и десертам.</p>
                                 <p class="product-parameters">0,75 л./13% об.</p>
                              </div>
                           </div>
                           <div class="rpoduct-rating raiting"><?php echo rating_bar('smchardsauvignon',5); ?></div>
                        </div>
                     </div>
                     <div class="product-box">
                        <h3 class="product-title">Вино игристое сухое «Saint Martin De la Garrigue» белое</h3>
                        <div class="product-info">
                           <div class="product-column_content">
                              <div class="product-column left">
                                 <a class="fancybox" title="Вино игристое сухое «Saint Martin De la Garrigue» белое" href="/img/products/bigsize/sm-sparkling-dry-white.jpg"><img class="products-mini" src="/img/products/sm-sparkling-dry-white.png" alt=""></a>
                              </div>
                              <div class="product-column right">
                                 <p class="producer">Saint Martin De la Garrigue</p>
                                 <p>Вино изготавливается из винограда сортов Шардоне и Совиньон, выращенных на юге Франции. Имеет чистый светло-соломенный цвет. Легкое хорошо сбалансированное вино с мягкой шампанизацией, произведено и разлито в Замке Шато Сент Мартин де ла Гарриг. Свежесть вкуса, яркость и нарядность букета, прекрасные игристые качества — все это сочетает наш  образец игристого белого вина. Без преувеличения и с большой гордость можно сказать , что это вино украсит самое значимое, самое неординарное событие в Вашей жизни и станет желанным спутником для Вас и Ваших друзей.</p>
                                 <p class="product-parameters">0,75 л./13% об.</p>
                              </div>
                           </div>
                           <div class="rpoduct-rating raiting"><?php echo rating_bar('smchardsauvignon',5); ?></div>
                        </div>
                     </div>
                  </section>
               </div>
               <div class="col-lg-3">
                  <?php include($_SERVER["DOCUMENT_ROOT"].'/data/aside.php'); ?>
               </div>
            </div>
         </div>
      </section>
      <?php include("../../../includes/footer.php") ?>
      <?php include("../../../includes/footer_scripts.php") ?>
   </body>
</html>

