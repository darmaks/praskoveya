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
                     <h2 class="article-heading">Коллекционные вина</h2>
                     <p class="article-content">Коллекционные Прасковейские вина имеют дополнительную выдержку в бутылках не менее 5 лет. За это время в вине развивается очень тонкий букет бутылочной выдержки.</p>
                  </article>
                  <section class="primary">
                     <div class="product-box">
                        <h3 class="product-title">Прасковейский Винзавое</h3>
                        <div class="product-info">
                           <div class="product-column_content">
                              <div class="product-column left">
                                 <a class="fancybox" title="Коллекционные вина" href="/img/products/bigsize/pr-collection-wine.jpg"><img class="products-mini" src="/img/products/pr-collection-wine.png" alt=""></a>
                              </div>
                              <div class="product-column right">
                                 <p class="producer">Прасковейский винзавод</p>
                                 <p>Вкус коллекционных вин поражает своей легкостью и бархатистостью. Первая закладка коллекционных вин была произведена в 1945 году. С тех пор в подвалах Прасковеи собрана уникальная коллекция вин, которая насчитывает более 60 тысяч бутылок. Интересны и порадуют гурманов коллекционные вина различных лет закладки - «Янтарь Ставрополья», «Мускат Прасковейский», «Букет Прикумья», «Прикумское белое», «Юбилейное Прасковейское» и др. По составу, цвету, аромату, тончайшему букету и вкусовым достоинствам и свойствам эти вина достигли совершенства.</p>
                                 <p class="product-parameters">0,7, 0,75, 0,8 л.</p>
                              </div>
                           </div>
                           <div class="rpoduct-rating raiting"><?php echo rating_bar('prcollectionwine',5); ?></div>
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

