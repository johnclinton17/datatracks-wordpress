<?php
/**
 * The Template for displaying all single posts.
 *
 * @package datatracks
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
 <div class="news-content-wrapper" style="background:url('<?php echo get_template_directory_uri(); ?>/images/blog1.jpg') no-repeat center top; background-size:cover"></div>
 <?php endif; ?>
 <div class="post-content-wrapper">
  <div class="container">
   <div class="share"> <span><i class="fa fa-share-alt"></i></span>
    <nav> <a class="customer-share" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!"><i class="fa fa-twitter"></i></a> <a class="customer-share" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Facebook share" target="_blank" ><i class="fa fa-facebook"></i></a> <a class="customer-share" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Share on LinkedIn"><i class="fa fa-linkedin"></i></a> <a class="customer-share" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" ><i class="fa fa-google"></i></a> </nav>
   </div>
   <div class="single-content">
    <div class="date_author">
     <?php $blogauthor = get_post_custom($post->ID);
   if($blogauthor['blog_author'][0]){?>
     <h6><?php echo get_field('blog_author'); ?></h6>
     <?php }?>
     <?php datatracks_posted_on(); ?>
    </div>
    <div class="entry-content">
     <?php the_content(); ?>
    </div>
   </div>
  </div>
 </div>
 <div class="news-container">
  <?php //datatracks_post_nav(); ?>
  <?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>
  <?php endwhile; // end of the loop. ?>
  <?php
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$tag_ids = array();
foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
 
$args=array(
'tag__in' => $tag_ids,
'post__not_in' => array($post->ID),
'showposts'=>4,  // Number of related posts that will be shown.
'caller_get_posts'=>1,
'post_type' => 'blogs',
);
 
$my_query = new wp_query($args);
if( $my_query->have_posts() ) {
echo '<div id="relatedposts"><h2>Related Posts</h2><div class="col-sm-4">';
while ($my_query->have_posts()) {
$my_query->the_post();
 $featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
?>
  <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
  <?php
if ($featureimg) { ?>
  <div class="featured_image" style="background:url(<?php echo $featureimg; ?>) no-repeat center top; background-size:cover"></div>
  <?php } else { ?>
  <div class="featured_image" style="background:url('<?php echo get_template_directory_uri(); ?>/images/blog1.jpg') no-repeat right top;"></div>
  <?php }
?>
  </a>
  <div class="caption"> <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
   <h3> <?php echo wp_trim_words( get_the_title(), 10 ); ?> </h3>
   </a></div>
  <?php
}
echo '</div>';
}
}
$post = $backup;
wp_reset_query();
?>
 </div>
</div>
<script>
jQuery(window).load(function(){
  jQuery(window).scroll(function() {
    var wintop = jQuery(window).scrollTop(), docheight = jQuery('article').height(), winheight = jQuery(window).height();
    console.log(wintop);
    var totalScroll = (wintop/(docheight-winheight))*100;
    console.log("total scroll" + totalScroll);
   jQuery(".KW_progressBar").css("width",totalScroll+"%");
  });

});
</script> 
<script src="<?php echo get_template_directory_uri(); ?>/inc/js/social-share.js"></script>
<?php get_footer(); ?>
