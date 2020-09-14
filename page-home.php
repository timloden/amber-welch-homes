<?php
/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package amber-welch
 */

get_header();

// hero
$hero_image = get_field('hero_image');
$hero_title_text = get_field('hero_title_text');
$hero_button_text = get_field('hero_button_text');
$hero_button_link = get_field('hero_button_link');

// about
$about_us_image = get_field('about_us_image');

// featured shortcode
$featured_listing_shortcode = get_field('featured_listing_shortcode');

// areas
$top_areas_button_text = get_field('top_areas_button_text');
$top_areas_button_link = get_field('top_areas_button_link');
?>
<div class="jumbotron jumbotron-fluid home-hero mb-0 position-relative"
    style="background-image: url(<?php echo esc_url($hero_image['url']); ?>); background-size: cover;">
    <div class="container h-100">
        <div class="d-flex flex-column h-100 justify-content-center">
            <div class="text-center text-md-left" data-aos="fade-right" data-aos-delay="100">
                <h1 class="text-white text-serif mb-5 hero-text-title"><?php echo esc_attr($hero_title_text); ?></h1>
                <a class="btn btn-outline-light"
                    href="<?php echo esc_url($hero_button_link); ?>"><?php echo esc_attr($hero_button_text); ?></a>
            </div>
        </div>
        <div class="text-center">
            <a style="font-size: 30px;" class="text-light" href="#home-about"><i class="las la-angle-down"></i></a>
        </div>

    </div>
</div>
<section id="home-about" class="about py-5 ">
    <div class="container py-5">
        <div class="row shadow bg-light">
            <div class="col-12 col-lg-6 py-3 py-lg-0">
                <div class="about-content p-3 p-lg-5">
                    <h2 class="mb-3 text-serif">Team Amber Welch Homes</h2>
                    <div class="about-text">
                        <?php the_field('about_text'); ?>
                    </div>
                    <a class="btn btn-primary"
                        href="<?php the_field('about_us_button_link'); ?>"><?php the_field('about_us_button_text'); ?></a>
                </div>
                <img class="img-fluid d-block d-lg-none m-auto" src="<?php echo esc_url($about_us_image['url']); ?>"
                    alt="<?php echo esc_attr($about_us_image['alt']); ?>">
            </div>
            <div class="col-12 col-lg-6 px-0 d-none d-md-block"
                style="background-image: url(<?php echo esc_url($about_us_image['url']); ?>); background-size: cover; background-position: center center;">

            </div>
        </div>
    </div>
</section>
<section id="home-featured" class="testimonials py-5 bg-grad">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 featured-listing pb-lg-5 mb-lg-5">
                <h2 class="section-title text-center text-lg-left text-serif mb-5">Featured Listing</h2>
                <?php echo do_shortcode( $featured_listing_shortcode ); ?>
            </div>
        </div>
        <?php if( have_rows('testimonial_list') ): ?>
        <div class="row testimonial-slider">
            <div class="col-12">
                <h2 class="section-title text-center text-lg-left text-serif mb-3">What our Clients are Saying</h2>
                <div class="slider-wrapper position-relative">
                    <div class="testimonial-cards my-4">

                        <?php while( have_rows('testimonial_list') ): the_row(); 
                            $title = get_sub_field('title');
                            $quote = get_sub_field('quote');
                            $name = get_sub_field('name');
                            $buyerseller = get_sub_field('buyerseller');
                            ?>
                        <div class="">
                            <div class="h-100">
                                <div class="card-body">
                                    <div class="testimonial-quote">
                                        <?php if ($title) : ?><p class="font-weight-bold"><?php echo $title; ?></p>
                                        <?php endif; ?>
                                        <p><?php echo $quote; ?></p>
                                    </div>
                                    <div class="testimonial-author">
                                        <p class="text-right font-weight-bold mb-0"><?php echo $name; ?></p>
                                        <p class="text-right font-weight-bold mb-0"><?php echo $buyerseller; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="d-flex justify-content-between w-100 position-absolute slider-arrows">
                        <a class="left-arrow"><i class="las la-angle-left"></i></a>
                        <a class="right-arrow"><i class="las la-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php if( have_rows('areas') ): ?>
<section class="top-areas bg-light py-5">
    <div class="container py-5">
        <h2 class="section-title text-center text-lg-left text-serif mb-5">Top Areas and Neighborhoods</h2>
        <div class="row">
            <?php while( have_rows('areas') ): the_row(); 
                $area_title = get_sub_field('area_title');
                $area_subtitle = get_sub_field('area_subtitle');
                $area_link = get_sub_field('area_link');
                $area_background_image = get_sub_field('area_background_image');
            ?>
            <div class="col-sm-6 col-md-4 mb-4 pb-4">
                <a class="area-link" href="<?php echo esc_url($area_link); ?>">
                    <div class="area w-100 rounded shadow"
                        style="height: 300px; background-image: url(<?php echo esc_url($area_background_image['url']); ?>); background-size: cover;">
                        <div class="d-flex flex-column h-100 justify-content-center p-3">
                            <p class="text-light mb-0 text-center font-weight-bold px-5" style="font-size: 30px;">
                                <?php echo $area_title; ?>
                            </p>
                            <?php if ($area_subtitle) : ?>
                            <p class="text-light mb-0 text-center" style="font-size: 20px;">
                                <?php echo $area_subtitle; ?>
                            </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="<?php echo esc_url($top_areas_button_link); ?>"
                    class="btn btn-primary btn-lg mt-5"><?php echo esc_attr($top_areas_button_text); ?></a>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>

<script>
var slider = tns({
    container: '.testimonial-cards',
    items: 1,
    gutter: 40,
    edgePadding: 20,
    controls: true,
    prevButton: '.left-arrow',
    nextButton: '.right-arrow',
    nav: false,
    autoplay: true,
    autoplayButtonOutput: false,
    responsive: {
        768: {
            items: 1
        },
        992: {
            items: 1
        }
    }
});
</script>