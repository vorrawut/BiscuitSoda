<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="utf-8">
	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- BootStrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	  <!-- Bootstrap core CSS -->
    <link href="\wordpress\wordpress\wp-content\themes\learning\css\bootstrap.min.css" rel="stylesheet">

    <!-- CSS Style Sheet -->
    <link rel="stylesheet" href="\wordpress\wordpress\wp-content\themes\learning\style.css">




	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>

<body class="<?php body_class(); ?>col-lg-12 col-md-12 col-sm-8 col-xs-6" >

	<div class="container">

		<!--site-header-->
		<header class="site-header ">

			<!--hd-search-->
			<div class="hd-search">
				<?php get_search_form(); ?>
			</div>	<!--./hd-search-->

			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?>


				<?php  if (is_page('about-us')) { ?>
				Thank you for viewing our work
				<?php  }?>
			</h5>



			<nav class="site-nav">

				<?php
				$args = array(
					'theme_location'=>'primary'
					);
					?>

					<?php wp_nav_menu( $args); ?>

				</nav>


			</header><!--/site-header-->
