<?php
/*
Template Name: DC
*/

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
<h2>DC</h2>
			<?php
// The class instantiation with arguments
$dc_query = new WP_Query(
array(
'post_status' => 'publish',
'posts_per_page' => '30',
'meta_query' => array(
		array(
			'key' => 'publisher',
			'value' => 'dc',
		)
	),
		)
			);
	//start the loop
	while ( $dc_query->have_posts() ) : $dc_query->the_post();
	// put your html under here
?>
	&bull; <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br>
<?php
	endwhile;
	//end the loop
?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
