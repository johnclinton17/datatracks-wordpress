<?php
/**
 * The template for displaying all pages.
 * Template Name: About Partnerships Page
 * This is the template that displays all pages by default.
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post();
$featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$custom=get_post_custom($post->ID);
$page_title = $post->post_name;
?>
      

<div class="main-content-wrapper">
	<section id="slide-1" class="homeSlide parallex"  >
		<div class="bcg" style="background-image:url('<?php echo $featureimg ?>');height:100vh"  data-top="opacity: 1; width: 100%; height: 100%; top: 0%; left: 0%;" data-center=" width: 100%; height: 100%; top: 0%; left: 0%;" data-top-bottom="width: 100%; height: 100%; top: 0%; left: 0%;" data-anchor-target="#slide-1">		
			<div class="overlay-black" data-center="background: rgba(0,0,0,0);" data-top-bottom="background: rgba(0,0,0,1);" data-anchor-target="#slide-1">
				<div class="hsContainer plaxEl"  data-center="opacity:1;" data-top-bottom="opacity:0.5;" data-anchor-target="#slide-1">
					<div class="hsContent ">
						<div class="col-sm-12 col-sm-12 innerbannertext"  data-center="top:40%;" data-top-bottom="top:25%;" data-anchor-target="#slide-1"> <h3><?php the_content(); ?></h3> </div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="parallax2" class="purple-band" style="background:<?php echo get_field('band_color');?>;">
		<div class="container">
			<div class="row">
				<div class="purple-wrapper">
					<?php echo get_field('about_band');?>
				</div>
			</div>
		</div>
	</section>

	<section class="form-sec">
		<div class="container">
			<div class="row">
				<div class="wrapper">
					<h3>Let  us  know  your  requirements.</h3>
					<div class="form-wrapper">
						<?php echo do_shortcode('[contact-form-7 id="267" title="Contact form 1"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
	<div class="logoslider-sec partnership" style="background:url('<?php echo get_field('partner-bg');?>');">
		 <div class="container">
			  <div class="row">
				   <div class="col-sm-12"><h1>Current Partners</h1>
					<?php if( have_rows('logo_slider') ): ?>
				    	<?php while( have_rows('logo_slider') ): the_row(); ?>
				    		<div class="partner-logo"><div class="middle"><img src="<?php echo get_sub_field('logo_image') ?>" alt=""/></div></div>
				    	<?php endwhile; ?>
				    <?php endif; ?>
				   </div>
			  </div>
		 </div>
	</div>



<script>
    jQuery(document).ready(function(){
    if (jQuery(window).width() < 801) {
         
      }
     else {
        jQuery(document).ready(function() {
        jQuery('.parallex').css('height', jQuery(window).height());
        jQuery('.main-content-wrapper').stickyStack();
        });
      }
    });

jQuery('.innerbannertext').addClass('animated fadeInUp');
</script>
<script src="<?php echo get_template_directory_uri(); ?>/inc/js/skrollr-page.js"></script>
<script type="text/javascript">

// jQuery('.popup-player').magnificPopup({
//     type: 'iframe',
//     mainClass: 'mfp-fade',
//     removalDelay: 160,
//     preloader: false,
//     fixedContentPos: false,
//     iframe: {
//         markup: '<div class="mfp-iframe-scaler">'+
//                 '<div class="mfp-close"></div>'+
//                 '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
//               '</div>',

//         srcAction: 'iframe_src',
//         }
// });

</script>


<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
