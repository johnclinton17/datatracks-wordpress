<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package datatracks
 */
?>
</div>
<!-- close .row -->
</div>
<!-- close .container -->
</div>
<!-- close .site-content -->

<div id="footer-area" >
<div class="container footer-inner">
 <?php //get_sidebar( 'footer' ); ?>
</div>
<footer id="colophon" class="site-footer" role="contentinfo">
 <div class="site-info container">
  <nav role="navigation" class="footer-services">
   <h4>Products &amp; Platforms</h4>
   <?php wp_nav_menu(array('menu'=>'Products_footer'));?>
  </nav>
  <nav role="navigation" class="footer-services">
   <h4>Services &amp; Technology</h4>
   <?php wp_nav_menu(array('menu'=>'Services_footer'));?>
  </nav>
  <nav role="navigation" class="footer-services">
   <h4>About</h4>
   <?php wp_nav_menu(array('menu'=>'About_footer'));?>
  </nav>
  <nav role="navigation" class="footer-services">
   <h4>Insights</h4>
   <?php wp_nav_menu(array('menu'=>'Insights_footer'));?>
   <h4>
   <nav>
    <?php wp_nav_menu(array('menu'=>'footer_contact'));?></nav>
   </h4>
  </nav>
  <div class="col-sm-3 detail">
   <h4>Let’s get started</h4>
   <span class="call">Call 1.800.937.9280</span><br>
   <span class="call">Email <a href="mailto:inquiry@datatracks.com" class="mail">inquiry@datatracks.com</a></span>
   <div class="dropdown translate">
   <div class="dropdown-toggle site_btn"  data-toggle="dropdown"> <img src="<?php echo get_template_directory_uri(); ?>/images/flag-us.png" width="16" height="10" alt=""/> United States <span class="caret"></span></div>
   <ul class="dropdown-menu">
   <li><a href="https://www.datatracks.eu" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/images/flag-eur.jpg" width="16" height="10" alt=""/> Europe</a></li>
   <li><a href="https://www.datatracks.in" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/images/flag-ind.jpg" width="16" height="10" alt=""/> India</a></li>
   <li><a href="https://www.datatracks.ie" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/images/flag-ire.jpg" width="16" height="10" alt=""/> Ireland</a></li>
   <li><a href="https://www.datatracks.nl" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/images/flag-neth.jpg" width="16" height="10" alt=""/> Netherlands</a></li>
   <li><a href="https://www.datatracks.com.sg" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/images/flag-sing.jpg" width="16" height="10" alt=""/> Singapore</a></li>
   <li><a href="https://www.datatracks.co.za" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/images/flag-sa.jpg" width="16" height="10" alt=""/> South Africa</a></li>
   <li><a href="https://www.datatracks.com" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/images/flag-us.png" width="16" height="10" alt=""/> United States</a></li>
   <li><a href="https://www.datatracks.co.uk" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/images/flag-uk.jpg" width="16" height="10" alt=""/> United Kingdom</a></li>
   </ul>
  </div>
   <div class="subscribe-sec">
   <h4>Subscribe to our newsletter</h4>
   <div class="subscribemain">
   <?php echo do_shortcode('[contact-form-7 id="564" title="Newsletter Subscribe"]');?>
   <!--  <form method="post" action="<?php bloginfo('url');?>" onsubmit="return newsletter_check(this)">
   <input  type="email" name="ne" placeholder="What's your email" required>
    <input type="submit">
  </form> -->
  </div></div>

 </div>
 </div>
 <!-- .site-info -->

 <div class="copyright container">
<div class="col-xs-12 col-md-4">
<div class="footer-logo">
<div class="iso"></div>
<div class="tuv"></div>
<div class="tuv1"></div>
<div class="xbrl"></div>
   </div>
   </div>
   <div class="col-xs-12 col-md-8"><div class="socialicon"><a href="https://plus.google.com/+Datatracksglobal" target="_blank"><i class="fa fa-google"></i></a> <a href="https://www.facebook.com/DataTracks/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/datatracks" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.linkedin.com/company/datatracks/" target="_blank"><i class="fa fa-linkedin"></i></a></div>
<div class="copyrightmenu">
   <ul>
     <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>governance/">Governance</a></li>
     <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy/">Privacy Policy</a></li>
     <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-of-use/">Terms of Use</a></li>
    </ul>
   Copyright © DataTracks 2018. All rights reserved.</div>
 </div>
 <div class="scroll-to-top"><i class="fa fa-angle-up"></i></div>
 <!-- .scroll-to-top --> 

</footer>
<!-- #colophon -->
</div>
</div>
<!-- </div>skkoler body -->
<!-- #page --> 
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->

 
<!-- Header Popup Menu -->
 <script type="text/javascript">
  jQuery('.close').click(function(){  
      jQuery('#myModal').removeClass('fademenuLeft');
      jQuery('body').removeClass('menulogo');
      
  })

// Product Menu   
jQuery( document ).ready(function() {
  jQuery('#menu-item-141').click(function(){
    var submenu = jQuery('#menu-item-141 ul').html();
    //var productmenu = jQuery('#productmenu').html();
    var menutitle = 'Products & Platforms';       
    jQuery("#modalbody").html('<ul>'+submenu+'</ul>');
    jQuery("#menutitle").html(menutitle);
    jQuery('#myModal').modal('show');   
  })
})

// Services Menu  
jQuery( document ).ready(function() {
  jQuery('#menu-item-157').click(function(){
    var submenu = jQuery('#menu-item-157 ul').html();
    var menutitle = 'Services & Technology';      
    jQuery("#modalbody").html('<ul>'+submenu+'</ul>');
    jQuery("#menutitle").html(menutitle);
     jQuery('#myModal').modal('show');
  })
})

// Aboutus Menu   
jQuery( document ).ready(function() {
  jQuery('#menu-item-399').click(function(){
    var submenu = jQuery('#menu-item-399 ul').html();
    var menutitle = 'About Us';       
    jQuery("#modalbody").html('<ul>'+submenu+'</ul>');
    jQuery("#menutitle").html(menutitle);
    jQuery('#myModal').modal('show');
  })
})


// Insights Menu  
jQuery( document ).ready(function() {
  jQuery('#menu-item-398').click(function(){
    var submenu = jQuery('#menu-item-398 ul').html();
    var menutitle = 'Insights';       
    jQuery("#modalbody").html('<ul>'+submenu+'</ul>');
    jQuery("#menutitle").html(menutitle);
    jQuery('#myModal').modal('show');
  })
})
 </script> 
 <!-- Header Popup Menu End-->

<script>
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script>
<script>

new WOW().init();
// Hide Header on on scroll down
<?php if(!is_single()){ ?>
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = jQuery('header').outerHeight();

jQuery(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = jQuery(this).scrollTop();
    
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    if (st > lastScrollTop && st > navbarHeight){
        jQuery('header').removeClass('nav-down').addClass('nav-up');
    } else {
        if(st + jQuery(window).height() < jQuery(document).height()) {
            jQuery('header').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}
<?php } ?>
</script>

<script src="<?php bloginfo('template_url'); ?>/inc/js/flexslider.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/inc/css/flexslider.css">
<script>
  jQuery(document).ready(function(){
            var submitIcon = jQuery('.searchbox-icon');
            var inputBox = jQuery('.searchbox-input');
            var searchBox = jQuery('.searchbox');
            var isOpen = false;
            submitIcon.click(function(){
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
																				jQuery('.searchbox-icon').addClass('searchbox-close');																				
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
																					jQuery('.searchbox-icon').removeClass('searchbox-close');											
                    inputBox.focusout();
                    isOpen = false;
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            jQuery(document).mouseup(function(){
                    if(isOpen == true){
                        jQuery('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
        });
            function buttonUp(){
                var inputVal = jQuery('.searchbox-input').val();
                inputVal = jQuery.trim(inputVal).length;
                if( inputVal !== 0){
                    jQuery('.searchbox-icon').css('display','none');
                } else {
                    jQuery('.searchbox-input').val('');
                    jQuery('.searchbox-icon').css('display','block');
                }
            }
	
</script>
<?php wp_footer(); ?>
<script type="5fc2f2404aed2bbfd5a68fbf-">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32988092-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="5fc2f2404aed2bbfd5a68fbf-">
    (function(){
            var t,i,e,n=window,o=document,a=arguments,s="script",r=["config","track","identify","visit","push","call","trackForm","trackClick"],c=function(){var t,i=this;for(i._e=[],t=0;r.length>t;t++)(function(t){i[t]=function(){return i._e.push([t].concat(Array.prototype.slice.call(arguments,0))),i}})(r[t])};for(n._w=n._w||{},t=0;a.length>t;t++)n._w[a[t]]=n[a[t]]=n[a[t]]||new c;i=o.createElement(s),i.async=1,i.src="//static.woopra.com/js/t/5.js",e=o.getElementsByTagName(s)[0],e.parentNode.insertBefore(i,e)
    })("woopra");
    
    woopra.config({
        domain: 'datatracks.com'
    });
    woopra.track();
    </script>

</body></html>