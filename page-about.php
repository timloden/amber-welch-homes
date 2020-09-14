<?php
/**
 * Template Name: About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package amber-welch
 */

get_header();
$hero_image = get_field('hero_image');
?>
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
            <div class="col-12">
                <?php // WP_Query arguments
                $args = array (
                    'post_type'              => array( 'team-members' ),
                    'post_status'            => array( 'publish' ),
                    'order'                  => 'ASC',
                    'orderby'                => 'menu_order',
                );

                // The Query
                $query = new WP_Query( $args ); 
                if ( $query->have_posts() ) :
                ?>
                <div class="row justify-content-center">

                    <?php while ( $query->have_posts() ) : $query->the_post(); 
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                    $full_name = get_the_title();
                    $first_name = substr($full_name, 0, strpos($full_name, " "));
                    ?>
                    <div class="col-12 col-md-4 text-center pb-5">
                        <?php if ($featured_img_url): ?>
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($featured_img_url); ?>"
                                class="img-fluid"></a>
                        <?php endif; ?>
                        <h2 class="py-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <a class="btn btn-outline-primary" href="<?php the_permalink(); ?>">Meet
                            <?php echo $first_name; ?></a>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>

                    <?php else : ?>

                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>
</section>
<?php
get_footer();