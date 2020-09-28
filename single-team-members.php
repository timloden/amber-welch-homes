<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package amber-welch
 */

get_header();
$hero_image = get_field('hero_image');

if ( !$hero_image ) {
	$default_hero = get_field('default_page_hero_image', 'option');
	$image = $default_hero['url'];
} else {
	$image = $hero_image['url'];
}
$phone_number = get_field('phone_number');
$email_address = get_field('email_address');
$dre = get_field('dre');
$instagram_link = get_field('instagram_link');
$facebook_link = get_field('facebook_link');
$linkedin_link = get_field('linkedin_link');
$youtube_link = get_field('youtube_link');
$headshot_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
?>

<div class="jumbotron jumbotron-fluid home-hero mb-0 position-relative"
    style="background-image: url(<?php echo esc_url($image); ?>); background-size: cover;  height: 50vh;">
    <div class="container h-100 pt-5">
        <div class="d-flex flex-column h-100 justify-content-center">
            <div class="text-center text-md-left" data-aos="fade-right" data-aos-delay="300">
                <h1 class="text-white text-serif my-5 hero-text-title">Our Team</h1>
            </div>
        </div>
    </div>
</div>
<section class="py-5">
    <div class="container">
        <div class="row ">
            <div class="col-12 col-md-5 text-center">
                <img src="<?php echo esc_url($headshot_img_url); ?>" class="img-fluid">
            </div>
            <div class="col-12 col-md-7">
                <h2 class="h1"><?php the_title(); ?></h2>
                <div class="team-bio">
                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content-single', get_post_type() );

                    endwhile; // End of the loop.
                    ?>
                </div>
                <div class="d-flex mb-3">
                    <div class="col px-0 social-links">
                        <?php if ($instagram_link): ?><a href="<?php echo esc_url($instagram_link); ?>"
                            target="_blank"><i class="lab la-instagram"
                                style="font-size: 2.5em;"></i></a><?php endif; ?>
                        <?php if ($facebook_link): ?><a href="<?php echo esc_url($facebook_link); ?>" target="_blank"><i
                                class="lab la-facebook-square" style="font-size: 2.5em;"></i></a><?php endif; ?>
                        <?php if ($linkedin_link): ?><a href="<?php echo esc_url($linkedin_link); ?>" target="_blank"><i
                                class="lab la-linkedin" style="font-size: 2.5em;"></i></a><?php endif; ?>
                        <?php if ($youtube_link): ?><a href="<?php echo esc_url($youtube_link); ?>" target="_blank"><i
                                class="lab la-youtube" style="font-size: 2.5em;"></i></a><?php endif; ?>
                    </div>
                </div>
                <?php if ($phone_number): ?><p class="mb-2 font-weight-bold" style="font-size: 1.25em;">
                    <a href="tel:<?php echo esc_attr($phone_number); ?>"><?php echo esc_attr($phone_number); ?></a>
                </p><?php endif; ?>
                <?php if ($email_address): ?><p class="font-weight-bold" style="font-size: 1.25em;">
                    <a href="mailto:<?php echo esc_attr($email_address); ?>"><?php echo esc_attr($email_address); ?></a>
                </p><?php endif; ?>
                <?php if ($dre): ?><p>DRE #<?php echo esc_attr($dre); ?></p><?php endif; ?>
            </div>
        </div>
    </div>
</section>




<?php
get_sidebar();
get_footer();