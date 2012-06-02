
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
wp_reset_postdata();
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
wp_reset_postdata();
?>

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
			'tag__not_in' => array(
					get_term_by('slug','featured', 'post_tag')->term_id,
					get_term_by('slug','featured-secondary', 'post_tag')->term_id
				),
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
	wp_reset_postdata();
?>
	&bull; <strong><a href="/category/batman">More Batman</a></strong><br>
	</div>
	<div id="superman" class="thoughtbox">
		<h4>Superman</h4>
				<?php
	// The class instantiation with arguments
	$superman_query = new WP_Query(
		array(
			'category_name' => 'superman',
			'post_status' => 'publish',
			'posts_per_page' => '3',
			'tag__not_in' => array(
					get_term_by('slug','featured', 'post_tag')->term_id,
					get_term_by('slug','featured-secondary', 'post_tag')->term_id
				),
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
	wp_reset_postdata();
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
			'tag__not_in' => array(
					get_term_by('slug','featured', 'post_tag')->term_id,
					get_term_by('slug','featured-secondary', 'post_tag')->term_id
				),
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
	wp_reset_postdata();
?>
	&bull; <strong><a href="/category/spiderman">More Spiderman</a></strong><br>

	</div>
	<div id="wonderwoman" class="thoughtbox">
		<h4>Wonder Woman</h4>
						<?php
	// The class instantiation with arguments
	$wonderwoman_query = new WP_Query(
		array(
			'category_name' => 'wonder-woman',
			'post_status' => 'publish',
			'posts_per_page' => '3',
			'tag__not_in' => array(
					get_term_by('slug','featured', 'post_tag')->term_id,
					get_term_by('slug','featured-secondary', 'post_tag')->term_id
				),
			)
		);
	//start the loop
	while ( $wonderwoman_query->have_posts() ) : $wonderwoman_query->the_post();
	// put your html under here
?>
	&bull; <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br>

<?php
	endwhile;
	//end the loop
	wp_reset_postdata();
?>
	&bull; <strong><a href="/category/wonder-woman">More Wonder Woman</a></strong><br>

	</div>

	<div id="catwoman" class="thoughtbox">
		<h4>Catwoman</h4>
						<?php

	// The class instantiation with arguments
	$catwoman_query = new WP_Query(
		array(
			'category_name' => 'catwoman',
			'post_status' => 'publish',
			'posts_per_page' => '3',
			'tag__not_in' => array(
					get_term_by('slug','featured', 'post_tag')->term_id,
					get_term_by('slug','featured-secondary', 'post_tag')->term_id
				),
			)
		);
	//start the loop
	while ( $catwoman_query->have_posts() ) : $catwoman_query->the_post();
	// put your html under here
?>
	&bull; <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br>

<?php
	endwhile;
	//end the loop
	wp_reset_postdata();
?>
	&bull; <strong><a href="/category/catwoman">More Catwoman</a></strong><br>

	</div>

	<div id="avengers" class="thoughtbox">
		<h4>Avengers</h4>
						<?php

	// The class instantiation with arguments
	$avengers_query = new WP_Query(
		array(
			'category_name' => 'avengers',
			'post_status' => 'publish',
			'posts_per_page' => '3',
			'tag__not_in' => array(
					get_term_by('slug','featured', 'post_tag')->term_id,
					get_term_by('slug','featured-secondary', 'post_tag')->term_id
				),
			)
		);
	//start the loop
	while ( $avengers_query->have_posts() ) : $avengers_query->the_post();
	// put your html under here
?>
	&bull; <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br>

<?php
	endwhile;
	//end the loop
	wp_reset_postdata();
?>
	&bull; <strong><a href="/category/avengers">More Avengers</a></strong><br>

	</div>
</div>
