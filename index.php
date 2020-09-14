<?php
/**
 * The main template file 
 *	
 *	Resources page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package amber-welch
 */

get_header();
$hero_image = get_field('blog_page_hero_image', 'option');
?>

<div class="jumbotron jumbotron-fluid home-hero mb-0 position-relative"
    style="background-image: url(<?php echo esc_url($hero_image['url']); ?>); background-size: cover;  height: 50vh; background-position: center center;">
    <div class="container h-100 pt-5">
        <div class="d-flex flex-column h-100 justify-content-center">
            <div class="text-center text-md-left" data-aos="fade-right" data-aos-delay="300">
                <h1 class="text-white text-serif my-5 hero-text-title">Blog</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
				'posts_per_page' => 9, // How many items to display
				'paged' => $paged
			);
		
				$loop = new WP_Query( $args );
			
				if ( $loop->have_posts() ) {
					echo '<div class="row row-cols-1 row-cols-md-3 py-5">';
					
					while ( $loop->have_posts() ) : $loop->the_post();
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;
					
					echo '</div>';
					
					next_posts_link( __( 'Older Entries', 'textdomain' ), $the_query->max_num_pages );
    				previous_posts_link( __( 'Newer Entries', 'textdomain' ) );
				}
				wp_reset_postdata();
			?>
        </main><!-- #main -->
    </div><!-- #primary -->
</div>


<?php
get_footer();