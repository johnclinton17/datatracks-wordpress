<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php $featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<?php pp_setPostViews(get_the_ID());  ?>

<div class="main-content-wrapper">
 <div class="single_title">
  <div class="container">
   <h1>
    <?php the_title(); ?>
   </h1>
  </div>
 </div>
 <?php if ($featureimg) : ?>
 <div class="news-content-wrapper" style="background:url(<?php echo $featureimg; ?>) no-repeat center top; background-size:cover"></div>
 <?php else : ?>
 <div class="news-content-wrapper" style="background:url('<?php echo get_template_directory_uri(); ?>/images/news.jpg') no-repeat center top; background-size:cover"></div>
 <?php endif; ?>
 <div class="post-content-wrapper">
  <div class="container"> 
  <div class="share"> <span><i class="fa fa-share-alt"></i></span>
    <nav> <a class="customer-share" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!"><i class="fa fa-twitter"></i></a> <a class="customer-share" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Facebook share" target="_blank" ><i class="fa fa-facebook"></i></a> <a class="customer-share" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Share on LinkedIn"><i class="fa fa-linkedin"></i></a> <a class="customer-share" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" ><i class="fa fa-google"></i></a> </nav>
   </div>
   <div class="single-content">
   <div class="date_author">
    <?php datatracks_posted_on(); ?>
    </div>
    <div class="entry-content">
     <?php the_content(); ?>
    </div>
   </div>
  </div>
 </div>
</div>
<?php //datatracks_post_nav(); ?>
<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
