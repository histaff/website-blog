<?php get_header(); ?>

    <div class="page-header"><h2><?php bloginfo( 'name' ); ?></h2>
        <p><?php bloginfo( 'description' ); ?></p>
    </div>

    <div class="container">
        <div class="cats">
            <span>Filter By Category :</span>
            <ul><?php wp_list_categories('hide_empty=0&title_li='); ?></ul>
        </div>

        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="row">
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
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

					endif;
					?>
                </div>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>

<?php get_footer(); ?>