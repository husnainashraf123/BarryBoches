<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (is_sticky() && is_home() && !is_paged()) : ?>
        <div class="featured-post">
            <?php _e('Featured post', 'spk_lawyer'); ?>
        </div>
    <?php endif; ?>
    <header class="entry-header">
        <?php if (is_single()) : ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php else : ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php endif; // is_single()  ?>
    </header><!-- .entry-header -->

    <?php if (is_search()) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    <?php else : ?>
        <div class="entry-content">
            <?php the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'spk_lawyer')); ?>
            <?php wp_link_pages(array('before' => '<div class="page-links">' . __('Pages:', 'spk_lawyer'), 'after' => '</div>')); ?>
        </div><!-- .entry-content -->
    <?php endif; ?>
</article><!-- #post -->
