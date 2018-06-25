<?php
/**
 * The template for displaying all pages.
 * Template Name: Products Page
 * This is the template that displays all pages by default.
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post();
$featureimg= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$custom=get_post_custom($post->ID);
$page_title = $post->post_name;
?>
 <div class="main-content-wrapper">
    <!-- section 1 -->

    <section id="one">
      <div id="parallax1" class="parallaxParent">
        <div style="background-image: url('<?php echo $featureimg ?>');height:100vh">
           <div class="overlay-black" data-center="background: rgba(0,0,0,0);" data-top-bottom="background: rgba(0,0,0,1);" data-anchor-target="#parallax1">
              <div class="hsContainer plaxEl"  data-center="opacity:1;" data-top-bottom="opacity:0.5;" data-anchor-target="#parallax1">
                <div class="hsContent ">
                  <div class="col-sm-12 col-sm-12 innerbannertext"  data-center="top:37%;" data-top-bottom="top:25%;" data-anchor-target="#parallax1"> <?php the_content(); ?> </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- section 2-->
    <section id="parallax2" class="parallaxParent1 purple-band" >
          <div class="container">
            <div class="row">
              <div class="purple-wrapper">
                <?php echo get_field('purple_band');?>
              </div>
            </div>
          </div>
       
    </section>
    <!-- section 3 -->
    <section id="parallax3" class="collaborate parallaxParent2" >
      <div class="container">
        <div class="moveup-wrapper"  data-center="top:0%;position:absolute;left:0;" data-top-bottom="top:-35%;" data-anchor-target="#parallax3">
        <div class="sec-title">
          <h1><?php echo get_field('collaborate_head');?></h1>
        </div>
        <div class="col-md-6 image-center wow fadeIn">
          <div class="anim-wrapper">
            <img src="<?php echo get_field('collaborate_image');?>">
            <div id="top-image1"></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="wrapper-collaborate">
            <?php echo get_field('collaborate_content');?>
            <a class="download-svg" href="<?php echo get_field('collaborate_download_file');?>" target="_blank"  ><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i>Download our brochure</a>
          </div>
        </div>
      </div>  
    </div>
    </section>

    <!-- section 4 -->
    <section id="parallax4" class="regulate parallaxParent" >
      <div class="container" >
        <div class="moveup-wrapper"  data-center="top:0%;position:absolute;left:0;" data-top-bottom="top:-35%;" data-anchor-target="#parallax4">
        <div class="sec-title">
          <h1><?php echo get_field('Regulate_head');?></h1>
        </div>
        <div class="col-md-6 image-right image-center wow fadeIn">
          <div class="anim-wrapper">
            <img src="<?php echo get_field('Regulate_image');?>">
            <div id="top-image"></div>
          <!-- <span></span> -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="wrapper-collaborate">
            <?php echo get_field('Regulate_content');?>
            <a class="download-svg popup-player"  href="<?php echo get_template_directory_uri(); ?>/images/DataTracks-V3.mp4" ><i class="fa fa-play-circle-o" aria-hidden="true"></i>Experience it to believe it </a>
          </div>
        </div>
      </div>  
    </div>
    </section>


  </div>
    <section id="parallax5" class="black-boxes parallaxParent1" >
        <div class="container">
          <?php
              if( have_rows('box_row') ):
              while ( have_rows('box_row') ) : the_row(); ?>
                <?php
            $style = "";
            $code_snippet = get_sub_field('link');
            if(empty($code_snippet)){
               $style = 'style="display:none;"';
            }
            ?>
            <a <?php if( get_sub_field('link') ): ?>href="<?php the_sub_field('link');?>"<?php endif; ?> class="overlay-boxes-list gradient-hover blue-cyan arrow-hover wow fadeInUp" >
                        <div class="overlay-boxes-content" data-wow-duration="0.5s">
                            <div class="dark-overlay"></div>
                            <div class="overlay-boxes" >
                              <h3><?php the_sub_field('title');?></h3>
                                <?php the_sub_field('content');?>
                                <div class="arrow icon-arrow-right" <?php echo $style;?> ><!-- <span class="read-more-box">Read more</span> --><span class="right-arrow"></span></div>
                            </div>
                        </div>
                    </a>

                <?php endwhile; endif; ?>
        </div>
      </section>


<!--/.main-content-wrapper-->



<script>
jQuery('.popup-player').magnificPopup({
     type: 'iframe',
     mainClass: 'mfp-fade',
     removalDelay: 160,
     preloader: false,
     fixedContentPos: false,
     iframe: {
         markup: '<div class="mfp-iframe-scaler">'+
                 '<div class="mfp-close"></div>'+
                 '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
               '</div>',

         srcAction: 'iframe_src',
         }
 });
  jQuery(document).ready(function(){
if (jQuery(window).width() < 801) {
     
  }
 else {
      jQuery('#parallax1').css('height', jQuery(window).height());
      jQuery('#parallax3').css('height', jQuery(window).height());
      jQuery('#parallax4').css('height', jQuery(window).height());
      jQuery('.main-content-wrapper').stickyStack();

}
});

jQuery('.innerbannertext').addClass('animated fadeInUp');
</script>


<script src="<?php echo get_template_directory_uri(); ?>/inc/js/skrollr-page.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/inc/js/product-animation.js"></script>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
