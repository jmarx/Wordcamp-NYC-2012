
<div class='featured thoughtbox'><!-- Loop # 1 start - the featured story -->
<?php
	// The class instantiation
$featured = new WP_Query(
		array(
		'tag' => 'featured',
		'post_status' => 'publish',
		'posts_per_page' => '1',
		)
			 );
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
</div>

<!-- Loop # 2 start - 2 secondary featured stories -->

<?php
// The class instantiation
$secondaryfeatured = new WP_Query(
	array(
	'tag' => 'featured-secondary',
	'post_status' => 'publish',
	'posts_per_page' => '2',
	)
		 );

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
	<div class="story thoughtbox">
	<div>
		<?php the_post_thumbnail('thumbnail', array('class' => $align)); ?>
		<h3 style="display:inline;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="excerpt"><?php the_excerpt(); ?></div>
	</div>
	<div style="clear:both; height:3px;">&nbsp;</div>
	</div>
 <?php
endwhile;
//end the loop

?>

<div id="picoftheday">
<h4>Picture of the day</h4>
<?php
	// The class instantiation with arguments
	$pic_query = new WP_Query(
		array(
		'tag' => 'picoftheday',
		'post_status' => 'publish',
		'posts_per_page' => '1',
			)
		);
	//start the loop
	while ( $pic_query ->have_posts() ) : $pic_query ->the_post();

	// put your html under here
?>

<?php the_post_thumbnail('full'); ?>
<div class="cutline"><?php the_content(); ?></div>

<?php
	endwhile;
	//end the loop
?>
</div>

<div id="categoryboxes">
	<div id="batman" class="thoughtbox">
		<h4>Batman</h4>
		<?php
	// The class instantiation with arguments
	$batman_query = new WP_Query(
		array(
		'category_name' => 'batman',
		'post_status' => 'publish',
		'posts_per_page' => '3',
		'tag__not_in' => array( 6,7),
			)
		);
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
	<div id="superman" class="thoughtbox">
		<h4>Superman</h4>
				<?php
	// The class instantiation with arguments
	$superman_query = new WP_Query(array(
		'category_name' => 'superman',
		'post_status' => 'publish',
		'posts_per_page' => '3',
		'tag__not_in' => array( 6,7),
		)
		  );
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
	<div id="spiderman" class="thoughtbox">
		<h4>Spiderman</h4>
						<?php
	// The class instantiation with arguments
	$spiderman_query = new WP_Query(
		array(
		'category_name' => 'spiderman',
		'post_status' => 'publish',
		'posts_per_page' => '3',
		'tag__not_in' => array( 6,7),
		)
			);
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
	<div id="ironman" class="thoughtbox">
		<h4>Iron Man</h4>
						<?php

	// The class instantiation with arguments
	$ironman_args = new WP_Query(
		array(
		'category_name' => 'iron-man',
		'post_status' => 'publish',
		'posts_per_page' => '3',
		'tag__not_in' => array( 6,7),
		)
	);
	//start the loop
	while ( $ironman_args->have_posts() ) : $ironman_args->the_post();
	// put your html under here
?>
	&bull; <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br>

<?php
	endwhile;
	//end the loop
?>
	&bull; <strong><a href="/category/iron-man">More Iron Man</a></strong><br>

	</div>

	<div id="catwoman" class="thoughtbox">
		<h4>Catwoman</h4>
						<?php

	// The class instantiation with arguments
	$catwoman_args = new WP_Query(
		array(
		'category_name' => 'catwoman',
		'post_status' => 'publish',
		'posts_per_page' => '3',
		'tag__not_in' => array( 6,7),
		)
	);
	//start the loop
	while ( $catwoman_args->have_posts() ) : $catwoman_args->the_post();
	// put your html under here
?>
	&bull; <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br>

<?php
	endwhile;
	//end the loop
?>
	&bull; <strong><a href="/category/catwoman">More Catwoman</a></strong><br>

	</div>

	<div id="black-widow" class="thoughtbox">
		<h4>Black Widow</h4>
						<?php

	// The class instantiation with arguments
	$blackwidow_args = new WP_Query(
		array(
		'category_name' => 'black-widow',
		'post_status' => 'publish',
		'posts_per_page' => '3',
		'tag__not_in' => array( 6,7),
		)
	);
	//start the loop
	while ( $blackwidow_args->have_posts() ) : $blackwidow_args->the_post();
	// put your html under here
?>
	&bull; <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br>

<?php
	endwhile;
	//end the loop
?>
	&bull; <strong><a href="/category/black-widow">More Black Widow</a></strong><br>

	</div>
</div>
