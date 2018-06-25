<?php
/**
 * The template for displaying all pages.
 * Template Name: insight xbrl Page
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

	<section id="parallax2" class="purple-band" style="background:<?php echo get_field('band_color');?>;">
		<div class="container">
			<div class="row">
				<div class="purple-wrapper">
					<?php echo get_field('purple_band');?>
				</div>
			</div>
		</div>
	</section>

	<section class="black-boxes">
		<div class="container">
			<?php
		      if( have_rows('box_row') ):
		      while ( have_rows('box_row') ) : the_row(); ?>
		      
				<a class="overlay-boxes-list  blue-cyan arrow-hover wow fadeInUp" >
                    <div class="overlay-boxes-content" >
                        <div class="overlay-boxes" >
                        	<h3><?php the_sub_field('title');?></h3>
                            <?php the_sub_field('content');?>
                        </div>
                    </div>
                </a>
            <?php endwhile; endif; ?>
        </div>
    </section> 

    <section  class="white-strip">
    	<div class="container">
    		<p><?php the_field('sec_report');?></p>
    		<a href="<?php the_field('sec_report_link');?>" class="green-button">View SEC report</a>
    	</div>
    </section>

</div>
    <section class="icon-section">
    	<div class="container">
    		<div class="sec-title">
				<h1>So, what are the benefits of XBRL reporting?</h1>
			</div>
    		<div class="col-md-10 col-centered">
    			<?php
			      if( have_rows('iconset_row') ):
			      while ( have_rows('iconset_row') ) : the_row(); ?>
	    			<div class="col-md-4 col-sm-6 icon-set">
	    				<div class="icon-sec wow fadeIn"><img src="<?php the_sub_field('image');?>"></div>
	    				<p><?php the_sub_field('content');?></p>
	    			</div>	
    			<?php endwhile; endif; ?>    			
    		</div>
    	</div>
    </section>

    

<script src="<?php echo get_template_directory_uri(); ?>/inc/js/skrollr-page.js"></script>

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


<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
