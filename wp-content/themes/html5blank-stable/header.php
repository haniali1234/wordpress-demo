<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<<!-- div class="logo">
						<a href="<?php echo home_url(); ?>">
							svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div> -->
					<!-- /logo -->

					<!-- nav -->
				<!-- 	<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?> -->

					<!-- BootStrap -->
					<div class="container-fluid">
		<header class="row">
			<div class="col-xs-7 col-sm-5 col-sm-offset-1 center">
				<!-- <img class="pull-left logo" src=""> -->
				<h1 class="pull-left">Wordpress</h1>
			</div>
			<nav class="col-xs-12 col-sm-6">
				<li class="col-xs-4"><a href="">Home</a></li>
				<li class="col-xs-4"><a href="">Products</a></li>
				<li class="col-xs-4"><a href="">contact Us</a></li>
			</nav>
		</header>
		
	</div>



					<!-- End of bootStrap -->
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
