<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package nkexpo
 */

get_header(); ?>
<div class="main-content-wrapper">
	<section id="parallax1" class="homeSlide parallex"  >
		<div class="bcg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/search-bg.jpg');height:80vh" >		
			<div class="overlay-black" data-center="background: rgba(0,0,0,0);" data-top-bottom="background: rgba(0,0,0,1);" data-anchor-target="#parallax1">
				<div class="hsContainer plaxEl"  data-center="opacity:1;" data-top-bottom="opacity:0.5;" data-anchor-target="#parallax1">
					<div class="hsContent ">
						<div class="col-sm-12 col-sm-12 innerbannertext"  data-center="top:40%;" data-top-bottom="top:25%;" data-anchor-target="#parallax1"><h1>Results</h1><h2>Search</h2> </div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<div class="search_content" style="position: relative;">	
<div class="container">
	<div class="row">
		<section id="primary" class="col-sm-8">
			<main id="" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<!--<div class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results', 'datatracks' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</div>
-->
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>

				<?php datatracks_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</section><!-- #primary -->
	</div>
</div>
</div>
<script>
    jQuery(document).ready(function(){
    if (jQuery(window).width() < 801) {
         
      }
     else {
        jQuery(document).ready(function() {
        jQuery('#parallax1').css('height', jQuery(window).height());
        jQuery('.main-content-wrapper').stickyStack();
        });
      }
    });

jQuery('.innerbannertext').addClass('animated fadeInUp');
</script>
<script src="<?php echo get_template_directory_uri(); ?>/inc/js/skrollr-page.js"></script>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
