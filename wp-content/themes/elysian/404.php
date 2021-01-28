<?php
/**
 * @author  Brad Dalton
 * @link    https://wp.me/p1lTu0-hfq
 */

remove_action( 'genesis_loop', 'genesis_do_loop' );

add_action( 'genesis_loop', 'genesis_404' );
function genesis_404() {
	genesis_markup( array(
		'open' => '<article class="entry">',
		'context' => 'entry-404',
    ) );
    ?>
     <!-- <section class="section--hero">
            <div class="section--hero__about" style="background-image: url('<?php echo get_the_post_thumbnail_url()?>');
            background-position:center;">
                <div class="container">
                    <h2>404</h2>
                </div>
            </div> 
        </section> -->
    <?php
		printf( '<div class="container"><h1 class="entry-title">%s</h1>', apply_filters( 'genesis_404_entry_title', __( '404 Not Found', 'genesis' ) ) );
		echo '<div class="entry-content">';
			if ( genesis_html5() ) :
				echo apply_filters( 'genesis_404_entry_content', '<p>' . sprintf( __( 'The page you were looking for could not be found; it is possible you have typed the address incorrectly, but it has most probably been removed due to the recent website reorganisation.', 'genesis' ), trailingslashit( home_url('genesis-tutorials-child-theme') ), trailingslashit( home_url('contact') )  ) . '</p>' );
				get_search_form();
			else :
	?>
			<p><?php printf( __( 'The page you are looking for no longer exists. Perhaps you can return back to the site\'s <a href="%s">homepage</a> and see if you can find what you are looking for. Or, you can try finding it with the information below.', 'genesis' ), trailingslashit( home_url() ) ); ?></p>
	<?php
			endif;
		echo '</div></div>';
	genesis_markup( array(
		'close' => '</article>',
		'context' => 'entry-404',
	) );
}

genesis();