<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package amber-welch
 */

get_header();
$uri  = $_SERVER['REQUEST_URI'];
$uri  = explode( '?', $uri );
$uri  = array_shift( $uri );
$uri  = trim( $uri, '/' );

$hero_image = get_field('hero_image');

if ( $uri == 'properties' ) {
    $properties_hero = get_field('properties_hero_image', 'option');
    $image = $properties_hero['url'];
} elseif ( !$hero_image ) {
	$default_hero = get_field('default_page_hero_image', 'option');
	$image = $default_hero['url'];
} else {
    $image = $hero_image['url'];
}
?>
<div class="jumbotron jumbotron-fluid home-hero mb-0 position-relative"
    style="background-image: url(<?php echo esc_url($image); ?>); background-size: cover;  height: 50vh; background-position: center center;">
    <div class="container h-100 pt-5">
        <div class="d-flex flex-column h-100 justify-content-center">
            <div class="text-center text-md-left" data-aos="fade-right" data-aos-delay="300">
                <?php 
				// is listing page
				if (strpos($uri, 'listing') !== false) : ?>
                <p class="text-white section-title text-serif mb-1" style="font-size: 2em;">Your Future Home</p>
                <h1 class="text-white mb-5 hero-text-title listing-title"><?php the_title(); ?></h1>
                <?php else : ?>
                <h1 class="text-white text-serif my-5 hero-text-title"><?php the_title(); ?></h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="container py-3 py-lg-5">
    <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
</div><!-- #primary -->

<?php
get_footer();