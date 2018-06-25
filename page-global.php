<?php
/**
 * The template for displaying all pages.
 * Template Name: Global FootPrint
 * This is the template that displays all pages by default.
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post();
$featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$custom=get_post_custom($post->ID);
$page_title = $post->post_name;
?>
      
<div class="main-content-wrapper">

	<section id="slide-1" class="homeSlide globalSlide parallex"  >
		<div class="bcg">		
			<div class="overlay-black" data-center="background: rgba(0,0,0,0);" data-top-bottom="background: rgba(0,0,0,1);" data-anchor-target="#slide-1">
				<div class="hsContainer plaxEl"  data-center="opacity:1;" data-top-bottom="opacity:0.5;" data-anchor-target="#slide-1">
                
					<div class="hsContent ">
                     <div class="flexslider">
						<ul class="slides">
						  <?php
					        if( have_rows('globalslide') ):
					        while ( have_rows('globalslide') ) : the_row(); ?>
								<li style="background-image:url('<?php the_sub_field('banner');?>');background-position:center top;min-height:1040px;background-repeat:no-repeat;background-size:cover">
								<div class="col-sm-12 innerbannertext"  data-center="top:35%;" data-top-bottom="top:25%;" data-anchor-target="#slide-1">
								<div class="caption-content animated fadeInUp">
								<h3><?php the_sub_field('title');?></h3>
								<span><?php the_sub_field('content');?></span>
								</div>
								</div>
								</li>
						 <?php endwhile; endif; ?>
						</ul>					
                 	</div> 
                   
            	  </div>  
				</div>
			</div>
		</div>
	</section>

	<section id="parallax2"  class="purple-band parallex" style="background:<?php echo get_field('band_color');?>;">
		<div class="container">
			<div class="row">
				<div class="purple-wrapper global-content">
					<?php echo get_field('global_content');?>
				</div>
			</div>
		</div>
	</section>

</div>
	
	
<section class="map-sec" >
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1><?php echo get_field('map_title');?></h1><p><?php echo get_field('map_desc');?></p>
            </div>
            <div id="chartdiv"></div>
                
                <script src="<?php echo get_template_directory_uri(); ?>/inc/js/map/ammap.js"></script>
                <script src="<?php echo get_template_directory_uri(); ?>/inc/js/map/worldLow.js"></script>
                <script src="<?php echo get_template_directory_uri(); ?>/inc/js/map/export.min.js"></script>
                <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/css/export.css" type="text/css" media="all" />

        </div>
    </div>
</section> 

<script>
jQuery(document).ready(function(){
	if (jQuery(window).width() < 801) {
	     
	  }
	 else {
	    jQuery(document).ready(function() {
	        jQuery('.parallex').css('height', jQuery(window).height());
			jQuery('#parallax2').css('height', jQuery(window).height()-600);
			jQuery('.main-content-wrapper').stickyStack();
			});
		  }
});
jQuery('.innerbannertext').addClass('animated fadeInUp');

</script>

<script src="<?php echo get_template_directory_uri(); ?>/inc/js/skrollr-page.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/inc/js/map.js"></script>

<script src="<?php bloginfo('template_url'); ?>/inc/js/slick.js"></script>
<script>
$('.responsive').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
   
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
			
		
</script>


<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
