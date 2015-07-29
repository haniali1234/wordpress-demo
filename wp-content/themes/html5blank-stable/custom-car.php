
<?php /* Template Name: Cars Template */   ?>


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
	<?php wp_head(); ?>
</head>
<body>
</style>
	<?php if (have_posts()): while(have_posts()): the_post(); ?>
	<h1><?php the_title() ?></h1>

	<?=the_content()?> 

	<?php endwhile; endif; ?>
 
 	<!-- Cars go here -->

 	<?php
 		$args = array(
 			'post_type' => 'car',
 			'order' => 'ASC',
 			'orderby' => 'date'
 			);
 		$cars = new WP_Query($args);

 		

 		if ($cars->have_posts()): while ($cars->have_posts()): $cars->the_post() 
 		  		
 	?>
	<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<?php the_post_thumbnail(); ?>

		<?php endif; ?>
		<h1><?php the_title() ?></h1>
		<p><?php the_content() ?></p>
		
		<?php
		endwhile; endif;
		?>

	<?php wp_footer(); ?>
</body>
</html>