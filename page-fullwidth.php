<?php
/**
 * Template Name: Full-width(no sidebar)
 *
 * This is the template that displays full width page without sidebar
 *
 * @package datatracks
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post();
$featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$custom=get_post_custom($post->ID);
$page_title = $post->post_name;

?>
	  <section class="white-strip">
    	<div class="container">
    		<h1><?php the_title(); ?></h1>
    		<p><?php the_content(); ?></p>
    	</div>
    </section>

    <?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
