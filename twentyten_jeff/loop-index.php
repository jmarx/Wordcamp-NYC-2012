
<!-- Loop # 1 start - the featured story -->
<?php
// Your parameters
$args = array(
	'tag' => 'featured',
	'post_status' => 'publish',
	'posts_per_page' => '1',
);

// The class instantiation
$featured = new WP_Query($args);

//start the loop
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
	<div id="superman"></div>
	<div id="batman"></div>
	<div id="spiderman"></div>
	<div id="ironman"></div>
</div>