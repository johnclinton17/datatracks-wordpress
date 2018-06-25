<?php
/**
 * The template for displaying all pages.
 * Template Name: contact Page
 * This is the template that displays all pages by default.
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post();
$featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$custom=get_post_custom($post->ID);
$page_title = $post->post_name;
?>
      

<div class="main-content-wrapper">
	<section id="slide-1" class="homeSlide parallex">
		<div class="bcg" style="background-image:url('<?php echo $featureimg ?>')"  data-top="opacity: 1; width: 100%; height: 100%; top: 0%; left: 0%;" data-center=" width: 100%; height: 100%; top: 0%; left: 0%;" data-top-bottom="width: 100%; height: 100%; top: 0%; left: 0%;" data-anchor-target="#slide-1">		
			<div class="overlay-black" data-center="background: rgba(0,0,0,0);" data-top-bottom="background: rgba(0,0,0,1);" data-anchor-target="#slide-1">
				<div class="hsContainer plaxEl"  data-center="opacity:1;" data-top-bottom="opacity:0.5;" data-anchor-target="#slide-1">
					<div class="hsContent ">
						<div class="col-sm-12 col-sm-12 innerbannertext"  > <h3><?php the_content(); ?></h3> </div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="purple-band" style="background:/*<?php echo get_field('band_color');?>*/ #10a59f;">
		<div class="container">
			<div class="row">
				<div class="purple-wrapper">
					<!-- <?php echo get_field('purple_band');?> -->
					<h1>Indeed it is.</h1>
					<p>Get in touch on <strong>1.800.937.9280</strong>  or  <strong>609.257.4232</strong></p>
				</div>
			</div>
		</div>
	</section>
  </div>  

	<section class="form-sec" style="background-color:">
		<div class="container">
			<div class="row">
				<div class="wrapper">
					<div class="form-wrapper">
						<?php echo do_shortcode('[contact-form-7 id="270" title="testform"]'); ?>
					</div>
				</div>
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

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
