<?php

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Adds helper functions.
require_once get_stylesheet_directory() . '/lib/helper-functions.php';

// Adds image upload and color select to Customizer.
require_once get_stylesheet_directory() . '/lib/customize.php';

// Includes Customizer CSS.
require_once get_stylesheet_directory() . '/lib/output.php';

// Includes Child Theme Functions CSS.
require_once get_stylesheet_directory() . '/lib/child-functions.php';

// Includes Genesis Hooks
require_once get_stylesheet_directory() . '/lib/genesis-hooks.php';

// Adds WooCommerce support.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php';

// Adds the required WooCommerce styles and Customizer CSS.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php';

// Adds the Genesis Connect WooCommerce notice.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php';

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
add_action( 'genesis_before_footer', 'pre_footer_section' );
function pre_footer_section(){
    if( have_rows('section_flags','option') ): ?>
        <?php while( have_rows('section_flags','option') ): the_row(); 
          // Get sub field values.
          $flag_short_title = get_sub_field('flag_short_title') ? '<h6>'.get_sub_field('flag_short_title').'</h6>' : '';
          $flag_title = get_sub_field('flag_title') ? '<h2>'.get_sub_field('flag_title').'</h2>' : '';
          $flag_form_id = get_sub_field('flag_form_id') ? get_sub_field('flag_form_id') : '';
        ?>
        <?php endwhile; ?>
      <?php
    endif;
    
    ?>
    <section class="section--guide">
        <div class="container">
        <div class="section--guide__box" >
            <div class="section--guide__box__text">
            <?php echo $flag_short_title?>
            <?php echo $flag_title?>
            </div>
            <?php echo do_shortcode($flag_form_id)?>
        </div>
        </div>
    </section>
<?php
}

add_action( 'genesis_after_header', 'genearal_hero_section' );
function genearal_hero_section(){
    if(is_page_template('page-templates/template-about.php') || 
    is_page_template('page-templates/template-industry.php') ||
    is_page_template('page-templates/template-digital.php') ): 
        $title_general_hero = get_field('title_general_hero') ? get_field('title_general_hero') : '';
        $link_general_hero = get_field('link_general_hero') ? get_field('link_general_hero') : '';
        $bottom_left = get_field('bottom_left') ? get_field('bottom_left') : '';
        $bottom_center = get_field('bottom_center') ? get_field('bottom_center') : '';
        $bottom_right = get_field('bottom_right') ? get_field('bottom_right') : '';

?>
      <!-- Hero -->
      <section class="section--hero">
            <div class="section--hero__about" style="background-image: url('<?php echo get_the_post_thumbnail_url()?>');
            background-position:center;">
                <div class="container">
                <div class="section--hero__about__content"  data-aos="fade-up" data-aos-once="true">
                    <h2><?php echo $title_general_hero ?></h2>
                    <?php 
                    if( $link_general_hero ): 
                        $link_url = $link_general_hero['url'];
                        $link_title = $link_general_hero['title'];
                        $link_target = $link_general_hero['target'] ? $link_general_hero['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn--orange"><?php echo esc_html( $link_title ); ?> <i class="fas fa-chevron-right"></i></a>
                    <?php endif; ?>
                </div>
                </div>
            </div> 
            <?php if($bottom_left || $bottom_center || $bottom_right): ?>
            <div class="section--hero__bottom">
                <div class="row">
                    <div class="col-md-4 bottom__txt">
                        <h5><?php echo $bottom_left ?></h5>                          
                    </div>
                    <div class="col-md-4 bottom__txt">
                        <h5><?php echo $bottom_center ?></h5>                         
                    </div>
                    <div class="col-md-4 bottom__txt">
                        <h5><?php echo $bottom_right ?></h5>                           
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </section>
    <?php
    endif;
}


add_shortcode( 'how_it_works', 'how_it_works_function' );
function how_it_works_function() {
	ob_start();
	?> 

    <?php if( have_rows('section_how_it_works', 'option') ): ?>
        <?php while( have_rows('section_how_it_works', 'option') ): the_row(); 
        // Get sub field values.
        $how_it_title= get_sub_field('how_it_title') ? '<h2>'.get_sub_field('how_it_title').'</h2>' : '';
        $how_it_works = get_sub_field('how_it_works') ? get_sub_field('how_it_works') : '';
        $how_it_button = get_sub_field('how_it_button') ? '<a href="'.get_sub_field('how_it_button')['url'].'" title="'.get_sub_field('how_it_button')['title'].'" class="btn btn--orange">'.get_sub_field('how_it_button')['title'].' <i class="fas fa-chevron-right"></i></a>' : '';
        $how_it_background_image = get_sub_field('how_it_background_image') ? 'style="background-image:url('.get_sub_field('how_it_background_image').')"' : '';
        ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <section class="section--works" <?php echo $how_it_background_image?>>
        <div class="container">
        <div class="section--works__head" data-aos="fade-up" data-aos-once="true">
            <?php echo $how_it_title ?>
        </div>
        <?php if ($how_it_works !='') :
            $i = 1;
            ?>
            <?php foreach ($how_it_works as $works) :
            $work_title = $works['work_title'] ? $works['work_title'] : '';
            $work_content = $works['work_content'] ? $works['work_content'] : '';
            $work_image = $works['work_image'] ? $works['work_image'] : '';
            ?>
        <div class="section--works__card" data-aos="fade-up" data-aos-once="true">
            <div class="row">
            <div class="col-md-6">
                <div class="section--works__card__bg" style="background-image: url('<?php echo $work_image['url']; ?>');">
                <p><?php echo  $i; ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="section--works__card__text">
                <h4><?php echo $work_title?></h4>
                <?php echo $work_content?>
                <!-- <p>Our team meets with your team to assess the needs and determine the current infrastructure.</p> -->
                </div>
            </div>
            </div>
        </div>
        <?php
        $i++;
            endforeach; ?>
        <?php endif; ?>
        <div class="section--works__button">
            <?php echo $how_it_button?>
        </div>
        </div>
        
    </section>
	<?php
	return ob_get_clean();
}


add_shortcode( 'our_solutions', 'our_solutions_function' );
function our_solutions_function() {
    ob_start();
    $solutions = get_field('solutions','option') ? get_field('solutions','option') : '';
    $sol_title = get_field('sol_title','option') ? get_field('sol_title','option') : '';

	?> 
   
    <section class="section--solutions">
    <div class="container">
        <h2  data-aos="fade-up" data-aos-once="true"><?php echo $sol_title ?></h2>
        <div class="row">
        <?php if ($solutions !='') : ?>
        <?php foreach ($solutions as $sol) :
            $sol_icon = $sol['sol_icon'] ? $sol['sol_icon'] : '';
            $sol_icon_title = $sol['sol_icon_title'] ? $sol['sol_icon_title'] : '';
            // $sol_link = $sol['sol_link'] ? $sol['sol_link'] : '';
            $sol_link = $sol['sol_link'] ? '<a href="'.$sol['sol_link']['url'].'" title="'.$sol['sol_link']['title'].'" class="">'.$sol['sol_link']['title'].' <i class="fas fa-play"></i></a>' : '';

        ?>
        <div class="col-md-3">
            <div class="section--solutions__card">
            <div class="section--solutions__card__content">
                <img src="<?php echo $sol_icon['url']; ?>" alt="<?php echo $sol_icon['alt']; ?>">
                <p><?php echo $sol_icon_title; ?></p>
                <?php echo $sol_link; ?>
            </div>
            </div>
        </div>
        <?php
        endforeach; ?>
        <?php endif; ?>
       
        </div>
    </div>
    </section>
    <?php
    return ob_get_clean();
}

add_action( 'genesis_after_header', 'single_hero_function' );
function single_hero_function(){
    if(is_singular('post')): 
?>
  <!-- Hero -->
  <section class="hero-single" style="background:url(<?php echo get_the_post_thumbnail_url() ?>);
   background-size:cover; background-position:center;">
    <div class="container">
        <h2><?php echo get_the_title() ?></h2> 
    </div>
  </section>
  <?php
  endif;
}