<?php
/* Template Name: Template: Digital Workspace */


function home_loop() {
     $home_hero_title = get_field('home_hero_title') ? '<h2>'.get_field('home_hero_title').'</h2>' : '';
     $home_hero_content = get_field('home_hero_content') ? get_field('home_hero_content') : '';
     $home_hero_button = get_field('home_hero_button') ? '<a href="'.get_field('home_hero_button')['url'].'" title="'.get_field('home_hero_button')['title'].'" class="btn btn--orange">'.get_field('home_hero_button')['title'].' <i class="fas fa-chevron-right"></i></a>' : '';
     $home_hero_image = get_field('home_hero_image') ? 'style="background-image:url('.get_field('home_hero_image')['url'].')"' : '';
     $text_1 = get_field('text_1') ? '<h5>'.get_field('text_1').'</h5>' : '';
     $text_2 = get_field('text_2') ? '<h5>'.get_field('text_2').'</h5>' : '';
     $text_3 = get_field('text_3') ? '<h5>'.get_field('text_3').'</h5>' : '';
	?>
  
  <!-- Improve  -->
  <?php if( have_rows('section_improve') ): ?>
      <?php while( have_rows('section_improve') ): the_row(); 
        // Get sub field values.
        $lf_image = get_sub_field('lf_image') ? get_sub_field('lf_image') : '';
        $rg_title= get_sub_field('rg_title') ? '<h2>'.get_sub_field('rg_title').'</h2>' : '';
        $rg_content= get_sub_field('rg_content') ? get_sub_field('rg_content') : '';
    
      ?>
      <?php endwhile; ?>
  <?php endif; ?>
  <section class="section--improve">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="section--improve__img">
            <div class="section--improve__img__bg" style="background-image: url('<?php echo $lf_image['url']; ?>');">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="section--improve__text">
            <?php echo $rg_title?>
            <?php echo $rg_content?>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Get -->
  <?php if( have_rows('section_get_hnow') ): ?>
      <?php while( have_rows('section_get_hnow') ): the_row(); 
        // Get sub field values.
        $get_tittle= get_sub_field('get_tittle') ? '<h2>'.get_sub_field('get_tittle').'</h2>' : '';
        $get_content= get_sub_field('get_content') ? get_sub_field('get_content') : '';
        $get_cl_content= get_sub_field('get_cl_content') ? get_sub_field('get_cl_content') : '';
        $get_cr_content= get_sub_field('get_cr_content') ? get_sub_field('get_cr_content') : '';
      ?>
      <?php endwhile; ?>
  <?php endif; ?>
  <section class="section--get">
    <div class="container">
      <div class="section--get__content">
          <?php echo $get_tittle?>
          <?php echo $get_content?>
          <div class="row">
            <div class="col-md-6">
              <?php echo $get_cl_content?>
            </div>
            <div class="col-md-6">
              <?php echo $get_cr_content?>
            </div>
          </div>
        </div>
    </div>
  </section>
  
  <!-- Create  -->
  <?php if( have_rows('section_create') ): ?>
      <?php while( have_rows('section_create') ): the_row(); 
        // Get sub field values.
        $create_title= get_sub_field('create_title') ? '<h2>'.get_sub_field('create_title').'</h2>' : '';
        $create_content= get_sub_field('create_content') ? get_sub_field('create_content') : '';
        $create_cl_content= get_sub_field('create_cl_content') ? get_sub_field('create_cl_content') : '';
        $create_cl_image = get_sub_field('create_cl_image') ? get_sub_field('create_cl_image') : '';
        $create_cr_content= get_sub_field('create_cr_content') ? get_sub_field('create_cr_content') : '';

      ?>
      <?php endwhile; ?>
  <?php endif; ?>
  <section class="section--create">
    <div class="container">
      <div class="section--create__content">
        <?php echo $create_title ?>
        <div class="row">
          <div class="col-md-6">
            <div class="section--create__content__img">
              <?php echo $create_cl_content ?>
              <img src="<?php echo $create_cl_image['url'] ?>" alt="<?php echo $create_cl_image['title'] ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="section--create__content__text">
              <?php echo $create_cr_content ?>
            </div>
          </div>
        </div>
        <?php echo $create_content ?>
      </div>
    </div>
  </section>
  <?php
  $solutions_digital= get_field('solutions_digital') ? get_field('solutions_digital') : '';
  echo do_shortcode($solutions_digital);
  ?>

<?php
}
add_action( 'genesis_after_header', 'home_loop' );
remove_action( 'genesis_loop', 'genesis_do_loop' );



genesis();