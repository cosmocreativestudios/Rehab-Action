<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/libs/slick/slick.css"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<a href="/" class="logo"><img src="<?php bloginfo('template_url') ?>/img/logo.png" alt=""></a>
				<nav>
					<div class="close-btn"></div>
					<?php
						wp_nav_menu( [
							'theme_location'  => 'primary',
						] );
					?>
				</nav>
				<div class="mob-btn"></div>
				<a href="/contact" class="btn">Contact</a>
			</div>
		</div>
	</div>
</header>	
