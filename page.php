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
?>

<div class="container py-3 py-lg-5">
    <h1 class="py-3 mb-3 title-border text-center"><?php the_title(); ?></h1>
    <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
</div><!-- #primary -->

<?php
get_footer();