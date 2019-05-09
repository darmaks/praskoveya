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
               <h1>История</h1>
               <p class="h1-description">					
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
                  лет мастерства
               </p>
            </div>
         </div>
      </div>
      <section class="content">
         <div class="container">
         <div class="row no-gutters">
            <div class="col-lg-9">
               <article class="intro">
                  <h2 class="article-heading">Точка отсчёта</h2>
                  <p class="article-content">Село Прасковея основано в 1781 году по велению императрицы России Екатерины Великой.</p>
                  <div class="gallery-slice grey">
								<div class="left-column">
									<a class="fancybox" rel="history" title="История" href="/img/history/history_1.jpg">                           
                              <img src="/img/history/history_main.jpg" alt="" class="full-image-slice"></a>
									<div class="hidden">
										<a class="fancybox" rel="history" title="История" href="/img/history/history_2.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_3.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_4.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_5.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_6.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_7.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_8.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_9.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_10.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_11.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_12.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_13.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_14.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_15.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_16.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_17.jpg"></a>
									</div>
								</div>
								<div class="right-column link-list">
									<ul>
										<li><a class="fancybox" rel="history" title="История" href="/img/history/history_1.jpg">Фотогалерея</a></li>
									</ul>
									<div class="hidden">
										<a class="fancybox" rel="history" title="История" href="/img/history/history_2.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_3.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_4.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_5.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_6.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_7.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_8.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_9.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_10.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_11.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_12.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_13.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_14.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_15.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_16.jpg"></a>
										<a class="fancybox" rel="history" title="История" href="/img/history/history_17.jpg"></a>
									</div>
								</div>
							</div>
               </article>
               <section class="primary">
                  <h3>Основание поселения</h3>
                  <div class="article-info-wrapper">
                     <p>
                        С момента своего основания Прасковея, наряду с городами Кизляр, Ставрополь, Георгиевск и другими, предназначается для создания Азово-Моздокской линии защиты южных рубежей России от вторжения со стороны Турции. Все новые поселения переходят под патронаж генерал-губернатора Новороссийского, Азовского, Астраханского и Саратовского края Светлейшего князя Григория Александровича Потемкина.В село Прасковея переселяются безземельные крестьяне из центрального района России. Такое решение позволило не только укрепить рубежи государства, дать плодородную землю трудолюбивым крестьянам, освободиться от потенциально недовольных и вынужденно безработных людей, но и создать на юге России не лишний для государства и российской армии мощный продовольственный резерв.
                     </p>
                  </div>
                  
               </section>
               <section class="primary">
                  <h3>Вехи истории</h3>
                  <div class="article-info-wrapper">
                     <p>15 мая 1898 года Управление акцизными сборами постановило построить в селе Прасковея казенный винный склад. Именно с этой даты начинает свою историю современное АО «Прасковейское».</p>
                     <h4>1900 г</h4>
                     <p>Казенный винный склад для производства и розлива вин приступил к работе, бесперебойно поставляя вино Ставрополью и другим регионам России.</p>
                     <h4>1917 - 1921 гг</h4>
                     <p> Революционные события 1917 г. не обошли стороной Прасковейский винзавод:  производство вин было заморожено на несколько лет, вплоть до 1921 г., когда в стране начался этап бурного развития виноградарства и виноделия. Завод возобновил работу.</p>
                     <h4>1941 - 1945 гг</h4>
                     <p>До прихода немцев в Прасковею в августе 1942 года совхоз и винзавод продолжали работать, отсылая на фронт спирт. Перед своим уходом немцы взорвали все, что могли взорвать. Несмотря на всю тяжесть условий труда, в 1943 году коллектив сумел восстановить производственные мощности и успешно справился с полевыми работами на виноградниках и полях.</p>
                     <h4>1945 - 1960 гг</h4>
                     <p>В послевоенный период урожайность виноградников была доведена до 13 тонн с гектара. За героический труд 72 работника совхоза и винзавода награждены различными высокими правительственными наградами.</p>
               </section>
               <section class="primary">
               <h3>Винотека</h3>
               <div class="article-info-wrapper">
               <p>Уважительное отношение к искусству виноделия ярко проявилось и в том, что на заводе в 1945 году была воссоздана винотека, одна из немногих в России.</p>
               <p>В Прасковейской винотеке собраны уникальные вина, производимые заводом за всю его историю, такие как «Мускат Прасковейский», «Прикумское белое», «Янтарь Ставрополья», «Букет Прикумья», «Прасковейское красное» и другие.</p>
               <p>Общая численность образцов на настоящее время составляет более шестидесяти тысяч бутылок: это подлинное национальное сокровище.</p>
               </div>
               </section>
               <section class="primary">
               <h3>Коньячное производство</h3>
               <div class="article-info-wrapper">
               <p>В 1946 году на заводе был создан коньячный цех. В 1966 году решением Правительства на базе Прасковейского винзавода  было решено организовать мощное коньячное производство государственного масштаба.</p>
               <p>Прасковея являлась родиной многих марочных вин России, а работники и специалисты винзавода имели почти вековой опыт производства высококачественных вин и водок.</p>
               <p>Для реализации этой задачи в 60-е годы в Прасковею на должность коньячного мастера был направлен на работу выпускник Краснодарского политехнического института Владимир Дмитриевич Костин. Молодой коньячный мастер исследовал водные источники края и обнаружил (с помощью местных жителей) родники с серебросодержащей водой. Эта вода не портится, имеет прекрасный вкус и как нельзя лучше подходит для коньячного купажа.</p><p>Для организации производства на высочайшем профессиональном уровне совхоз организовал мастеру дорогостоящую стажировку на родину коньяков — во Францию.На сегодняшний день выпускаемые коньяки - это гордость и визитная карточка Ставрополья. «Слепые» дегустации подтверждают, что прасковейские коньяки не уступают лучшим коньякам Франции.</p>
               </div>
               </section>
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

