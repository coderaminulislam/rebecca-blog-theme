<!DOCTYPE html>
<html lang="<?php language_attributes(  ); ?>">

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">


        <?php wp_head(  ); ?>
	</head>
<body <?php body_class(); ?>>

	<!-- Wrapper Site -->
	<div id="wrapper">
		<header id="header" class="header">
			<div class="container">
				<div id="header-inner">
					<!-- Logo -->
					<div class="logo">
						<a href="<?php echo esc_url(home_url( '/')); ?>">
							<img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" alt="Logo">
						</a>
					</div>
					<!-- End Logo -->

					<!-- Mobile -->
					<div class="mobile-right">
						<div class="menu-mobile">
							<span class="item item-1"></span>
							<span class="item item-2"></span>
							<span class="item item-3"></span>
						</div>
					</div>
					<!-- End Mobile -->

					<!-- Main Menu -->
					<div class="main-menu">
						<!-- Close -->
						<div class="close-menu">
							<i class="fa fa-times"></i>
						</div>
						<!-- End Close -->

						<!-- Logo -->
						<div class="logo">
							<a href="<?php echo esc_url(home_url( '/' )); ?>">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" alt="Logo">
							</a>
						</div>
						<!-- End Logo -->
                        <?php wp_nav_menu(array( 'container' => false, 'menu_class'=> 'menu-list clearfix', 'theme_location'  => 'primary_menu', ) ); ?>
				

						<!-- Socials -->
						<div class="socials">
							<a href="#" title="Behance">
                            <i class="fab fa-behance"></i>
							</a>
							<a href="#" title="Dribbble">
                            <i class="fab fa-dribbble"></i>
							</a>
							<a href="#" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
							</a>
							<a href="#" title="Flickr">
                            <i class="fab fa-flickr"></i>
							</a>
					
							<a href="#" title="Instagram">
                            <i class="fab fa-instagram"></i>
							</a>
							<a href="#" class="search" title="Search">
							  <i class="fas fa-search"></i>
						    </a>
						</div>
                       
						<!-- End Socials -->
						<!-- Box Search -->
						<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
						<input type="text" value="<?php echo get_search_query() ?>" placeholder="<?php echo esc_attr_x( 'Search …', 'rebecca' ) ?>" name="s" />
						</form>
						<!-- End Box Search -->
					</div>
					<!-- End Main Menu -->
					<div class="mobile-cover"></div>

					<!-- Socials -->
					<div class="socials">
                            <a href="#" title="Behance">
                            <i class="fab fa-behance"></i>
							</a>
							<a href="#" title="Dribbble">
                            <i class="fab fa-dribbble"></i>
							</a>
							<a href="#" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
							</a>
							<a href="#" title="Flickr">
                            <i class="fab fa-flickr"></i>
							</a>
					
							<a href="#" title="Instagram">
                            <i class="fab fa-instagram"></i>
							</a>
							<a href="#" class="search" title="Search">
							<i class="fas fa-search"></i>
						    </a>
					</div>
					<!-- End Socials -->
					<!-- Box Search -->
					<div id="box-search">
						<div class="search-wrap">
							<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
								<input type="text" value="<?php echo get_search_query() ?>" placeholder="<?php echo esc_attr_x( 'Search …', 'rebecca' ) ?>" name="s" />
							</form>
						</div>
					</div>
					<!-- End Box Search -->
				</div>
			</div>
		</header>
		<div class="header-offset"></div>