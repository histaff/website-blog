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
    <div class="entry-content">
		<?php the_content(); ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
