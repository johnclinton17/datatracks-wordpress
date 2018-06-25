<?php
/**
 * The template for displaying all pages.
 * Template Name: Services Surety Page
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

	<section class="black-boxes ">
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
           
            <div class="full-width-box">
            	<?php
		      		if( have_rows('full-width-box') ):
		     		while ( have_rows('full-width-box') ) : the_row(); ?>
            	<a class="overlay-boxes-list blue-cyan arrow-hover wow fadeInUp" >
                    <div class="overlay-boxes-content" >
                        <div class="overlay-boxes" >
                        	<h3><?php the_sub_field('title');?></h3>
                            <?php the_sub_field('content');?>
                        </div>
                    </div>
                </a>
                <?php endwhile; endif; ?>
            </div>
		</div>
	</section>


</div>


    <section class="step-process">
    <div class="container">
    <h2 class="text-center"> <?php the_field('title');?></h2>
    <div class="desk-version">
    <div class="row">
    <?php
		      if( have_rows('icon-image') ):
			  $i=1;
		      while ( have_rows('icon-image') ) : the_row(); ?>
     <!--<div class="col-md-3 col-sm-3 col-xs-3" >
     <div class="step">
     
    <img src="<?php the_sub_field('image');?>"  class="<?php if($i==1):?>wow animated fadeIn" data-wow-delay="1s" <?php elseif($i==2):?> wow animated fadeInLeft" data-wow-delay="2s" <?php elseif($i==3):?>wow animated fadeInLeft" data-wow-delay="3s" <?php elseif($i==4):?>wow animated fadeInLeft" data-wow-delay="4s" <?php endif;?>"/>
     
    </div>
    </div>-->
   <?php  $i++;
    endwhile; endif;?>
          
            <div class="col-md-6 col-sm-6 col-xs-6">
             <div class="desk-outline">
             
            <div class="step wow animated fadeIn" data-wow-delay="1s">
            <img src="<?php bloginfo('template_url')?>/images/s-icon1.png">
            </div>
           
          
             <div class="step wow animated fadeInLeft step2" data-wow-delay="2s">
            <img src="<?php bloginfo('template_url')?>/images/s-icon2.png">
            </div>
            </div>
            
            <span class="one-time">One-Time Activity</span>
          </div>
            
            <div class="col-md-3 col-sm-3 col-xs-3">
            <div class="step wow animated fadeInLeft step3" data-wow-delay="3s">
            <img src="<?php bloginfo('template_url')?>/images/s-icon3.png">
            </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 step4">
             <div class="step wow animated fadeInLeft" data-wow-delay="4s">
            <img src="<?php bloginfo('template_url')?>/images/s-icon4.png">
            </div>
            </div>

    </div>
    <!--<div class="step-animation">
    <ul>
    <div class="outline">
    <li class="col-md-3 col-sm-3 col-xs-3"><span class="wow animated fadeInLeft" data-wow-delay="1s">Step 1</span></li>
    <li class="col-md-3 col-sm-3 col-xs-3"><span class="wow animated fadeInLeft arrow" data-wow-delay="2s"><img src="<?php bloginfo('template_url'); ?>/images/step-arrow.png" /> <strong class="mgn">Step 2</strong></span></li>
     <span class="one-time">One-Time Activity</span>
    </div>
    <li class="col-md-3 col-sm-3 col-xs-3 p10"><span class="wow animated fadeInLeft" data-wow-delay="3s"><img src="<?php bloginfo('template_url'); ?>/images/step-arrow.png" /><strong>Step 3</strong></span></li>
    <li class="col-md-3 col-sm-3 col-xs-3 p10"><span class="wow animated fadeInLeft" data-wow-delay="4s"><img src="<?php bloginfo('template_url'); ?>/images/step-arrow.png" /><strong>Step 4</strong></span></li>
    </ul>
    </div>-->
    <div class="row">
    <?php
		      if( have_rows('content') ):
			  $i=1;
		      while ( have_rows('content') ) : the_row(); ?>
    <div class="col-md-3 col-sm-3 col-xs-3 <?php if($i==1):?>wow animated fadeIn" data-wow-delay="1s" <?php elseif($i==2):?> wow animated fadeIn" data-wow-delay="2s" <?php elseif($i==3):?>wow animated fadeIn" data-wow-delay="3s" <?php elseif($i==4):?>wow animated fadeIn" data-wow-delay="4s"<?php endif;?>">
    <h3 class="text-center"><?php the_sub_field('title');?></h3>
    <p><?php the_sub_field('para');?></p>
    </div>
     <?php  $i++;
    endwhile; endif;?>
    
    </div>
    </div>


    <div class="mob-version">

      <div class="list-pattern">  
        <div class="row wow animated zoomIn">
          <ul  class="col-xs-3">
           <?php
  		      if( have_rows('mobile') ):
  		      while ( have_rows('mobile') ) : the_row(); ?>
              <li><img src="<?php the_sub_field('icon');?>" /></li>
            <?php endwhile; endif; ?>
          </ul>
          
          <ul class="col-xs-8">
            <?php
    		      if( have_rows('mobile-outline') ):
    		      while ( have_rows('mobile-outline') ) : the_row(); ?>
                  <li><h3><?php the_sub_field('title');?></h3>
                  <p><?php the_sub_field('content');?></p></li>
            <?php endwhile; endif; ?>
          </ul>
          <span class="mob-one-time">One-Time Activity</span>
         </div>
      </div>
   
      <div class="mob-padd">
        <?php
          if( have_rows('mobile-version') ):
          while ( have_rows('mobile-version') ) : the_row(); ?>
          <div class="row wow animated zoomIn mbtm">
            <div class="col-xs-3"> 
              <img src="<?php the_sub_field('icon');?>" />
            </div>
            <div class="col-xs-8">
              <h3><?php the_sub_field('title');?></h3>
              <p><?php the_sub_field('content');?></p>
            </div>
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

<style>
section.step-process{background:#fff;position:relative;padding:90px 0 130px 0}
.step-process h2{font-size:34px;font-family:'Montserrat-Bold';margin:0 0 70px 0;color:#666}
.step-process p{font-size:16px;font-family:'Montserrat-Medium';color:#666;text-align:center}
.step img{margin:10px 0 5px 0;width:90% /*margin:0 0 30px;display:block;text-align:center;*/}
.step-animation ul{background:#ebebeb;border-radius:50px;float:left;width:100%;margin-bottom:20px;}
.step-animation ul li{list-style:none;display:inline-block;/*text-align:center;*/font-family:'Montserrat-Bold';font-size:22px;color:#1f527d}
.outline{border:2px dashed #859eb4;display:block;outline-offset:10px;float:left;width:48%;border-radius:25px;padding:10px;margin-left: -40px;position:relative}
.outline li:first-child{width:220px}
.outline li:nth-child(2){width:275px}
.p10{padding:10px;margin: 0 0 0 20px;}
.step-animation ul li span::before{background:url(images/step-arrow.png) no-repeat left;}
.step-animation ul li span strong{margin:0 0 0 15px}
.one-time{position: absolute;left: 200px; bottom: -10px;color:#666;font-size:12px;font-family:'Montserrat-Medium';background:#fff; }
.mob-version{display:none}
.mgn{margin:0 0 0 20px !important}
.desk-outline{border:2px dotted #696969;border-radius:100px;float:left;width:500px;position:relative}
.desk-outline .step{width:250px;float:left}
.skyblue{color:#71c2ee}
.green{color:#00b150}
.violet{color:#6f389c}
.navyblue{color:#1f527d}
.step-process h3 span{font-family:'Montserrat-Bold';font-size:34px}
.step2 {margin-right:-70px;}
.step2 img{margin:10px 0 5px 70px;}
.step3 img,.step4 img{margin:10px 0 5px 30px;}
@media (max-width: 1200px) {
	.outline{width:50%}
.outline li:first-child {width: 150px;}
.step-process p br{display:none}
.desk-outline{width:435px;}
.step2 img{margin:10px 0 5px 0;}

}
@media (max-width: 991px) {
	.outline li:first-child {width: 100px ;}
	.outline li:nth-child(2) {width: 180px ;}
	.one-time{left: 75px;}
	
	.desk-outline img{max-width:75%}
	.step3 img, .step4 img{margin:10px 0 5px ;}
}
@media (max-width: 850px) {
	.desk-outline{width:375px;}
	.desk-outline .step{width:220px;}
	.desk-outline img{max-width:70%}
	.step3 img, .step4 img{width:80%}
	.step-process p{font-size:15px}
	.step-process h3 span{font-size:24px;}
	.step3 img, .step4 img{margin:10px 0 5px 20px;}
}
@media (max-width: 768px) {
	.desk-version{display:none}
	.mob-version{display:block}
	.list-pattern{position:relative}
	.list-pattern ul:nth-child(2){border:2px dashed #859eb4;border-radius:10px;}
	.list-pattern ul li:nth-child(2){margin:0}
	.list-pattern ul li{list-style:none; margin: 0 ;padding:10px 5px;}
	.mob-version h3{font-family:'Montserrat-Bold';font-size:22px;color:#1f527d;margin-top:0}
	.mob-outline{border:2px dashed #859eb4;border-radius:10px;padding:10px;margin:0 0 30px 0}
	.mob-one-time{background: #fff;color:#666;padding: 2px 5px;font-size:12px;position:absolute;left:300px;bottom:20px}
	/*.mob-outline{background:url(images/step-arrow.png) bottom;}*/
	.mob-padd{padding:10px}
	.mbtm{margin-bottom:20px}
	.step-process h2 {font-size: 24px;margin: 0 0 30px 0;}
	section.step-process{padding:50px 0}
	.step-process p{text-align:left}
	.mob-version ul li img,.mob-padd img {width: 50%;}
}
@media (max-width: 695px) {
	.step-process p{font-size:14px}
	.outline li:nth-child(2) {width: 130px ;}
	.step-animation ul li{font-size:18px}
	.mob-one-time{left:250px;bottom:5px}
}
@media (max-width: 600px) {
	.mob-version ul li img,.mob-padd img {width: 60%;}
}
@media (max-width: 480px) {
	.list-pattern ul:nth-child(1) li img:first-child{margin-bottom: 13px;}
	.mob-version ul li img,.mob-padd img {width: 90%;}
	.mob-one-time{left:200px;}
}
@media (max-width: 400px) {
	list-pattern ul li{padding:0}
	.mob-padd .col-xs-3,.list-pattern .col-xs-3{padding-left:0}
	.mob-one-time{bottom:0;left: 150px;}
}
@media (max-width: 375px) {
	.mob-one-time{left:130px}
	.list-pattern ul:nth-child(1) li img:first-child{margin-bottom:30px;}
	.step-process p {font-size: 13px;}
	
	.
}
@media (max-width: 320px) {
	.list-pattern ul:nth-child(2) li:nth-child(1){padding: 10px 5px 0;}
	.list-pattern ul:nth-child(2) li:nth-child(2){padding: 0 5px 10px;}
	.mob-version ul li img, .mob-padd img {width: 110%;}
}
</style>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
