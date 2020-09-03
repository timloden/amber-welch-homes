<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amber-welch
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <?php the_field('header_embed', 'option'); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php 
    wp_head(); 
    $logo = get_field('logo', 'option');
?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <?php if (!is_front_page()) :?>
        <header class="header sticky-top pb-2 bg-white shadow-sm">
            <div class="container pt-2">
                <nav class="d-flex align-items-center">
                    <?php if (get_field('logo', 'option')) : 
                    $logo = get_field('logo', 'option');
                    ?>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>"><img
                            src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>"
                            style="width: 200px;"></a>
                    <?php else : ?>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>">Simple Pest Management</a>
                    <?php endif; ?>

                    <div class="d-flex justify-content-end justify-content-lg-between align-items-center w-100">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-primary', 'container' => '', 'menu_class' => 'nav d-none d-lg-flex', 'add_li_class'  => 'nav-item', 'depth' => 2, 'walker' => new WP_Bootstrap_Navwalker() ) ); ?>

                        <a class="btn btn-primary btn-orange btn-phone-number d-none d-lg-inline-block"
                            href="tel:<?php echo get_field('phone_number', 'option'); ?>"><?php echo get_field('phone_number', 'option'); ?></a>

                        <button class="d-inline-block d-lg-none btn ml-3 p-1" type="button" data-toggle="collapse"
                            data-target="#mobile-header-menu" aria-controls="mobile-header-menu">
                            <i class="las la-bars"></i>
                        </button>
                    </div>

                </nav>
                <!-- mobile menu -->
                <div class="d-flex d-lg-none">
                    <div class="col px-0">
                        <?php wp_nav_menu( array( 'theme_location' => 'mobile-primary', 'container' => 'div','container_id' => 'mobile-header-menu', 'container_class' => 'collapse', 'menu_class' => 'nav flex-column', 'add_li_class'  => 'nav-item', 'depth' => 2 ) ); ?>
                    </div>
                    <!-- end mobile menu -->
                </div>
                </>
        </header>
        <?php endif; ?>
        <div id=" content" class="site-content">