<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amber-welch
 */

$footer_logo = get_field('footer_logo', 'option');
$footer_email = get_field('footer_email', 'option');

?>

</div><!-- #content -->

<footer class="site-footer bg-primary py-5">
    <div class="container py-5 text-center">
        <div class="row">
            <div class="col-12 text-center text-light">
                <img class="img-fluid" src="<?php echo esc_url($footer_logo['url']); ?>"
                    alt="<?php echo esc_attr($footer_logo['alt']); ?>">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-primary', 'container' => 'div', 'container_id' => 'footer-header-menu', 'container_class' => 'px-0 px-lg-4', 'menu_class' => 'nav justify-content-center py-5', 'add_li_class'  => 'nav-item', 'depth' => 1 ) ); ?>
                <div class="footer-address mb-3" style="font-size: 18px;">
                    <?php echo esc_attr(the_field('address', 'option')) ?></div>
                <p style="font-size: 18px;"><?php echo esc_attr(get_field('phone_number', 'option')) ?>
                    <?php if ($footer_email) : ?> <span class="px-2">|</span> <a
                        href="mailto:<?php echo esc_attr($footer_email) ?>"
                        class="text-light"><?php echo esc_attr($footer_email) ?></a><?php endif; ?>
                </p>
                <p class="mt-5 mb-4" style="font-size: 12px;">Based on information from California Regional Multiple
                    Listing Service, Inc.
                    as of
                    2020-08-09T17:26:11.36. This information is for your personal, non-commercial use and may not be
                    used for any purpose other than to identify prospective properties you may be interested in
                    purchasing. Display of MLS data is deemed reliable but is not guaranteed accurate by the MLS or
                    Amber Welch Homes. Licensed in the State of California, USA.</p>
                <p>Amber Welch, CA DRE# 02052998 | All rights reserved </p>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<?php the_field('footer_embed', 'option'); ?>
</body>

</html>