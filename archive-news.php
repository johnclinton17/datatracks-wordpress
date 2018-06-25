<?php
/**
* The template for displaying Archive pages.
*
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*
* @package datatracks
*/
get_header(); ?>
<div class="news-container1">
 <?php if ( have_posts() ) : ?>
 <!-- .page-header -->
 <?php $i=0; /* Start the Loop */ ?>
 <?php while ( have_posts() ) : the_post(); ?>
 <?php
    $featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  ?>
 <?php if ( $i == 0 ) : ?>
 <?php if ($featureimg) : ?>
 <div class="news-content-wrapper" style="background:url(<?php echo $featureimg; ?>);background-size: cover;"></div>
 <?php else : ?>
 <div class="news-content-wrapper" style="background:url('<?php echo get_template_directory_uri(); ?>/images/news.jpg')"></div>
 <?php endif; ?>
 <div class="first-post">
  <div class="post-content-wrapper">
   <div class="container">
    <div class="post-content"> <a href="<?php the_permalink(); ?>" title="">
     <h1>
      <?php the_title(); ?>
     </h1>
     <?php the_excerpt();?>
     </a> </div>
   </div>
  </div>
 </div>
 <?php 	endif;
   $i++;
	 endwhile;
	endif; 
	?>
</div>
<div class="news-container">
<div class="col-sm-8">
 <?php if ( have_posts() ) : ?>
 <!-- .page-header -->
 <?php $i=0; /* Start the Loop */ ?>
 <?php while ( have_posts() ) : the_post(); ?>
 <?php if($i == 0) :?>
 <div class="secondary-post"></div>
 <?php 	else : ?>
 <div class="newsrow">
<div class="col-sm-6">
 <?php
    $featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">  <?php if ($featureimg) : ?>
<div class="featured_image" style="background:url(<?php echo $featureimg; ?>) no-repeat center top;background-size: cover;"></div>
 <?php else : ?>
 <div class="featured_image" style="background:url('<?php echo get_template_directory_uri(); ?>/images/news.jpg')"></div>
 <?php endif; ?>
 <div class="caption"> 
  <h3> <?php echo wp_trim_words( get_the_title(), 6 ); ?> </h3>
  <?php $excerpt=get_the_excerpt();?>
  <?php echo substr($excerpt,0,100);?> </div></a>
</div>
 </div>
 <?php endif; ?>
 <?php $i++;
                endwhile; ?>
 <?php else : ?>
 <?php get_template_part( 'content', 'none' ); ?>
 <?php endif;?>

<div class="col-sm-12">
     <div class="center-btn text-center"> <a href="javascript:void(0);" class="btn btn-info" id="loadMore">Load More</a> <a href="javascript:void(0);" class="btn btn-info" id="close">Close</a> </div></div></div>
<div class="col-sm-4"><div class="tab-blog-section">
<h4>Latest Blogs</h4>
    <?php
   global $post;
   $args = array( 'numberposts' => 5,'post_type' => 'blogs','orderby' => 'meta_value_num','meta_key' => 'post_views_count'  );
   $myposts = get_posts( $args );
   foreach( $myposts as $post ) : setup_postdata($post); ?>
    <div class="individual">
     <div class="col-sm-6"><a href="<?php the_permalink(); ?>">
      <?php $featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  ?>
      <?php if ($featureimg) : ?>
      <div class="featured_image" style="background:url(<?php echo $featureimg; ?>) no-repeat center top; background-size: cover;"></div>
      <?php else : ?>
      <div class="featured_image" style="background:url('<?php echo get_template_directory_uri(); ?>/images/blog1.jpg') no-repeat center top; background-size: cover;"></div>
      <?php endif; ?>
     </a></div>
     <div class="col-sm-6"><a href="<?php the_permalink(); ?>"> <?php echo wp_trim_words( get_the_title(), 5 ); ?></a> </div>
    </div>
    <?php endforeach; ?>
 </div></div>
</div>
</div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
jQuery(function () {
	//alert("hi");
		jQuery("#close").hide();
   jQuery(".newsrow").slice(0, 6).show();
		    jQuery("#loadMore").on('click', function (e) {
        e.preventDefault();
        jQuery(".newsrow:hidden").slice(0, 2).slideDown();
        if (jQuery(".newsrow:hidden").length == 0) {
            jQuery("#load").fadeOut('slow');
            //jQuery("#loadMore").hide();
        }
        if (jQuery(".newsrow:hidden").length < 1 || (".newsrow:hidden").length == 0) {
            jQuery("#loadMore").hide();
												 jQuery("#close").show();
        }

        jQuery('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
				jQuery("#close").on('click', function (e) {
					 e.preventDefault();
					  jQuery(".newsrow").slice(2, 100).fadeOut();
									if (jQuery(".newsrow:hidden").length < 1 || (".newsrow:hidden").length == 0) {
            jQuery("#loadMore").show();
												 jQuery("#close").hide();
        }
      
    });

});</script>
<?php get_footer(); ?>