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
	//start the loop
	while ( $marvel_query->have_posts() ) : $marvel_query->the_post();
	// put your html under here
?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

			<div class="entry-meta">
				<?php twentyten_posted_on(); ?>
			</div><!-- .entry-meta -->

			<div class="entry-content">
						<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
			</div>
<?php
	endwhile;
	//end the loop
	wp_reset_postdata();
?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
