<?php
/**
 * The template for displaying all pages.
 * Template Name: insight sec-calender Page
 * This is the template that displays all pages by default.
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post();
$featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$custom=get_post_custom($post->ID);
$page_title = $post->post_name;
?>
      

<div class="main-content-wrapper">
	<section id="slide-1" class="homeSlide"  >
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
					<?php echo get_field('purple_band');?>
				</div>
			</div>
		</div>
	</section>

</div>
  <section class="grey-strip">
  	<div class="container">
      <h1 class="calender-title">2018 The SEC Filing Dates and Holiday Calendar</h1>
      <!-- main content -->
  		<div class="col-md-9 main-calender">
        <div class="row">
          <a href="javascript:void(0)" data-toggle="modal" data-target="#formpopup"><img src="<?php echo get_template_directory_uri(); ?>/images/calender.png"></a>
          <div class="download-row">
            <p><a href="<?php echo get_field('download_file');?>" download>Download</a> Our free version here</p>
          </div>
        </div>
      </div>
      <!-- main content -->
      <!-- sidebar -->
      <div class="col-md-3 sidebar-calender">
        <div class="row">
          <div class="sec-holidays">
            <div class="holidaytitle"><h3><?php echo get_field('holiday_title');?></h3><hr class="green"></div>
            <div class="holiday-list">
              <?php
              if( have_rows('holiday_list') ):
              while ( have_rows('holiday_list') ) : the_row(); ?>
                <div class="list-row">
                    <?php the_sub_field('holiday_name');?>
                </div>
              <?php endwhile; endif; ?>
            </div>
            <div class="holidayfooter"><p>** Obtained from sec.gov website</p></div>
          </div>  
          <!-- International Filers -->
          <div class="sec-holidays">
            <div class="holidaytitle"><h3><?php echo get_field('title');?></h3><hr class="green"></div>
            <div class="content">
              <p><?php echo get_field('foreign_content');?></p>
            </div>
          </div>  
        </div>
      </div>
      <!-- sidebar -->
  	</div>
  </section>

 <div id="formpopup" class="modal impactpopup contact-black fade in" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">Submit Your Application<button type="button" id="carrer-reset" class="close"  data-dismiss="modal" value="Reset"></button></div>
         <div class="modal-body" id="modalbody">
              <div class="form-body sec-calender-body">
                <?php echo do_shortcode('[contact-form-7 id="493" title="sec calender"]'); ?>
              </div>
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


<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
