<?php
/**
 * Template Name: Selling
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
    style="background-image: url(<?php echo esc_url($hero_image['url']); ?>); background-size: cover;  height: 50vh; background-position: center center;">
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
                <h2>Selling Your Home</h2>
                <p>Fill out this quick and simple seller consultation form and we will get back to you as soon as
                    possible.&nbsp;If you have any questions, please do not hesitate to contact us by&nbsp;<a
                        href="mailto:amberwelchhomes@gmail.com">email</a>, or by phone at <a rel="noreferrer noopener"
                        href="tel:<?php echo esc_attr(get_field('phone_number', 'option')) ?>"
                        target="_blank"><?php echo esc_attr(get_field('phone_number', 'option')) ?></a>.</p>
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