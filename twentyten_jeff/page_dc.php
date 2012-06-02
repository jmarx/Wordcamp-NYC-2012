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
	/*
	-  Using page templates to archive stories by the custom field of 'publisher'
	- Return 30 stories with the meta key of publisher and meta value of 'dc' or 'marvel''
	- Using standard template tags on the page template
	- Meta query used to return stories by custom field. Use nested array for this. A common 'gotcha' is to only use 1 array.
	*/


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
