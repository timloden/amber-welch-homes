<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package restoration-performance
 */

?>
<div class="col mb-3">
    <div class="card shadow h-100 post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <a href="<?php the_permalink(); ?>">
            <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
                alt="Card image cap">
        </a>
        <div class="card-body">
            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h5>
            <p class="card-text"><?php the_excerpt(); ?></p>
        </div>
    </div>
</div>