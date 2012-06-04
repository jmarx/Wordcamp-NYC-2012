<?php
/*
Template Name: Marvel
*/

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
<h2>Marvel</h2>
			<?php
// The class instantiation with arguments
$marvel_query = new WP_Query(
array(
'post_status' => 'publish',
'posts_per_page' => '30',
'meta_query' => array(
		array(
			'key' => 'publisher',
			'value' => 'marvel',
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
	while ( $marvel_query->have_posts() ) : $marvel_query->the_post();
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
