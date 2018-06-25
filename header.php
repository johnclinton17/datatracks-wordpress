<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package datatracks
 */
?>
<!DOCTYPE html>
<html class="no-skrollr" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/icon" href="<?php bloginfo('template_url');?>/images/favicon.ico">
<?php wp_head(); ?>
<script type="application/ld+json">
     { "@context" : "http://schema.org",
       "@type" : "Organization",
       "name" : "Datatracks",
       "logo" : "https://www.datatracks.com/wp-content/themes/datatracks/images/logo.jpg",
       "url" : "https://www.datatracks.com/",
       "sameAs" : [ "https://plus.google.com/+Datatracksglobal",
                    "https://www.facebook.com/DataTracks/",
                    "https://twitter.com/datatracks",
                    "https://www.linkedin.com/company/datatracks/"]
     }
    </script>
    <script type="application/ld+json">
{ "@context" : "http://schema.org",
  "@type" : "Organization",
  "url" : "https://www.datatracks.com",
  "contactPoint" : [
    { "@type" : "ContactPoint",
      "telephone" : "+1-1800-937-9280",
      "contactType" : "Customer Service"
    } ] }
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0&appId=957788730978983&autoLogAppEvents=1&limit=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<header class="nav-down">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
			 <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			    <span class="sr-only"><?php _e( 'Toggle navigation', 'datatracks' ); ?></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>-->
					<div id="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url');?>/images/logo.png"  alt="<?php bloginfo( 'name' ); ?>"/></a>
					</div><!-- end of #logo -->
	<div class="menu-right">
 <div class="search-sec">
 <div class="containersearch"> 
	<form method="get" class="searchbox" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="searchbox-input" placeholder="<?php _e( 'Search', 'nkexpo' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" onkeyup="buttonUp();" autocomplete="off">
		<input type="submit" class="searchbox-submit" name="submit" id="searchsubmit" value="GO"> 
		<span class="searchbox-icon "> <!-- <i class="fa fa-search" aria-hidden="true"></i>--> </span>	   
	</form> 
</div></div>
			<div style="float:left"><?php datatracks_header_menu(); ?></div>
	</div>	
		</div></div>
  
	</nav><!-- .site-navigation -->
 <?php if(is_single()){ ?>
 <div class="progress_scroll">
  <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div> </div> <?php }?> 
</header>
      



	<div id="myModal" class="modal menupopup fade" role="dialog">
		<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="popupheader">
			   <div class="popuplogo"><a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url');?>/images/logo.png"  alt="<?php bloginfo( 'name' ); ?>"/></a></div>

				 <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal"></button>
				  </div>
			</div>

			<div class="popupleft">				
			  <h3 id="menutitle"></h3>
			</div>

			<div class="popupright">
			 <div class="modal-body" id="modalbody">
				    
			  </div>
			</div>

		</div>

		</div>
	</div> 

	<style type="text/css">
		
	</style>   


        <div id="" class="site-content">
            <div class=" main-content-area">
            	<!-- <div id="skrollr-body"> -->