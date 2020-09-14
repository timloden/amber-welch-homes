<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package amber-welch
 */

get_header();
$post_date = get_the_date( 'F j, Y' );
$categories = get_the_category();
?>

<div id="primary" class="content-area article-single">
    <main id="main" class="site-main">
        <div class="jumbotron jumbotron-fluid home-hero mb-0 position-relative"
            style="background-image: url(<?php the_post_thumbnail_url('full'); ?>); background-size: cover;  height: 50vh; background-position: center center;">
            <div class="container h-100 pt-5">
                <div class="d-flex flex-column h-100 justify-content-center">
                    <div class="text-center text-md-left" data-aos="fade-right" data-aos-delay="300">
                        <h1 style="font-size: 4em;" class="text-white mt-5"><?php the_title(); ?></h1>
                        <p class="lead text-light mb-5">Posted on: <?php echo $post_date ?> in
                            <?php echo esc_html( $categories[0]->name ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="shadow rounded bg-white p-3 border position-relative mb-5" style="margin-top: -20px;">
                <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-single', get_post_type() );

		endwhile; // End of the loop.
		?>
            </div>
        </div>



    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();