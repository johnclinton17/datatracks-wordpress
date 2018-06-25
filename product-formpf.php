<?php
/**
 * The template for displaying all pages.
 * Template Name: products formpf Page
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
		<div class="bcg" style="background-image:url('<?php echo $featureimg ?>')"  data-top="opacity: 1; width: 100%; height: 100%; top: 0%; left: 0%;" data-center=" width: 100%; height: 100%; top: 0%; left: 0%;" data-top-bottom="width: 100%; height: 100%; top: 0%; left: 0%;" data-anchor-target="#slide-1">		
			<div class="overlay-black" data-center="background: rgba(0,0,0,0);" data-top-bottom="background: rgba(0,0,0,1);" data-anchor-target="#slide-1">
				<div class="hsContainer plaxEl"  data-center="opacity:1;" data-top-bottom="opacity:0.5;" data-anchor-target="#slide-1">
					<div class="hsContent ">
						<div class="col-sm-12 col-sm-12 innerbannertext"  data-center="top:40%;" data-top-bottom="top:25%;" data-anchor-target="#slide-1"> <h3><?php the_content(); ?></h3> </div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="parallax2"  class="purple-band" style="background:<?php echo get_field('band_color');?>;">
		<div class="container">
			<div class="row">
				<div class="purple-wrapper">
					<?php echo get_field('purple_band');?>
				</div>
			</div>
		</div>
	</section>
  </div>  
    <section class="features">
    <div class="container">
    <div class="features-in">
    <img class="f-img" src="<?php bloginfo('template_url'); ?>/images/features.png" />
    <div class="icon-animation">
    <div class="icon1 wow animated fadeIn" data-wow-delay="1.5s">
     <img src="<?php bloginfo('template_url'); ?>/images/p-icon1.png" />
    </div>
    <div class="icon2 wow animated fadeIn" data-wow-delay="2.5s">
     <img src="<?php bloginfo('template_url'); ?>/images/p-icon2.png" />
    </div>
    <div class="icon3 wow animated fadeIn" data-wow-delay="3.5s">
     <img src="<?php bloginfo('template_url'); ?>/images/p-icon3.png" />
    </div>
    <div class="icon4 wow animated fadeIn" data-wow-delay="3s">
     <img src="<?php bloginfo('template_url'); ?>/images/p-icon4.png" />
    </div>
    <div class="icon5 wow animated fadeIn" data-wow-delay="2s">
     <img src="<?php bloginfo('template_url'); ?>/images/p-icon5.png" />
    </div>
    <div class="icon6 wow animated fadeIn" data-wow-delay="1s">
     <img src="<?php bloginfo('template_url'); ?>/images/p-icon6.png" />
    </div>
    </div>
    </div>
    <div class="features-mobile">
    <h2 class=""><?php the_field('features-title')?></h2>
    <div class="row">
    
     <?php
		      if( have_rows('icon') ):
		      while ( have_rows('icon') ) : the_row(); ?>
    <div class="icon wow animated zoomIn" >
    <div class="col-md-6">
    <div class="col-sm-2 col-xs-2"><img src="<?php the_sub_field('image')?>" /></div>
    <div class="col-sm-4 col-xs-4">
    <h3><?php the_sub_field('title')?></h3>
    <p><?php the_sub_field('content')?></p>
    </div>
    </div>
    </div>
       <?php endwhile; endif; ?>
  
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
		// jQuery('#parallax2').css('height', jQuery(window).height()-500);
		jQuery('.main-content-wrapper').stickyStack();
		});
	}
});

jQuery('.innerbannertext').addClass('animated fadeInUp');
</script>

<script src="<?php echo get_template_directory_uri(); ?>/inc/js/skrollr-page.js"></script>

</script>
<style>
.features{background:#fff;position:relative;padding:130px 0;width:100%}
.features-in{position:relative;background:url(images/features.png) no-repeat center;min-height:405px}
.features-in .f-img{margin:0 auto;display:block}
.icon-animation .icon1{position:absolute; right:110px; top:0}
.icon-animation .icon2{position:absolute; right:80px; top:140px}
.icon-animation .icon3{position:absolute; right:140px; top:300px}
.icon-animation .icon4{position:absolute; left:140px; top:300px}
.icon-animation .icon5{position:absolute; left:80px; top:140px}
.icon-animation .icon6{position:absolute; left:110px; top:0}
.features-mobile{display:none;visibility: hidden;}

@media (max-width: 1199px) {
	.icon-animation .icon1{right:0}
	.icon-animation .icon2{right:-40px}
	.icon-animation .icon3{right:0}
	.icon-animation .icon4{left:0}
	.icon-animation .icon5{left:-40px}
	.icon-animation .icon6{left:0}
}
@media (max-width: 1024px) {
	.icon-animation img{width:90%}
}
@media (max-width: 991px) {
	.features-in{display:none}
	.features-mobile{display:block}
	.features-mobile h2{font-size:40px;font-family:'Montserrat-Bold';margin:0 0 30px 0;color:#666}
	.icon h3{font-size:22px;font-family:'Montserrat-Bold';color:#003399;margin-top: 5px;}
	.icon p{font-size:16px;font-family:'Montserrat-Medium';color:#666;min-height:70px;}
	.icon .col-xs-2{width:13%;padding-right:0}
	.icon .col-xs-4{padding-left:0}
	/*.icon {margin:0 0 30px 0;}
	.icon:nth-child(4){margin:0}*/
}
@media (max-width: 950px) {
	.icon p br{display:none}
}
@media (max-width: 850px) {
	.icon .col-xs-4{padding-left:20px}
	
}
@media (max-width: 768px) {
	.icon p{font-size:14px}
	.icon h3{font-size:18px}
}
@media (max-width: 600px) {
	.features{padding:50px 0}
	.features-mobile h2{font-size:24px;}
	.icon .col-xs-2{width:18%;padding-right:0}
	.icon h3{margin: 5px 0 10px;font-size:18px;}
	.icon img{width:100px}
	.icon .col-xs-4{width:70%;padding-left:20px}
	
}
@media (max-width: 480px) {
	.icon .col-xs-2{width:25%;}
	
	
}
</style>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
