
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/themes/lunch_learning/public/css/bootstrap.min.css">
	
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<script src="<?php echo get_site_url(); ?>/wp-content/themes/lunch_learning/public/js/lib/bootstrap.min.js" type="text/javascript"></script>

	<div class="container-fluid">
		<header>
			<nav class="navbar navbar-default">
				<div class="navbar-header" style="position: relative;">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lunch_learning" style="top: 20px;">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					
					<a href="http://localhost:8888/lunch_learning/" class="navbar-brand"><img src="<?php echo get_site_url(); ?>/wp-content/themes/lunch_learning/public/images/logo_252x59.png" style="height: 100%;"></a>
				</div>

				<div class="collapse navbar-collapse" id="lunch_learning">
					
					<?php 
					$args = array(
						'theme_location'  => 'primary',
						'menu'            => '',
						'container'       => 'div',
						'container_class' => 'menu-{menu slug}-container',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul class="nav navbar-nav navbar-right" style="margin:0px;">%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
						);
						
					wp_nav_menu( $args ); ?>
			
				</div>
			</nav> <!-- /navigation bar -->
		</header><!-- /header -->

			<carousel>
				<div id="header">
					
					<div class="headerContent">
				
						<div id="headerLabel">
							<div class="overlay_header">
								<h1 id='pageTitle'>TRY OUR SO DELICIOUS & HEALTHY</br>LUNCH FOR LEARNERS</h1></br>
								<h4 id='pageDescription'>Sed vel lorem aliquet, varius lectus vitae, efficitur massa. </br>Sed vel libero imperdiet, gravida lacus in, feugiat nunc.</h4>
								<br>
							</div>
								
						<button type="button" class="btnOrder">ORDER NOW</button>
						</div>

					</div>
				</div>
			</carousel> <!-- /carousel -->


		