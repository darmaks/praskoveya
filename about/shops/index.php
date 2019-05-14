

<?php include("../../includes/a_config.php");?>
<!DOCTYPE html>
<html lang="ru">
   <head>
      <?php include("../../includes/head.php");?>
   </head>
   <body class="about_shops">
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
                     <h2 class="article-heading">Фирменные магазины</h2>
                     <p class="article-content">Полный ассортимент продукции представлен в специализированных фирменных магазинах.</p>
                  </article>
                  <section class="header-block-h3">
                     <h3>Регион</h3>
                     <!-- <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Выберите регион
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           <a class="dropdown-item" role="tab" data-toggle="tab" href="#tab1">Москва</a>
                           <a class="dropdown-item" role="tab" data-toggle="tab" href="#tab2">Московская область</a>
                           <a class="dropdown-item" role="tab" data-toggle="tab" href="#tab3">Нижегородская область</a>
                           <a class="dropdown-item" role="tab" data-toggle="tab" href="#tab4">Ростовская область</a>
                           <a class="dropdown-item" role="tab" data-toggle="tab" href="#tab5">Ставропольский край</a>
                        </div>
                        </div>
                        
                        <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="nav-home-tab">
                        1
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="nav-profile-tab">
                        2
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="nav-contact-tab">
                        3
                        </div>
                        <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="nav-profile-tab">
                        4
                        </div>
                        <div class="tab-pane fade" id="tab5 " role="tabpanel" aria-labelledby="nav-contact-tab">
                        5
                        </div>
                        </div> -->
                     <div id="input-select-styler" class="jq-selectbox jqselect select-shops-region changed" style="display: inline-block; position: relative; z-index:100">
                        <select name="region" id="input-select" class="select-shops-region" style="margin: 0px; padding: 0px; position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; opacity: 0;">
                           <option value="r77">Москва</option>
                           <option value="r50">Московская область </option>
                           <option value="r52">Нижегородская область </option>
                           <option value="r61">Ростовская область </option>
                           <option value="r26">Ставропольский край</option>
                        </select>
                        <div class="jq-selectbox__select" style="position: relative">
                           <div class="jq-selectbox__select-text" style="width: 142px;">Ставропольский край</div>
                           <div class="jq-selectbox__trigger">
                              <div class="jq-selectbox__trigger-arrow"></div>
                           </div>
                        </div>
                        <div class="jq-selectbox__dropdown" style="position: absolute; display: none;">
                           <ul style="position: relative; list-style: none; overflow: auto; overflow-x: hidden">
                              <li class="selected sel" style="">Москва</li>
                              <li style="">Московская область </li>
                              <li style="">Нижегородская область </li>
                              <li style="">Ростовская область </li>
                              <li class="selected sel" style="">Ставропольский край</li>
                           </ul>
                        </div>
                     </div>
                  </section>
                  <div id="r26" class="group_shop_region" style="">
                     <div class="stock-slice">
                        <h4>Буденновск</h4>
                        <div class="shops-info">
                           <table>
                              <tbody>
                                 <tr>
                                    <td><span>ул. Ленинская, д. 60</span></td>
                                    <td>+7 (909) 755-59-88</td>
                                 </tr>
                                 <tr>
                                    <td><span>ул. Борцов революции, д. 168</span></td>
                                    <td>+7 (86559) 2-13-71</td>
                                 </tr>
                                 <tr>
                                    <td><span>пр-т. Космонавтов, д. 8в</span></td>
                                    <td>+7 (86559) 2-22-13</td>
                                 </tr>
                                 <tr>
                                    <td><span>ул. Мира, д. 117</span></td>
                                    <td>+7 (86559) 3-73-71</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="stock-slice">
                        <h4>Ессентуки</h4>
                        <div class="shops-info">
                           <table>
                              <tbody>
                                 <tr>
                                    <td><span>ул. Кисловодская, д. 20а</span></td>
                                    <td>+7 (87934) 7-33-87</td>
                                 </tr>
                                 <tr>
                                    <td><span>ул. Октябрьская, д. 435</span></td>
                                    <td>+7 (87934) 2-20-43</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="stock-slice">
                        <h4>Железноводск</h4>
                        <div class="shops-info">
                           <table>
                              <tbody>
                                 <tr>
                                    <td><span>ул. Ленина, д. 140</span></td>
                                    <td>+7 (87932) 4-99-84</td>
                                 </tr>
                                 <tr>
                                    <td><span>ул. Чайковского, д. 6</span></td>
                                    <td>+7 (87932) 4-25-03</td>
                                 </tr>
                                 <tr>
                                    <td><span>ул. Чайковского, д. 4</span></td>
                                    <td>+7 (87932) 3-30-38</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="stock-slice">
                        <h4>Кисловодск</h4>
                        <div class="shops-info">
                           <table>
                              <tbody>
                                 <tr>
                                    <td><span>ул. Горького, д. 24</span></td>
                                    <td>+7 (87937) 2-79-22</td>
                                 </tr>
                                 <tr>
                                    <td><span>ул. Азербайджанская, д. 21</span></td>
                                    <td>+7 (87937) 7-15-45</td>
                                 </tr>
                                 <tr>
                                    <td><span>ул. Вокзальная, д. 17</span></td>
                                    <td>+7 (87937) 2-20-45</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="stock-slice">
                        <h4>Лермонтов</h4>
                        <div class="shops-info">
                           <table>
                              <tbody>
                                 <tr>
                                    <td><span>пр-т. Лермонтовский, д. 7, корп. 1</span></td>
                                    <td>+7 (905) 465-05-35</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="stock-slice">
                        <h4>Минеральные Воды</h4>
                        <div class="shops-info">
                           <table>
                              <tbody>
                                 <tr>
                                    <td><span>пр-т. 22 Партсъезда, д. 72</span></td>
                                    <td>+7 (87922) 6-36-64</td>
                                 </tr>
                                 <tr>
                                    <td><span>пр-т. 22 Партсъезда, д. 8</span></td>
                                    <td>+7 (87922) 6-56-67</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="stock-slice">
                        <h4>Михайловск</h4>
                        <div class="shops-info">
                           <table>
                              <tbody>
                                 <tr>
                                    <td><span>ул. Гоголя, д. 38/1</span></td>
                                    <td>+7 (862) 408-03-22</td>
                                 </tr>
                                 <tr>
                                    <td><span>ул. Ленина, д. 102</span></td>
                                    <td>+7 (988) 116-88-41</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="stock-slice">
                        <h4>Невинномысск</h4>
                        <div class="shops-info">
                           <table>
                              <tbody>
                                 <tr>
                                    <td><span>ул. Калинина, д. 161А</span></td>
                                    <td>+7 (906) 491-90-79</td>
                                 </tr>
                                 <tr>
                                    <td><span>ул. Гагарина, д. 55</span></td>
                                    <td>+7 (86554) 3-35-06</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="stock-slice">
                        <h4>c. Прасковея</h4>
                        <div class="shops-info">
                           <table>
                              <tbody>
                                 <tr>
                                    <td><span>ул. Ленина, д. 11</span></td>
                                    <td>+7 (86559) 7-70-97</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="stock-slice">
                        <h4>Пятигорск</h4>
                        <div class="shops-info">
                           <table>
                              <tbody>
                                 <tr>
                                    <td><span>ул. Московская, д. 94, кор. 1</span></td>
                                    <td>+7 (8793) 32-32-49</td>
                                 </tr>
                                 <tr>
                                    <td><span>пр-т. Ленина, д. 13</span></td>
                                    <td>+7 (8793) 36-35-45</td>
                                 </tr>
                                 <tr>
                                    <td><span>пр-т. Калинина, д. 92</span></td>
                                    <td>+7 (8793) 30-36-20</td>
                                 </tr>
                                 <tr>
                                    <td><span>ул. Красноармейская, д. 6</span></td>
                                    <td>+7 (8793) 39-18-33</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="stock-slice">
                        <h4>Ставрополь</h4>
                        <div class="shops-info">
                           <table>
                              <tbody>
                                 <tr>
                                    <td><span>ул. Ленина, д. 192</span></td>
                                    <td>+7 (8652) 29-21-82</td>
                                 </tr>
                                 <tr>
                                    <td><span>ул. Пирогова, д. 15</span></td>
                                    <td>+7 (8652) 55-25-50</td>
                                 </tr>
                                 <tr>
                                    <td><span>пр-т. Юности, д. 26а</span></td>
                                    <td>+7 (8652) 39-74-93</td>
                                 </tr>
                                 <tr>
                                    <td><span>ул. 50 лет ВЛКСМ, д. 2/7</span></td>
                                    <td>+7 (8652) 94-47-85</td>
                                 </tr>
                                 <tr>
                                    <td><span>ул. Советская, д. 16/1</span></td>
                                    <td>+7 (8652) 94-01-64</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div id="r77" class="group_shop_region">
                     <div class="stock-slice">
                        <h4>Москва</h4>
                        <div class="shops-info">
                           <table>
                              <tr>
                                 <td><span>ул. Малая Грузинская, д. 12</span></td>
                                 <td>+7 (499) 252-07-53</td>
                              </tr>
                              <tr>
                                 <td><span>ул. Митинская, д. 25</span></td>
                                 <td>+7 (499) 252-07-53</td>
                              </tr>
                              <tr>
                                 <td><span>пр-т. Новоясеневский, д. 32, к. 1</span></td>
                                 <td>+7 (499) 252-07-53</td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div id="r50" class="group_shop_region">
                     <div class="stock-slice">
                        <h4>c. Ильинское</h4>
                        <div class="shops-info">
                           <table>
                              <tr>
                                 <p>Винный бутик «Darwin»</p>
                                 <td><span><a href="https://www.google.ru/maps/place/%D1%83%D0%BB.+%D0%9B%D0%B5%D0%BD%D0%B8%D0%BD%D0%B0,+11,+%D0%98%D0%BB%D1%8C%D0%B8%D0%BD%D1%81%D0%BA%D0%BE%D0%B5,+%D0%9C%D0%BE%D1%81%D0%BA%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB.,+143421/@55.7488596,37.3000007,11z/data=!4m2!3m1!1s0x46b545034852a71d:0x6aa304ded1c2e506">с. Ильинское, ул. Ленина, д. 11 (ТЦ «Ильинский»)</a></span></td>
                                 <td>+7 (926) 102-03-30</td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div id="r52" class="group_shop_region">
                     <div class="stock-slice">
                        <h4>Нижний Новгород</h4>
                        <div class="shops-info">
                           <div class="slice grey">
                              <div class="column two link-list">
                                 <ul>
                                    <li><a href="http://www.vinonn.ru">www.vinonn.ru</a></li>
                                 </ul>
                              </div>
                              <div class="column two link-list">
                                 <ul>
                                    <li><a href="mailto:gemini.80@mail.ru">gemini.80@mail.ru</a></li>
                                 </ul>
                              </div>
                           </div>
                           <table>
                              <tr>
                                 <td><span>ул. Гагарина, д. 7</span></td>
                                 <td>+7 (831) 430-97-68</td>
                              </tr>
                              <tr>
                                 <td><span>пр-т. Октября, д. 16</span></td>
                                 <td>+7 (831) 218-04-76</td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div id="r61" class="group_shop_region">
                     <div class="stock-slice">
                        <h4>Ростов-на-Дону</h4>
                        <div class="shops-info">
                           <table>
                              <tr>
                                 <td><span>ул. Тренева, д. 3а</span></td>
                                 <td>+7 (903) 406-73-88</td>
                              </tr>
                              <tr>
                                 <td><span>пр-т. 40-лет Победы, д. 158/9</span></td>
                                 <td>+7 (903) 406-73-99</td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <?php include($_SERVER["DOCUMENT_ROOT"].'/data/aside.php'); ?>
               </div>
            </div>
         </div>
      </section>
      <?php include("../../includes/footer.php") ?>
      <?php include("../../includes/footer_scripts.php") ?>
      <script type="text/javascript"> <!-- select jQuery hide show -->
         $(document).ready(function(){
         	$("select").prop("selectedIndex", 4);
         	var selected_id = $("#input-select option:selected").val();
         	$('.group_shop_region').hide();
         	$('#' + selected_id ).fadeIn('slow');
         	$("select").change(function() {
         		var selected_id = $("#input-select option:selected").val();
         		var selected_text = $("#input-select option:selected").html();
         		//$("#about h3").html(selected_text);
         		$('.group_shop_region').hide();
         		$('#' + selected_id ).fadeIn('slow');			
         	});
         });
      </script>
      <script> <!-- formstyler -->
         (function($) {
         	$(function() {
         		$('select').styler();
         	});
         })(jQuery);
      </script>
   </body>
</html>

