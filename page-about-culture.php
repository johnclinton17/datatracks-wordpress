<?php
/**
 * The template for displaying all pages.
 * Template Name: About - Culture 
 * This is the template that displays all pages by default.
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post();
$featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$custom=get_post_custom($post->ID);
$page_title = $post->post_name;
?>
      

<div class="main-content-wrapper">
	<section id="slide-1" class="homeSlide parallex" >
		<div class="bcg" style="background-image:url('<?php echo $featureimg ?>');height: 100vh;"  data-top="opacity: 1; width: 100%; height: 100%; top: 0%; left: 0%;" data-center=" width: 100%; height: 100%; top: 0%; left: 0%;" data-top-bottom="width: 100%; height: 100%; top: 0%; left: 0%;" data-anchor-target="#slide-1">		
			<div class="overlay-black" data-center="background: rgba(0,0,0,0);" data-top-bottom="background: rgba(0,0,0,1);" data-anchor-target="#slide-1">
				<div class="hsContainer plaxEl"  data-center="opacity:1;" data-top-bottom="opacity:0.5;" data-anchor-target="#slide-1">
					<div class="hsContent ">
						<div class="col-sm-12 col-sm-12 innerbannertext"  data-center="top:40%;" data-top-bottom="top:25%;" data-anchor-target="#slide-1"> <h3><?php the_content(); ?></h3> </div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="parallax2" class="purple-band-culture" style="background:<?php echo get_field('band_color');?>;">
		<div class="container">
			<div class="row">
				<div class="purple-wrapper">
					<?php echo get_field('band_text');?>
				</div>
			</div>
		</div>
	</section>
</div>
	<section class="customersection">
		<div class="container">
			<div class="customercontent">
				<?php echo get_field('customer_text');?>
			</div>

			<div class="customerrow">
				<ul class="customertext">
					<?php if( have_rows('customer_row_section') ):
						$i=1;
	               while ( have_rows('customer_row_section') ) : the_row(); ?>
						<li class="wow animated fadeIn" <?php if($i==1):?>data-wow-delay="0.5s" <?php elseif ($i==2):?> data-wow-delay="1s"  <?php elseif ($i==3):?> data-wow-delay="1.5s" <?php elseif ($i==4):?> data-wow-delay="1s" <?php else:?> data-wow-delay="1.5s" <?php endif;?>>
							<div class="innerli">
								<div class="imglidiv"><img src="<?php the_sub_field('image');?>"></div>
								<h4><?php the_sub_field('title');?></h4>
								<div class="customcont">
									<?php the_sub_field('description');?>
								</div>
						    </div>
						</li>
					<?php 
                        if($i%3==0){echo "<li class='middlediv' style='width:100%; height:90px'></li>";};
					$i++;endwhile; endif;?>
				</ul>
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
		jQuery('.main-content-wrapper').stickyStack();
		});
	  }
});	

jQuery('.innerbannertext').addClass('animated fadeInUp');
</script>

<script src="<?php echo get_template_directory_uri(); ?>/inc/js/skrollr-page.js"></script>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
