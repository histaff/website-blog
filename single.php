<?php get_header(); ?>

    <div class="site-header featured-image">
		<?php hs_post_thumbnail(); ?>

        <div class="container">
            <div class="entry-header">
                <div class="entry-meta">
                    <span><?php hs_the_category(); ?></span>
                </div><!-- .entry-meta -->

				<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
            </div><!-- .entry-header -->
        </div>
    </div>

    <div class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-single">
				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
                        <header>
                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                        </header>
					<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'single' );

					endwhile;

				endif;
				?>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>

<?php get_footer(); ?>