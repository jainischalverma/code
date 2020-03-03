<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
	</head>
	<body <?php body_class(); ?>>
		<header>
		<span class="dashicons dashicons-menu-alt3 mobilemenu" style="color:#fff;"></span>
		<img src="<?php echo(get_template_directory_uri()) ?>/img/akashlogo.jpg" alt="logo" class="smallogo">
		
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Go to the home page" rel="home"><img src="<?php echo(get_template_directory_uri()) ?>/img/akash-logo.svg" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" width="158" height="35"></a></h1>
			<nav>
				<h2>Main Navigation</h2>
				<?php wp_nav_menu(array(
					'theme_location' => 'main-menu',
					'menu_class' => null,
					'menu_id' => null,
					'container' => '',
					'depth' => 1
				)); ?>
			</nav>
			
			<ul class="utility">
			     <li><a href="#">Login</a></li>
				 <li><a href="#" class="getstarted">Get Started</a></li>
			</ul>
		</header>
