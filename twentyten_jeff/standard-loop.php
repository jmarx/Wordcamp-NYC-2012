<!-- STANDARD
This or something similar is found in most theme files
have_posts();
the_post();
-->

<!-- start the  loop -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="post">
<!-- Display the Title as a link to the Post's permalink. -->
<h2><a href="<?php the_permalink();  ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<?php the_title(); ?></a></h2>

<!-- Display the Post's excerpt in a div box. -->

<div class="entry">
  <?php the_excerpt(); ?>
</div>

<!-- end the  loop -->

<?php
endwhile;
?>









<!-- CUSTOM -->

<?php
    $my_query = new WP_Query(
                    array(
                    //your custom parameters go here
                    )
                             );
?>

<!-- start the  loop -->

<?php if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : the_post(); ?>

<div class="post">
<!-- Display the Title as a link to the Post's permalink. -->
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">

<?php the_title(); ?></a></h2>

<!-- Display the Post's Content in a div box. -->
<div class="entry">
  <?php the_excerpt(); ?>
</div>

<!-- end the  loop -->
<?php
endwhile;
//end the loop
wp_reset_postdata();
?>