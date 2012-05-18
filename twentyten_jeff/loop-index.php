
<!-- Loop # 1 start - the featured story -->
<?php
$featured_args = array(
		'tag' => 'featured',
		'post_status' => 'publish',
		'posts_per_page' => '1',
	);
	// The class instantiation
$featured = new WP_Query($featured_args);

while ( $featured->have_posts() ) : $featured->the_post();
// put your html under here
?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div><?php the_post_thumbnail('medium', array('class' => 'alignright')); ?></div>

<div class="excerpt"><?php the_excerpt(); ?></div>

<?php
endwhile;
//end the loop
?>
<div style="clear:both">&nbsp;</div>

<!-- Loop # 2 start - 3 secondary featured stories -->

<?php
// Your parameters
$args = array(
	'tag' => 'featured-secondary',
	'post_status' => 'publish',
	'posts_per_page' => '2',
);

// The class instantiation
$secondaryfeatured = new WP_Query($args);

//post counter
$i = 0;

//start the loop
while ( $secondaryfeatured->have_posts() ) : $secondaryfeatured ->the_post();
	//add a counter each time so we can keep track of the posts
	$i++;
	//if the post counter is equal to zero, which is the first one, align it to the left, otherwise align it to the right
	if ($i%2) {
			$align = "alignleft";
		} else {
			$align = "alignright";
			}
	// put your html under here
	 ?>
	<div>
		<?php the_post_thumbnail('thumbnail', array('class' => $align)); ?>
		<h3 style="display:inline;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="excerpt"><?php the_excerpt(); ?></div>
	</div>
	<div style="clear:both; height:3px;">&nbsp;</div>
 <?php
endwhile;
//end the loop

?>

<div id="categoryboxes">
	<div id="batman">
		<h4>Batman</h4>
		<?php
	// Your parameters
	$batman_args = array(
		'category_name' => 'batman',
		'post_status' => 'publish',
		'posts_per_page' => '3',
		'tag__not_in' => array( 6,7),
	);
	// The class instantiation
	$batman_query = new WP_Query($batman_args);
	//start the loop
	while ( $batman_query->have_posts() ) : $batman_query->the_post();
	// put your html under here
?>
	&bull; <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br>

<?php
	endwhile;
	//end the loop
?>
	&bull; <strong><a href="/category/batman">More Batman</a></strong><br>
	</div>
	<div id="superman">
		<h4>Superman</h4>
				<?php
	// Your parameters
	$superman_args = array(
		'category_name' => 'superman',
		'post_status' => 'publish',
		'posts_per_page' => '3',
		'tag__not_in' => array( 6,7),
	);
	// The class instantiation
	$superman_query = new WP_Query($superman_args);
	//start the loop
	while ( $superman_query->have_posts() ) : $superman_query->the_post();
	// put your html under here
?>
	&bull; <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br>

<?php
	endwhile;
	//end the loop
?>
	&bull; <strong><a href="/category/superman">More Superman</a></strong><br>

	</div>
	<div id="spiderman">
		<h4>Spiderman</h4>
						<?php
	// Your parameters
	$spiderman_args = array(
		'category_name' => 'spiderman',
		'post_status' => 'publish',
		'posts_per_page' => '3',
		'tag__not_in' => array( 6,7),
	);
	// The class instantiation
	$spiderman_query = new WP_Query($spiderman_args);
	//start the loop
	while ( $spiderman_query->have_posts() ) : $spiderman_query->the_post();
	// put your html under here
?>
	&bull; <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br>

<?php
	endwhile;
	//end the loop
?>
	&bull; <strong><a href="/category/spiderman">More Spiderman</a></strong><br>

	</div>
	<div id="ironman"></div>
</div>
