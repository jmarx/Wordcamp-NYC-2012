<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

	<div id="primary" class="widget-area" role="complementary">
	<ul class="xoxo">
		<li id="search-2" class="widget-container widget_search"><form role="search" method="get" id="searchform" action="http://wordcamp.jeffreymarx.net/" >
			<div><label class="screen-reader-text" for="s">Search for:</label>
			<input type="text" value="" name="s" id="s" />
			<input type="submit" id="searchsubmit" value="Search" />
			</div>
			</form></li>

		<li id="recent-posts-2" class="widget-container widget_recent_entries">
			<h3 class="widget-title">Alex's reviews</h3>
			<ul>
			<?php
					// The class instantiation with arguments
					$author_query = new WP_Query(
						array(
						'author_name' => 'alex',
						'post_status' => 'publish',
						'posts_per_page' => '5',
							)
						);
					//start the loop
					while ( $author_query ->have_posts() ) : $author_query ->the_post();
					// put your html under here
				?>
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>

					<?php
					endwhile;
					//end the loop
			?>


			</ul>
		</li>

		<li id="recent-comments-2" class="picoftheday widget-container widget_recent_comments">
			<h3 class="widget-title">Picture of the day</h3>
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

				<?php the_post_thumbnail( 'picoftheday-thumb' ); ?>
				<div class="cutline"><?php the_content(); ?></div>

				<?php
					endwhile;
					//end the loop
			?>
		</li>
	</ul>
	</div><!-- #primary .widget-area -->

