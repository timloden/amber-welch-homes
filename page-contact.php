<?php
/**
 * Template Name: Contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package amber-welch
 */

get_header();
$hero_image = get_field('hero_image');
?>
<style>
.address p {
    margin-bottom: 0;
}
</style>
<div class="jumbotron jumbotron-fluid home-hero mb-0 position-relative"
    style="background-image: url(<?php echo esc_url($hero_image['url']); ?>); background-size: cover;  height: 50vh;">
    <div class="container h-100 pt-5">
        <div class="d-flex flex-column h-100 justify-content-center">
            <div class="text-center text-md-left" data-aos="fade-right" data-aos-delay="300">
                <h1 class="text-white text-serif my-5 hero-text-title"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>
<section class="py-3 py-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 pb-4">
                <h2>Amber Welch Homes</h2>
                <p>Keller Williams Realty</p>
                <div class="address mb-3"><?php echo esc_attr(the_field('address', 'option')) ?></div>
                <p class="h5"><strong><a
                            href="tel:<?php echo esc_attr(get_field('phone_number', 'option')) ?>"><?php echo esc_attr(get_field('phone_number', 'option')) ?></a></strong>
                </p>
                <p class="h5"><strong><a
                            href="mailto:<?php echo esc_attr(get_field('footer_email', 'option')) ?>"><?php echo esc_attr(get_field('footer_email', 'option')) ?></a></strong>
                </p>
            </div>
            <div class="col-12 col-lg-8">
                <div class="shadow rounded bg-white p-3 border position-relative">
                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', 'page' );

                    endwhile; // End of the loop.
                    ?>
                </div>

            </div>
        </div>
    </div>
</section>
<?php
get_footer();