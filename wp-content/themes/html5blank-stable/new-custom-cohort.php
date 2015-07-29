<?php /* Template Name: new-custom-cohort Template */   ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>stuff and things</title>
	<link rel="stylesheet"
			href="<?=get_template_directory_uri()?>/bower_components/bootstrap/dist/css/bootstrap.css">
	<style>
		body{
		 background-color: yellow;
		}
	</style>
	<?php get_header(); ?>
</head>
<body>
</style>
	<?php if (have_posts()): while(have_posts()): the_post(); ?>
	<h1><?php the_title() ?></h1>

	<?=the_content()?> 

	<?php endwhile; endif; ?>



	<?php wp_footer(); ?>
</body>
</html>