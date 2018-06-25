<?php 
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package datatracks
 */

get_header(); ?>


<?php if ( !is_paged() ) { ?>
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
 <div class="news-content-wrapper" style="background:url('<?php echo get_template_directory_uri(); ?>/images/blog1.jpg')"></div>
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
<?php } ?>

<!--<div class="col-md-4">
<div class="recent-post">
<h2>Recent Posts</h2>
<ul>
<?php
    $recent_posts = wp_get_recent_posts(array('post_type'=>'blogs'));
    foreach( $recent_posts as $recent ){
        echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="blogs '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
    }
?></ul>

</div>
</div>-->
<?php //get_sidebar(); ?>

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
   <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if ($featureimg) : ?>
   <div class="featured_image" style="background:url(<?php echo $featureimg; ?>) no-repeat center top;background-size: cover;"></div>
   <?php else : ?>
   <div class="featured_image" style="background:url('<?php echo get_template_directory_uri(); ?>/images/blog1.jpg') no-repeat right top"></div>
   <?php endif; ?>
   <div class="caption"> 
    <h3> <?php echo wp_trim_words( get_the_title(), 10 ); ?> </h3>
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
     <div class="center-btn text-center"> <a href="javascript:void(0);" class="btn btn-info" id="loadMore">Load More</a> <a href="javascript:void(0);" class="btn btn-info" id="close">Close</a> </div>
    </div>
</div>
<div class="col-sm-4"><div class="tab-section">
 <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#popular">Most Popular</a></li>
  <li><a data-toggle="tab" href="#recommended">Recommended</a></li>
 </ul>
 <div class="tab-content">
  <div id="popular" class="tab-pane fade in active">
   <div class="popular">
    <?php
   global $post;
   $args = array( 'numberposts' => -1,'post_type' => 'blogs','orderby' => 'meta_value_num','meta_key' => 'post_views_count'  );
   $myposts = get_posts( $args );
   foreach( $myposts as $post ) : setup_postdata($post); ?>
    <div class="individual">
     <div class="col-sm-6">
      <?php $featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  ?>
      <a href="<?php the_permalink(); ?>">
						<?php if ($featureimg) : ?>
      <div class="featured_image" style="background:url(<?php echo $featureimg; ?>) no-repeat right top;background-size: cover;"></div>
      <?php else : ?>
      <div class="featured_image" style="background:url('<?php echo get_template_directory_uri(); ?>/images/blog1.jpg') no-repeat right top"></div>
      <?php endif; ?></a>
     </div>
     <div class="col-sm-6"><a href="<?php the_permalink(); ?>"> <?php echo wp_trim_words( get_the_title(), 5 ); ?></a> </div>
    </div>
    <?php endforeach; ?>
   </div>
  </div>
  <div id="recommended" class="tab-pane fade">
   <div class="recommend">
    <?php
   global $post;
   $args = array( 'numberposts' => -1,'post_type' => 'blogs','orderby' => 'ASC' );
   $myposts = get_posts( $args );
   foreach( $myposts as $post ) : setup_postdata($post); ?>
    <?php $recommend = get_post_custom($post->ID);
   if($recommend['recommend_option'][0]){?>
    <div class="individual">
     <div class="col-sm-6">
      <?php $featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  ?>
      <a href="<?php the_permalink(); ?>"><?php if ($featureimg) : ?>
      <div class="featured_image" style="background:url(<?php echo $featureimg; ?>) no-repeat right top;background-size: cover;"></div>
      <?php else : ?>
      <div class="featured_image" style="background:url('<?php echo get_template_directory_uri(); ?>/images/blog1.jpg')  no-repeat right top"></div>
      <?php endif; ?></a>
     </div>
     <div class="col-sm-6"><a href="<?php the_permalink(); ?>"> <?php echo wp_trim_words( get_the_title(), 5 ); ?></a> </div>
    </div>
    <?php }?>
    <?php endforeach; ?>
   </div>
  </div>
 </div></div>
</div>
</div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> 
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc/js/slick.js"></script> 
<script>
jQuery(document).ready(function(){
jQuery('.popular').slick({
slidesToShow: 4,
slidesToScroll: 1,
infinite: false,
arrows: true,
vertical: true,
autoplay: false,
  });
				});
jQuery(document).ready(function(){
jQuery('.recommend').slick({
slidesToShow: 4,
slidesToScroll: 1,
infinite: false,
arrows: true,
vertical: true,
autoplay: false,
  }); 
		});
</script>
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
