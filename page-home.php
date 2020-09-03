<?php
/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package amber-welch
 */

get_header();

$discount_amount = get_field('hero_discount_amount');
$discount_label = get_field('hero_discount_label');
$discount_subtitle = get_field('hero_discount_subtitle');
?>
<div class="jumbotron jumbotron-fluid home-hero mb-0 position-relative"
    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/home-hero-bg.jpg); background-size: cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 hero-text mb-3 text-center text-lg-left">
                <h1 class="text-white">Got bugs?<br><span class="text-success">Simple.</span> Call us!</h1>
                <p class="h2 text-white pt-3"><?php echo get_field('phone_number', 'option'); ?></p>
                <p class="lead text-white">Protect your family and investment</p>
            </div>
            <div class="col-12 col-lg-6">
                <div class="mx-4 px-2 py-3 text-center text-primary limited-time-container position-relative bg-orange"
                    style="z-index: 9;" data-aos="fade-up">
                    <p class="mb-0 text-white"><?php echo $discount_subtitle; ?></p>
                    <p class="mb-0 h4 text-white"><u><?php echo $discount_amount; ?></u> <?php echo $discount_label; ?>
                    </p>
                </div>
                <div class="hero-form shadow-sm rounded bg-white p-3 border position-relative" style="z-index: 999;">
                    <p class="mb-2 text-center hero-form-title mb-0 d-none">Get a free estimate today!</p>
                    <?php gravity_form( 1, false, false, false, '', true, 12 ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="mission py-5 ">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-6 order-1 order-lg-0 mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="d-flex flex-column">
                            <div class="card mb-lg-4 shadow border-0" data-aos="fade-down" data-aos-delay="100">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission-1.jpg"
                                    class="card-img-top">
                            </div>
                            <div class="card shadow border-0 d-none d-lg-block" data-aos="fade-down" d
                                ata-aos-delay="200">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission-2.jpg"
                                    class="card-img-top">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="d-flex flex-column mt-5">
                            <div class="card mb-4 mt-5 shadow border-0 d-none d-lg-block" data-aos="fade-down"
                                data-aos-delay="300">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission-3.jpg"
                                    class="card-img-top">
                            </div>
                            <div class="card shadow border-0 d-none d-lg-block" data-aos="fade-down"
                                data-aos-delay="400">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission-4.jpg"
                                    class="card-img-top">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 order-0 order-lg-1">
                <div class="pl-0 pl-lg-5 position-sticky" style="top: 300px;">
                    <h2 class="mb-4 pb-4 border-bottom">Our Mission is SIMPLE</h2>
                    <p>We have developed the philosophy that no family should have to deal with underlying pest issues
                        within the comfort of their home. Our overriding goal is delivering excellent customer service
                        and
                        efficient pest treatments to provide a pest free home and yard.</p>
                    <p>Our mission is to create bonds
                        within our community, create a positive workplace for our staff and provide pest solutions for
                        families so they can focus on what really matters… their family.</p>
                    <p class="h5">We kill bugs! It&apos;s that SIMPLE.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services bg-light-blue py-5">
    <div class="container py-5">
        <div class="row pb-5">
            <div class="col-12">
                <h2 class="text-center">Our Services</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
			$args = array(  
				'post_type' => 'services',
				'post_status' => 'publish',
				'posts_per_page' => -1, 
				'orderby' => 'title', 
				'order' => 'ASC',
				'cat' => 'home',
			);
		
			$loop = new WP_Query( $args ); 
				
			while ( $loop->have_posts() ) : $loop->the_post(); 
				$featured_img = get_the_post_thumbnail_url( $post->ID );
				$title = get_the_title();
				$text = get_the_excerpt(); 
				$link = get_the_permalink();

			?>

            <div class="col-12 col-lg-4 pb-4">
                <div class="card shadow-sm h-100">
                    <?php if ($featured_img) : ?>
                    <img src="<?php echo esc_url($featured_img); ?>" class="card-img-top" alt="">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?php echo esc_url($link); ?>"><?php echo $title ?></a></h5>
                        <p class="card-text"><?php echo $text ?></p>
                        <a href="<?php echo esc_url($link); ?>" class="">Learn more about
                            <?php echo $title ?></a>
                    </div>
                </div>
            </div>

            <?php
			endwhile;
			wp_reset_postdata(); 
			?>

        </div>
        <div class="row pt-5">
            <div class="col-12 text-center">
                <a href="/free-estimate" class="btn btn-orange font-weight-bold btn-lg">Get your FREE ESTIMATE
                    today!</a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();