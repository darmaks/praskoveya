<div class="header-bg">
   <div class="container">
      <div class="row justify-content-between">
         <div class="d-none d-sm-block col-sm-4 col-md-3 col-lg-3">
            <a href="" class="logo">
            <img class="img-fluid" src="../../../img/logo.png" alt="">
            </a>
         </div>
         <div class="col-12 col-sm-8 col-md-9 col-lg-8 main-menu">
            <nav class="navbar navbar-expand-md justify-content-end">
               <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown">
               <span class="navbar-toggler-icon">Меню</span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="/">Главная</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "history") {?>active<?php }?>" href="/history/index.php">История</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="#">О компании</a>
                        <ul class="dropdown-menu dropdown-menu-left">
                           <li><a class="dropdown-item" href="/about/winerys/index.php">Производства</a></li>
                           <li><a class="dropdown-item" href="/about/shops/index.php">Розничная сеть</a></li>
                           <li><a class="dropdown-item" href="/about/museum/index.php">Музей виноделия</a></li>
                           <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Акционерам</a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="/about/stockholders/produce/index.php">АО «Прасковейское»</a></li>
                                 <li><a class="dropdown-item" href="/about/stockholders/trade/index.php">АО «ТП Прасковейское»</a></li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="#">Продукция</a>
                        <ul class="dropdown-menu dropdown-menu-left">
                           <li  class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Вина</a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="/products/wine/blanc/index.php">Белые</a></li>
                                 <li><a class="dropdown-item" href="/products/wine/rose/index.php">Розовые</a></li>
                                 <li><a class="dropdown-item" href="/products/wine/rouge/index.php">Красные</a></li>
                                 <li><a class="dropdown-item" href="/products/wine/sparkling/index.php">Игристые</a></li>
                                 <li><a class="dropdown-item" href="/products/wine/collection/index.php">Коллекционные</a></li>
                              </ul>
                           </li>
                           <li class="dropdown-submenu">
                              <a class="dropdown-item" href="#">Коньяки</a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="/products/cognac/ordin/index.php">Ординарные</a></li>
                                 <li><a class="dropdown-item" href="/products/cognac/mrn/index.php">Марочные</a></li>
                              </ul>
                           </li>
                           <li><a class="dropdown-item" href="/products/strong.php">Крепкие напитки</a></li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="#">Контакты</a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="/contacts/index.php">Адрес</a>
                           <a class="dropdown-item" href="/feedback/index.php">Обратная связь</a>
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
   </div>
</div>

