<?php
/**
 * The template for displaying all pages.
 * Template Name: About Page
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
		<div class="bcg" style="background-image:url('<?php echo $featureimg ?>');height:100vh" data-top="opacity: 1; width: 100%; height: 100%; top: 0%; left: 0%;" data-center=" width: 100%; height: 100%; top: 0%; left: 0%;" data-top-bottom="width: 100%; height: 100%; top: 0%; left: 0%;" data-anchor-target="#slide-1">		
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
<section class="about-content">
		<div class="container">
			<div class="row"><div class="col-sm-12"><div class="about_text"><?php echo get_field('about_text');?></div></div></div></div></section>

	<section class="key-figures">
		<div class="container">
			<div class="row">
				<div class="wrapper">
					<h3><?php echo get_field('key_figure_title');?></h3>
                    <h6><?php echo get_field('key_figure_span');?> </h6>
					<div class="key-figures-col">
					<?php if( have_rows('key_figure_col') ): ?>
                     <?php while( have_rows('key_figure_col') ): the_row(); ?><div class="col-sm-4 padding">
                      <?php $i; ?>
                     <div class="digit"><span class="counter"><?php echo get_sub_field('number');?></span><?php echo get_sub_field('addl_field');?></div>
                     
                     <h3><?php echo get_sub_field('country');?></h3><p><?php echo get_sub_field('key_fig_content');?> </p>
                     </div>  
                     <?php $i++; ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
				</div>
			</div>
		</div>
	</section>
	<section class="join-sec">
		<div class="container">
			<div class="row">
				<div class="wrapper"><?php echo get_field('join_content');?>
                <a href="<?php echo get_field('join_content_link');?>" class="btn btn-info">Come join us</a>

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

    <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/inc/js/counter.js"></script>
    <script>jQuery(document).ready(function($) {
            jQuery('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
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
<script src="<?php echo get_template_directory_uri(); ?>/inc/js/map.js"></script>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
