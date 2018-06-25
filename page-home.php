
<?php
/**
 * The template for displaying all pages.
 * Template Name: Home Page
 * This is the template that displays all pages by default.
 */

get_header(); ?>
<link href="<?php echo get_template_directory_uri(); ?>/inc/css/jquery.socialfeed.css" rel="stylesheet" type="text/css">
<?php while ( have_posts() ) : the_post();
?>

<div class="main-content-wrapper">
 <section class="homebanner parallax">
  <div align="center" class=""> 
   <!--<video  id="hero-vid" autoplay loop class="embed-responsive-item">
   <source src="<?php echo get_template_directory_uri(); ?>/images/Orignal preset high bit rate_building.mp4" type="video/mp4">-->
   <video id="hero-vid" autoplay loop class="" preload="auto" muted>
    <source src="<?php echo get_field('video_url');?>" type="video/mp4">
   </video>
   <div class="overlay"></div>
  </div>
  <div class="container">
   <div class="bannercaption">
    <h1><?php echo get_field('banner_title');?></h1>
    <span><?php echo get_field('banner_desc');?></span> <a class="inline-video" href="<?php echo get_field('popup_video_url');?>">
    <div class="video-btn">
     <div class="play-icon"><i class="fa fa-play"></i></div>
     <p class="find-more">Find out more</p>
     <?php //the_content();?>
    </div>
    </a> </div>
  </div>
 </section>
 
 <!--content area starts here-->
 
 <section class="content_bg parallaxParent parallax">
  <div class="container-fluid">
   <div class="row">
    <div class="col-sm-6 col-lg-7 pull-right no-pad-right"> <img class="wow fadeInRight img-responsive" src="<?php echo get_field('content_image');?>" alt="">    </div>
    <div class="col-sm-6 col-lg-5">
     <div class="pad-left">
      <h2><?php echo get_field('content_title');?></h2>
      <p><?php echo get_field('content_desc');?></p>
      <a href="<?php echo get_field('content_link');?>" class="btn btn-info wow fadeInUp">Know more</a> </div>
    </div>
   </div>
  </div>
 </section>
 <section class="services-section parallax" id="scrollfixed">
  <div class="wrapper" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/services-bg.jpg);">
   <div class="overlay-black" data-center="background: rgba(0,0,0,0);" data-top-bottom="background: rgba(0,0,0,1);" data-anchor-target="#scrollfixed">
    <div class="hsContainer"  data-center="opacity:1;" data-top-bottom="opacity:0.3;" data-anchor-target="#scrollfixed">
     <div class="col-sm-12 caption"  data-center="bottom:50px;" data-top-bottom="bottom:500px;" data-anchor-target="#scrollfixed">
      <h1><?php echo get_field('services_title');?></h1>
      <p><?php echo get_field('services_desc');?></p>
      <a href="<?php echo get_field('services_link');?>" class="btn btn-info">Read more</a> <span><?php echo get_field('services_span');?></span></div>
    </div>
   </div>
  </div>
 </section>
 <section class="logoslider-sec" id="logoslider">
  <div class="container">
   <div class="row">
    <div class="col-sm-12">
     <div class="responsive">
      <?php if( have_rows('logo_slider') ): ?>
      <?php while( have_rows('logo_slider') ): the_row(); ?>
      <div><img src="<?php echo get_sub_field('logo_image') ?>" alt=""/></div>
      <?php endwhile; ?>
      <?php endif; ?>
     </div>
    </div>
   </div>
  </div>
 </section>
</div>
<!--Customer starts here-->
<div class="customers-sec" id="customer">
 <div class="wrapper" style="background: url(<?php echo get_template_directory_uri(); ?>/images/customers-bg.jpg) repeat center top;">
  <div class="container ">
   <div class="row">
    <div class="col-sm-12">
     <h1><?php echo get_field('customers_title');?></h1>
     <?php if( have_rows('customers_section') ): ?>
     <?php while( have_rows('customers_section') ): the_row(); ?>
     <div class="customersrow">
      <div class="col-sm-4"> <a href="#" class="customer_col">
       <h2><?php echo get_sub_field('title') ?></h2>
       <p><?php echo get_sub_field('customers_desc') ?></p>
       <img src="<?php echo get_sub_field('customer_logo') ?>" alt=""></a> </div>
     </div>
     <?php endwhile; ?>
     <?php endif; ?>
    </div>
    <!--<div class="col-sm-12">
     <div class="center-btn text-center"> <a href="javascript:void(0);" class="btn btn-info" id="loadMore">See More</a> <a href="javascript:void(0);" class="btn btn-info" id="close">Close</a> </div>
    </div>-->
   </div>
  </div>
 </div>
</div>

<!--Social presence starts here-->
<div class="social_presence">
<div class="container">
 <div class="row">
  <!--<div class="col-sm-12">
   <h1><?php echo get_field('social_title');?></h1>
   <div class="flex-col">
  <div class="social_col"><blockquote class="twitter-tweet" data-lang="en"><p lang="in" dir="ltr">Eurofiling XBRL Week 2018 <a href="https://t.co/nF29blY4Wt">https://t.co/nF29blY4Wt</a><a href="https://twitter.com/hashtag/Eurofiling?src=hash&amp;ref_src=twsrc%5Etfw">#Eurofiling</a> <a href="https://twitter.com/hashtag/AIFMD?src=hash&amp;ref_src=twsrc%5Etfw">#AIFMD</a> <a href="https://twitter.com/hashtag/MiFID?src=hash&amp;ref_src=twsrc%5Etfw">#MiFID</a> <a href="https://twitter.com/hashtag/CRDIV?src=hash&amp;ref_src=twsrc%5Etfw">#CRDIV</a> <a href="https://twitter.com/hashtag/FATCA?src=hash&amp;ref_src=twsrc%5Etfw">#FATCA</a> <a href="https://twitter.com/hashtag/SolvencyII?src=hash&amp;ref_src=twsrc%5Etfw">#SolvencyII</a> <a href="https://twitter.com/hashtag/XBRL?src=hash&amp;ref_src=twsrc%5Etfw">#XBRL</a> <a href="https://twitter.com/hashtag/StructuringtheUnstructured?src=hash&amp;ref_src=twsrc%5Etfw">#StructuringtheUnstructured</a> <a href="https://t.co/VeLGqlILWT">pic.twitter.com/VeLGqlILWT</a></p>&mdash; DataTracks (@DataTracks) <a href="https://twitter.com/DataTracks/status/1004351442243805190?ref_src=twsrc%5Etfw">June 6, 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</div>
   <div class="social_col"><iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FDataTracks%2Fposts%2F1753956861314478&width=auto" width="auto" height="530" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></div>
   <div class="social_col"><iframe src="https://www.linkedin.com/embed/feed/update/urn:li:activity:6410117506371059712" height="531" width="504" frameborder="0" allowfullscreen=""></iframe>
  </div></div>
 </div>-->
 <input type="hidden" class="input field-left" value="@datatracks,@GospelELC" id="query">
  
    <section class="feed">
        <div class="container">
            <!--div class="controls">
                <input type="field" value="#dolomiti" id="query" />
                <input type="button" value="Update" />
            </div-->
            <div class="social-feed-container">
            
            </div>
        </div>
    </section>
        
</div>
<script src="<?php echo get_template_directory_uri(); ?>/inc/js/home.js"></script> 
<script src="<?php bloginfo('template_url');?>/inc/js/jquery.stickystack.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/inc/js/skrollr-page.js"></script>
<?php endwhile; // end of the loop. ?>
<!-- jQuery -->
    <!--<script src="<?php echo get_template_directory_uri(); ?>/inc/bower_components/jquery/dist/jquery.min.js"></script>-->
    <!-- Codebird.js - required for TWITTER -->
    <script src="<?php echo get_template_directory_uri(); ?>/inc/bower_components/codebird-js/codebird.js"></script>
    <!-- doT.js for rendering templates -->
    <script src="<?php echo get_template_directory_uri(); ?>/inc/bower_components/doT/doT.min.js"></script>
    <!-- Moment.js for showing "time ago" -->
    <script src="<?php echo get_template_directory_uri(); ?>/inc/bower_components/moment/min/moment.min.js"></script>
    <!-- Social-feed js -->
    <script src="<?php echo get_template_directory_uri(); ?>/inc/js/jquery.socialfeed.js"></script>
    <script>
    jQuery(document).ready(function() {
        var updateFeed = function() {
            var initialQuery = jQuery('#query').val();
            initialQuery = initialQuery.replace(" ", "");
            var queryTags = initialQuery.split(",");
            jQuery('.social-feed-container').socialfeed({
                // FACEBOOK
                facebook: {
                    accounts: queryTags,
                    limit: 5,
                    access_token: 'EAACEdEose0cBAOGJ12HbZA0AhJJfWlg19V3Mh6cqngjHZCEAbYyn7bo8UgRGZAsmfyWG48ti6D8jyeuV5ArIOGQarlmCAjqgoohCFQNNZB3vdqzyzXNktMgp9gOIW5Hcwv5x0eZAck5XR3dQJ8eGx1JPQvONkSthffZA4mNePhGhG0MBRbfesTr5LlKTZCdO5oZD'
                },
                // Twitter
                twitter: {
                    accounts: queryTags,
                    limit: 4,
                    consumer_key: 'qzRXgkI7enflNJH1lWFvujT2P', // make sure to have your app read-only
                    consumer_secret: '8e7E7gHuTwyDHw9lGQFO73FcUwz9YozT37lEvZulMq8FXaPl8O', // make sure to have your app read-only
                },
                // GENERAL SETTINGS
                length: 200,
                show_media: true,
                // Moderation function - if returns false, template will have class hidden
                moderation: function(content) {
                    return (content.text) ? content.text.indexOf('fuck') == -1 : true;
                },
                //update_period: 5000,
                // When all the posts are collected and displayed - this function is evoked
                callback: function() {
                    console.log('all posts are collected');
                }
            });
        };
        updateFeed();
    });
    </script>
<?php get_footer(); ?>
<style type="text/css">
 
		.uiScaledImageContainer .scaledImageFitWidth { width:100% !important }
.uiScaledImageContainer {
    max-width: 100% !important;width:100% !important}
				
</style>

