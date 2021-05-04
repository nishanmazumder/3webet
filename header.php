<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 3WEBET
 */
global $nm3webet;
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />

	<title>Trusted Online Casino Singapore 2021 | Best Online Betting Singapore | 3WEBET</title>
	<meta name="description" content="You can earn up to 50% welcome bonus when you open an online betting account with 3WEBET. Know the betting trends and statistics in Singapore and earn real money." />
	<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<link rel="canonical" href="https://casino.3webetsg.com" />
	<meta name="keywords" content="Best Online Betting Singapore" />

	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Trusted Online Casino Singapore 2021 | Best Online Betting Singapore | 3WEBET" />
	<meta property="og:description" content="You can earn up to 50% welcome bonus when you open an online betting account with 3WEBET. Know the betting trends and statistics in Singapore and earn real money." />
	<meta property="og:url" content="https://casino.3webetsg.com" />
	<meta property="og:site_name" content="3WEBET - ONLINE GAMBLING SITE IN SINGAPORE" />
	<meta property="og:image" content="/3welogo.gif" />

	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/src/assets/img/favicon.ico">
	<!-- <script src="./assets/scripts/jquery-3.3.1.min.js"></script> -->

	<!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans&amp;v=aeb55e063afddcd0c5ce24e1686f60f6" rel="stylesheet"> -->
	<link rel="stylesheet" href="./assets/styles/aos.css">


	<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" /> -->
	<!--    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-QDJWHY4LEH"></script> -->
	<!-- <script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'G-QDJWHY4LEH');
		</script>
		<style type="text/css">
			.dropmenu-simple {
				left: unset !important;
				width: fit-content !important;
				text-align: left;
				opacity: 0.95 !important;
				color: white;
				margin-left: -20px;
			}
		</style> -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
	<?php wp_body_open();

	?>

	<div id="content-body">

		<div class="t-header">
			<section class="header-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-4">
							<div class="logo">
								<?php
								//the_custom_logo();
								if ($nm3webet['nm3betLogoUpload']) : ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $nm3webet['nm3betLogoUpload']['url']; ?>"></a>
									<?php else :


									if (is_front_page() && is_home()) :
									?>
										<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
									<?php
									else :
									?>
										<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
									<?php
									endif;
									$nmbet_description = get_bloginfo('description', 'display');
									if ($nmbet_description || is_customize_preview()) :
									?>
										<p class="site-description">
											<?php echo $nmbet_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
											?>
										</p>
									<?php endif; ?>
								<?php endif; ?>

							</div>
						</div>

						<div class="col-8 headright">
							<div class="header-right nonlogin">
								<button type="submit" class="btn_login"><a href="<?php echo $nm3webet['nmLoginUrl']; ?>">LOGIN</a></button>
								<button type="button" class="btn_register"> <a href="<?php echo $nm3webet['nmRegUrl']; ?>">REGISTER</a></button>

							</div>
						</div>
					</div>
				</div>

			</section>
			<section class="header-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 position-inherit">
							<div class="main-menu">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'main-menu',
										'menu'        => 'main-menu',
									)
								);

								// wp_nav_menu( array(
								// 	'menu'              => 'main-menu',
								// 	'theme_location'    => 'main-menu',
								// 	//'depth'             => 0,
								// 	'container'         => 'ul',
								// 	'container_class'   => 'NMMMM',
								// 	//'container_id'      => 'cd-nav',
								// 	'menu_class'        => 'nav main-nav',
								// 	'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								// 	'walker'            => new WP_Bootstrap_Navwalker()
								// 	)
								// );
								?>
								<!-- <ul class="nav main-nav">
									<li class="nav-item menuimg">
										<a href="index.html" class="navlink"><img src="./assets/images/header/home.jpg"></a>
									</li>
									<li class="nav-item">
										<a href="sports-book.html" class="navlink">Sports</a>
										<div class="dropmenu dropmenu-simple py-3 px-3">
											<ul>
												<a href="cmd368.html">
													<li class="py-2">CMD368</li>
												</a>
											</ul>
										</div>
									</li>

									<li class="nav-item"><a href="blog.html" class="navlink">Blog</a>
								</ul> -->
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>