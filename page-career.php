<?php
/**
 * The template for displaying all pages.
 * Template Name: career Page
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
          <?php echo get_field('purple_band');?>
        </div>
      </div>
    </div>
  </section>
</div>

  <section class="job-listing">
    <div class="container">
      <div class="row">
        <?php  if( have_rows('job_row') ):
         while ( have_rows('job_row') ) : the_row(); 
          $numrows[] = count( get_sub_field( 'job_list' ) );
          endwhile;endif;


          if( have_rows('job_row') ):
            $i=0;
          while ( have_rows('job_row') ) : the_row(); ?>
          <div class="job-row" data-cat='<?php the_sub_field('job_category');?>'>
              <div class="job-cat"><span class="title-cat"><?php the_sub_field('job_category');?></span> <span class="open-position">(<?php echo $numrows[$i];; ?> Open Roles)</span></div>
              <hr class="grey-career">

              <?php
                if( have_rows('job_list') ):
                while ( have_rows('job_list') ) : the_row(); ?>

                <div class="list">
                  <div class="job-list">
                    <div class="about-job">
                      <h4><?php the_sub_field('job_title');?></h4>
                      <div class="location">
                        <ul>
                          <li><?php the_sub_field('location');?></li><li><?php the_sub_field('time');?></li><li class="cat-form"><?php the_sub_field('job_category');?></li>
                        </ul>
                      </div> 
                      <a href="#" class="carrer-form" data-toggle="modal" data-target="#carrer-popup" data-title='<?php the_sub_field('job_title', false, false); ?>' data-content="<?php htmlentities( the_sub_field('description')); ?>" data-id ='<?php the_sub_field('time');?>' data-location ='<?php the_sub_field('location');?>'>Apply</a> 


                    </div>
                  </div>
                </div>
              <?php endwhile; endif; ?>  
          </div>
        <?php $i++;endwhile; endif; ?>

      </div>
    </div>
  </section>  

   <!-- Modal form -->
  <div id="carrer-popup" class="modal impactpopup contact-black fade in" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">Submit Your Application<button type="button" id="carrer-reset" class="close"  data-dismiss="modal" value="Reset"></button></div>
         <div class="modal-body" id="modalbody">
              <div class="formhead">
                <div class="about-job">
                  <h4 class="popup-title"></h4>
                  <div class="location">
                    <ul>
                      <li class="popup-loc"></li><li class="popup-time"></li><li class="popup-cat"></li>
                    </ul>
                  </div>
                  <div class="job-description">
                    <h4> job description</h4>
                    <div class="popup-desc"></div>
                  </div> 
                </div>
              </div>
              <div class="form-body">
                <?php echo do_shortcode('[contact-form-7 id="447" title="career"]'); ?>
              </div>
         </div>
      </div>
    </div>
  </div>


<?php get_footer(); ?>


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
  
jQuery(document).ready(function(){

  jQuery(".carrer-form").on('click',function() {

    //binding info in popup
    var desc = jQuery(this).attr('data-content');
    var title = jQuery(this).attr("data-title");
    var location = jQuery(this).attr("data-location");
    var time = jQuery(this).attr("data-id");
    var cat = jQuery(this).closest('.job-row').attr('data-cat');

    jQuery(".popup-title").text(title);  
    jQuery(".popup-loc").text(location); 
    jQuery(".popup-time").text(time);
    jQuery(".popup-desc").html(desc); 
    jQuery(".popup-cat").text(cat); 

    });
    //reset
   jQuery('#carrer-reset').on('click', function() {
        jQuery('form')[0].reset();
        jQuery('.wpcf7-not-valid-tip').remove();
        
    });
});

jQuery(document).ready(function(){
  //allow only text
    jQuery(".names input").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });
    //allow only numbers
  jQuery(".mobile,.yearpassingpg input").keypress(function(event) {
  return /\d/.test(String.fromCharCode(event.keyCode));
  });

});


</script>

<?php endwhile; // end of the loop. ?>
