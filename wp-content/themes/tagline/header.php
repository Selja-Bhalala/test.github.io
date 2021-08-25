<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tagline
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="content-language" content="en-us">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?php echo get_field('favicon_icon','option')['url']; ?>" type="image/png" sizes="16x16">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fontawesome.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<meta name="google-site-verification" content="R2iJMG4hKOZ0b_vKyQQ37aMmYdQgRukbaZtSv3YQj_k" />
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177199290-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-177199290-1');
	</script>

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a href="#" class="getquote-btn" data-toggle="modal" data-target="#getquote-popup">getquote</a>
	<header>
		<?php 
			$logo = get_field('logo','option')['url'];
			$title = get_field('title','option');

			if(empty($logo))
			{
				$logo = get_template_directory_uri()."/images/logo.gif";
				$title = '';
			}
		?>
		 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
			<img src="<?php echo $logo; ?>" alt="<?php echo $title ?>">
		</a>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class' => 'menu-list',
					'container' => '',
				)
			);
			?>
		<div class="outer-menu">
		  <div class="hamburger">
		    <img src="<?php echo get_template_directory_uri(); ?>/images/menu-icon.png" alt="Menu Bar" class="menu-icon">
			<img src="<?php echo get_template_directory_uri(); ?>/images/close-icon.png" alt="Close" class="close-icon">
		  </div>
		  <div class="menu-list">
		    
		      	<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'menu_id'        => '',
							'menu_class' => '',
							'container' => '',
						)
					);
					?>
		    
		  </div>
		</div>
	</header>