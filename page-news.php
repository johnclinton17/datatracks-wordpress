<?php
/**
 * The template for displaying all pages.
 * Template Name: news Page
 * This is the template that displays all pages by default.
 */

get_header(); ?>




<!--section product title -->
<section class="pagecontent iso-pad-80">
    <div class="container">
      <div class="wrapper">
        <?php
          // WP_Query arguments
          $args = array (
            'post_type' => 'news',
            'order'     => 'ASC',
          );
          // The Query
          $query = new WP_Query( $args );
          // The Loop
          if ( $query->have_posts() ) { while ( $query->have_posts() ) {$query->the_post(); $custom=get_post_custom($post->ID); ?>

            <div class="col-md-12">
              <a href="<?php echo get_permalink(); ?>">
                <div class="col-md-4"><?php the_post_thumbnail(); ?>  </div>
                <div class="col-md-8"><?php the_excerpt(); ?></div>
              </a>
            </div>  
        <?php
          }
          } else {
            // no posts found
            echo "<h1>boom no content news page </h1>";
          }
          // Restore original Post Data
          wp_reset_postdata();
          ?>      
      </div><!--wrapper-->
    </div><!--conatainer-->    
</section>



	</div>
</div>

<?php get_footer(); ?>
