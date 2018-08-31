<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" />

	<title><?php the_title(); ?></title>

	<?php wp_head(); ?>

</head>
<body>
	<div class="top-menu-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 logo">
					<a href="#">
						<img src="<?php echo M_IMG_ROOT; ?>/logo.png" width="160" alt="Максимовский Сергей front-end developer" />
					</a>
				</div>
				<div class="col-sm-6 col-9 send-back-block">
					<div class="send-back-wrap">
						<button class="popup-with-form">
							Связаться со мной
							<i class="f"></i>
							<i class="s"></i>
						</button>
						<a class="telephone" href="tel:0639992856">+38 (063) 999-28-56</a>
					</div>
				</div>
				<div class="col-sm-3 col-3 right-menu-bloc">
					<div class="menu-block-wrap">
						<button class="toggle-menu">
							<span></span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="small-top-menu">
		<div class="container">
			<div class="row">
				<div class="col-sm-2 logo">
					<a href="#">
						<img src="<?php echo M_IMG_ROOT; ?>/logo.png" alt="Максимовский Сергей front-end developer" />
					</a>
				</div>
				<div class="col-sm-1">
					<a href="#first-section" class="to-top">
						<div class="line"></div>
						<div class="line"></div>
						<div class="line"></div>
					</a>
				</div>
				<div class="col-sm-8">
					<div class="send-back-block">
						<div class="send-back-wrap">
							<a class="header-phone" href="tel:0639992856">
								<i class="fas fa-mobile-alt"></i>
								+38 (063) 999-28-56
							</a>
							<a class="header-skype" href="skype:sergey.maksimovskiy">
								<i class="fab fa-skype"></i>
								sergey.maksimovskiy
							</a>
							<a class="header-email" href="mailto:dp090291msa@gmail.com">
								<i class="far fa-envelope"></i>
								dp090291msa@gmail.com
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-1 right-menu-bloc">
					<div class="menu-block-wrap">
						<button class="toggle-menu">
							<span></span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

		<?php wp_nav_menu(array(
			'theme_location' => 'menu',
			'menu'            => '', 
			'container'       => 'nav', 
			'container_class' => 'top-menu', 
			'container_id'    => '',
			'menu_class'      => 'menu', 
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '<i class="fas fa-chevron-circle-down"></i>',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => '',
		)); ?>
	

	<div class="window-popup">
		<form id="call-back-form" class="call-back mfp-hide">
			<span class="close-icon fas fa-times"></span>
			<span class="send-to-me">
				Свяжитесь со мной
			</span>
			<input type="hidden" name="project_name" value="Portfolio" />
			<input type="hidden" name="admin_email" value="dp090291msa@gmail.com" />
			<input type="hidden" name="form_subject" value="Форма в Обратной связи" />
			<label>
				<span>*</span>Ваше имя:
				<input type="text" name="name" placeholder="Имя..." required="" />
			</label>
			<label>
				<span>*</span>Ваш E-mail:
				<input type="text" name="email" placeholder="E-mail..." required="" />
			</label>
			<label>
				Ваш телефон:
				<input id="call-back-telephone" type="text" name="phone" placeholder="+38 (___) ___-__-__" />
			</label>
			<label>
				<span>*</span>Ваше сообщение:
				<textarea name="text" placeholder="Сообщение..." required=""></textarea>
			</label>
			<button>Отправить</button>
		</form>
	</div>
