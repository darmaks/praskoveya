<div class="header-bg">
   <div class="container">
      <div class="row justify-content-between">
         <div class="d-none d-sm-block col-sm-4 col-md-3 col-lg-3">
            <a href="/" class="logo">
            <img class="img-fluid" src="../../../img/logo.png" alt="">
            </a>
         </div>
         <div class="col-12 col-sm-8 col-md-9 col-lg-8 main-menu">
            <nav class="navbar navbar-expand-md justify-content-end" id="main_navbar">
               <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown">
                  <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i>Меню</span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="/">Главная</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "history") {?>active<?php }?>" href="/history/">История</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="#" id="navbarAbout" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">О компании<i class="fas fa-angle-down"></i></i></a>
                        
                        <ul class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarAbout">
                           <li><a class="dropdown-item" href="/about/winerys/">Производства</a></li>
                           <li><a class="dropdown-item" href="/about/shops/">Розничная сеть</a></li>
                           <li><a class="dropdown-item" href="/about/museum/">Музей виноделия</a></li>
                           <li class="dropdown-submenu dropdown">
                              <a class="dropdown-item dropdown-toggle" href="#" id="navbarAboutAk" role="button" data-toggle="dropdown">Акционерам<i class="fas fa-angle-down"></i></a>
                              <ul class="dropdown-menu" aria-labelledby="navbarAboutAk">
                                 <li><a class="dropdown-item" href="/about/stockholders/produce/">АО «Прасковейское»</a></li>
                                 <li><a class="dropdown-item" href="/about/stockholders/trade/">АО «ТП Прасковейское»</a></li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="#" id="navbarProducts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Продукция<i class="fas fa-angle-down"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarProducts">
                           <li  class="dropdown-submenu dropdown">
                              <a class="dropdown-item dropdown-toggle" href="#" id="navbarProductsWiners" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Вина<i class="fas fa-angle-down"></i></a>
                              <ul class="dropdown-menu" aria-labelledby="navbarProductsWiners">
                                 <li><a class="dropdown-item" href="/products/wine/blanc/">Белые</a></li>
                                 <li><a class="dropdown-item" href="/products/wine/rose/">Розовые</a></li>
                                 <li><a class="dropdown-item" href="/products/wine/rouge/">Красные</a></li>
                                 <li><a class="dropdown-item" href="/products/wine/sparkling/">Игристые</a></li>
                                 <li><a class="dropdown-item" href="/products/wine/collection/">Коллекционные</a></li>
                              </ul>
                           </li>
                           <li class="dropdown-submenu dropdown">
                              <a class="dropdown-item dropdown-toggle" href="#" id="navbarProductsKognacs" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Коньяки<i class="fas fa-angle-down"></i></a>
                              <ul class="dropdown-menu" aria-labelledby="navbarProductsKognacs">
                                 <li><a class="dropdown-item" href="/products/cognac/ordin/">Ординарные</a></li>
                                 <li><a class="dropdown-item" href="/products/cognac/mrn/">Марочные</a></li>
                              </ul>
                           </li>
                           <li><a class="dropdown-item" href="/products/strong/">Крепкие напитки</a></li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="#" id="navbarContacts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Контакты<i class="fas fa-angle-down"></i> </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarContacts">
                           <a class="dropdown-item" href="/contacts/">Адрес</a>
                           <a class="dropdown-item" href="/feedback/">Обратная связь</a>
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
   </div>
</div>

