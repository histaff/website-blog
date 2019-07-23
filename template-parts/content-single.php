<?php
/**
 * Template part for displaying singe post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HiStaff
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php hs_post_thumbnail(); ?>

    <div class="entry-meta">
        <span><?php hs_the_category(); ?></span>
    </div><!-- .entry-meta -->

    <div class="entry-header">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
    </div><!-- .entry-header -->

    <div class="entry-content">
		<?php echo wp_trim_words( get_the_content(), 20 ); ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
