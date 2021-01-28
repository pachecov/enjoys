<?php
/**
 * The template for displaying search results pages.
 *
 * @package stackstar.
 */
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'hs_do_search_loop' );
function hs_do_search_loop() {
  ?>

      
 
        <?php if ( have_posts() ) : ?>
 
            <header class="page-header">
                <h1 class="search-page-title"><?php printf( esc_html__( 'Search Results for: %s', stackstar ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </header><!-- .page-header -->
            <div class="search-page-form" id="ss-search-page-form"><?php get_search_form(); ?></div>
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="post-wrap">
                <span class="search-post-title"><?php the_title(); ?></span>
                <span class="search-post-excerpt"><?php the_excerpt(); ?></span>
                <span class="search-post-link"><a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></span>
            </div>
          
 
            <?php endwhile; ?>
 
            <?php //the_posts_navigation(); ?>
 
        <?php else : ?>
 
            <?php //get_template_part( 'template-parts/content', 'none' ); ?>
 
        <?php endif; ?>
 
        
<?php 

} ?>
<?php genesis(); ?>