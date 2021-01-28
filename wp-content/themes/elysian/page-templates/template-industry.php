<?php
/* Template Name: Template: Industry Defense */


function home_loop() {
  $content_left = get_field('content_left') ? get_field('content_left') : '';
  $image_left = get_field('image_left') ? get_field('image_left') : '';
  $content_right = get_field('content_right') ? get_field('content_right') : '';

	?>
  <!-- Does -->
  <section class="section--does">
    <div class="container">
      <div class="row">
        <div class="col-md-6"  data-aos="fade-right" data-aos-once="true">
          <div class="section--does__img">
            <p><?php echo $content_left ?></p>
            <div class="section--does__img__bg">
              <img src="<?php echo $image_left ?>" alt="">
            </div>
          </div>
        </div>  
        <div class="col-md-6"  data-aos="fade-left" data-aos-once="true">
          <div class="section--does__text">
          <?php echo $content_right ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Investing  -->
  <?php
  $title_investing = get_field('title_investing') ? get_field('title_investing') : '';
  $content_investing = get_field('content_investing') ? get_field('content_investing') : '';
  $add_feature = get_field('add_feature') ? get_field('add_feature') : '';
  $link_investing = get_field('link_investing') ? get_field('link_investing') : '';

?>
  <section class="section--investing" >
    <div class="container">
      <div class="section--investing__head" data-aos="fade-up" data-aos-once="true">
        <h2> <?php echo $title_investing ?></h2>
        <p> <?php echo $content_investing ?></p>
      </div>
      <div class="row">
      <?php
        // Check rows exists.
        if( have_rows('add_feature') ):

            // Loop through rows.
            while( have_rows('add_feature') ) : the_row();

                // Load sub field value.
                $title = get_sub_field('title'); 
                $image = get_sub_field('image'); 
                $content = get_sub_field('content'); 
                ?>
                <div class="col-md-4">
                  <div class="section--investing__card" data-aos="fade-up" data-aos-once="true">
                    <h3><?php echo $title ?></h3>
                    <div class="section--investing__card__img" style="background-image: url(<?php echo $image ?>);"></div>
                    <p><?php echo $content ?></p>
                  </div>
                </div>
                <?php
            // End loop.
            endwhile;

        // No value.
        endif; ?>
      </div>
    </div>
    <div class="section--investing__button">
    <?php 
    if( $link_investing ): 
        $link_url = $link_investing['url'];
        $link_title = $link_investing['title'];
        $link_target = $link_investing['target'] ? $link_investing['target'] : '_self';
        ?>
        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn--orange"><?php echo esc_html( $link_title ); ?> <i class="fas fa-chevron-right"></i></a>

    <?php endif; ?>
      
    </div>
  </section>

  <?php
    // Get sub field values.
    $our_solutions = get_field('our_solutions') ? get_field('our_solutions') : '';
  ?>
  <section class="our_solutions">
    <?php echo do_shortcode($our_solutions)?>
  </section>

  <!-- Testimonial  -->
  <section class="section--testimonial" style="background-image: url('<?php echo get_stylesheet_directory_uri()?>/images/testimonial-bg.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="section--testimonial__text" data-aos="fade-right" data-aos-once="true">
            <div class="section--testimonial__text--content">
              <h2>What our clients are saying</h2>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="section--testimonial__items" data-aos="fade-left" data-aos-once="true">
            <div class="section--testimonial__items__card">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla posuere faucibus elit, nec mattis turpis eleifend ac. Sed tristique cursus purus, suscipit rutrum tortor venenatis quis. Suspendisse vehicula massa quis tristique dignissim stella emmy lorem ipsum dolor sit amen diog.</p>
              <h5>John Smith</h5>
              <h6>CIO, X Industry</h6>
            </div>
            <div class="section--testimonial__items__card">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla posuere faucibus elit, nec mattis turpis eleifend ac. Sed tristique cursus purus, suscipit rutrum tortor venenatis quis. Suspendisse vehicula massa quis tristique dignissim stella emmy lorem ipsum dolor sit amen diog.</p>
              <h5>John Smith</h5>
              <h6>CIO, X Industry</h6>
            </div>
            <div class="section--testimonial__items__card">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla posuere faucibus elit, nec mattis turpis eleifend ac. Sed tristique cursus purus, suscipit rutrum tortor venenatis quis. Suspendisse vehicula massa quis tristique dignissim stella emmy lorem ipsum dolor sit amen diog.</p>
              <h5>John Smith</h5>
              <h6>CIO, X Industry</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <!-- Testimonial  -->
  <?php
  $how_it_works_industry = get_field('how_it_works_industry') ? get_field('how_it_works_industry') : '';
  ?>
  <?php if($content): ?>
    <section class="section_how_it_works">
      <?php echo do_shortcode('[how_it_works]');?>
    </section>
  <?php endif;?>
  
  <!-- Case  -->
  <?php
  
  $title_study = get_field('title_study') ? get_field('title_study') : '';
  $content_study = get_field('content_study') ? get_field('content_study') : '';
  $link_study = get_field('link_study') ? get_field('link_study') : '';
  $image_study = get_field('image_study') ? get_field('image_study') : '';


  ?>
  <section class="section--case" data-aos="fade-up" data-aos-once="true">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="section--case__text">
            <h2><?php echo $title_study ?></h2>
            <?php echo $content_study ?>
            <?php 
            if( $link_study ): 
                $link_url = $link_study['url'];
                $link_title = $link_study['title'];
                $link_target = $link_study['target'] ? $link_study['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" ><?php echo esc_html( $link_title ); ?><i class="fas fa-caret-right"></i></a>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="section--case__img">
            <div class="section--case__img__bg" style="background-image: url(   <?php echo $image_study ?>);">

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 

<?php
}
add_action( 'genesis_after_header', 'home_loop' );
remove_action( 'genesis_loop', 'genesis_do_loop' );



genesis();