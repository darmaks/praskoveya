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
                     <h2 class="article-heading">Розовые вина</h2>
                     <p class="article-content">Розовым винам присущи оттенки цветов от светло-розовых до светло-красных. Отличаются красочным бархатистым вкусом с приятным ароматом фруктовой свежести. Идеальный аперитив. Подавать охлажденным до t +10 +12 °C.</p>
                  </article>
                  <section class="primary">
                     <div class="product-box">
                        <h3 class="product-title">Вино згу сухое розовое «Nissovo Rose» </h3>
                        <div class="product-info">
                           <div class="product-column_content">
                              <div class="product-column left">
                                 <a class="fancybox" title="Вино защищенного географического указания сухое розовое «Nissovo Rose»" href="/img/products/bigsize/wu-nissovo-rose.jpg"><img class="products-mini" src="/img/products/wu-nissovo-rose.png" alt=""></a>
                              </div>
                              <div class="product-column right">
                                 <p class="producer">Wine Union</p>
                                 <p>Вино защищенного географического указания сухое розовое «Nissovo Rose» производится из отборного винограда сортов Каберне Фран и Мерло региона Дунайская равнина.</p>
                                 <p>Это вино имеет утонченный розовый цвет, сложный аромат лесных ягод, оставляющий долгий впечатляющий вкус.</p>
                                 <p>Вино идеально сочетается с блюдами из рыбы, птицы, сыры и десерты.</p>
                                 <p class="product-parameters">0,75 л./12-14% об.</p>
                              </div>
                           </div>
                           <div class="rpoduct-rating raiting"><?php echo rating_bar('wunissovorose',5); ?></div>
                        </div>
                     </div>
                     <div class="product-box">
                        <h3 class="product-title">Вино сухое розовое «Прасковейское» </h3>
                        <div class="product-info">
                           <div class="product-column_content">
                              <div class="product-column left">
                                 <a class="fancybox" title="Вино сухое розовое «Прасковейское»" href="/img/products/bigsize/wu-praskoveyskoe-rose.jpg"><img class="products-mini" src="/img/products/wu-praskoveyskoe-rose.png" alt=""></a>
                              </div>
                              <div class="product-column right">
                                 <p class="producer">Wine Union</p>
                                 <p>Изготовлено из винограда сортов «Каберне Совиньон», «Каберне Фран», «Мерло». Отличается мягким приятным вкусом и ароматом фруктовой свежести.</p>
                                 <p class="product-parameters">0,75 л./12-14% об.</p>
                              </div>
                           </div>
                           <div class="rpoduct-rating raiting"><?php echo rating_bar('rose',5); ?></div>
                        </div>
                     </div>
                     <div class="product-box">
                        <h3 class="product-title">Вино сухое розовое «Bronzinelle»</h3>
                        <div class="product-info">
                           <div class="product-column_content">
                              <div class="product-column left">
                                 <a class="fancybox" title="Вино сухое розовое «Bronzinelle»" href="/img/products/bigsize/sm-bronzinelle-rose.jpg"><img class="products-mini" src="/img/products/sm-bronzinelle-rose.png" alt=""></a>
                              </div>
                              <div class="product-column right">
                                 <p class="producer">Chateau Saint Martin de la Garrigue</p>
                                 <p>Изготовлено из винограда сортов «Сенсо», «Гренаш». Обладает нарядным цветом, смолистым плодово-ягодным ароматом с тонами вишни, малины, свежим сбалансированным вкусом.</p>
                                 <p>Вино идеальный спутник как деликатесов, так и пикника или барбекю, с морепродуктами или мясом.</p>
                                 <p class="product-parameters">0,75 л./13,5% об.</p>
                              </div>
                           </div>
                           <div class="rpoduct-rating raiting"><?php echo rating_bar('rosebronzinelle',5); ?></div>
                        </div>
                     </div>
                     <div class="product-box">
                        <h3 class="product-title">Вино полусладкое розовое «Прасковейское»</h3>
                        <div class="product-info">
                           <div class="product-column_content">
                              <div class="product-column left">
                                 <a class="fancybox" title="Вино полусладкое розовое «Прасковейское»" href="/img/products/bigsize/wu-praskoveyskoe-semisweet-rose.jpg"><img class="products-mini" src="/img/products/wu-praskoveyskoe-semisweet-rose.png" alt=""></a>
                              </div>
                              <div class="product-column right">
                                 <p class="producer">Wine Union</p>
                                 <p>Изготовлено из винограда сортов «Каберне Совиньон», «Памид», «Мерло». Отличается красочным бархатным вкусом с приятным ароматом фруктовой свежести.</p>
                                 <p class="product-parameters">0,75 л./11-13% об.</p>
                              </div>
                           </div>
                           <div class="rpoduct-rating raiting"><?php echo rating_bar('wurosesemisweet',5); ?></div>
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

