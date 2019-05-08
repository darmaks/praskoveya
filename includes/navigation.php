<div class="header-bg">
	<div class="container">
		<div class="row justify-content-between">
			<div class="d-none d-sm-block col-sm-4 col-md-3 col-lg-3">
				<a href="" class="logo">
					<img class="img-fluid" src="img/logo.png" alt="">
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
								<a class="nav-link <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>" href="about.php">История</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="#">О компании</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Производства</a>
									<a class="dropdown-item" href="#">Розничная сеть</a>
									<a class="dropdown-item" href="#">Музей виноделия</a>
									<a class="dropdown-item" href="#">Акционерам</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="#">Продукция</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Вина</a>
									<a class="dropdown-item" href="#">Коньяки</a>
									<a class="dropdown-item" href="#">Крепкие напитки</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="#">Контакты</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Алрес</a>
									<a class="dropdown-item" href="#">Обратная связь</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>				
			</div>
		</div>
	</div>
</div>
