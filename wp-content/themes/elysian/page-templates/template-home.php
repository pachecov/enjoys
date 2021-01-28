<?php
/* Template Name: Template: Home */


function home_loop() {
     $home_hero_title = get_field('home_hero_title') ? '<h2>'.get_field('home_hero_title').'</h2>' : '';
     $home_hero_content = get_field('home_hero_content') ? get_field('home_hero_content') : '';
     $home_hero_button = get_field('home_hero_button') ? '<a href="'.get_field('home_hero_button')['url'].'" title="'.get_field('home_hero_button')['title'].'" class="btn btn--orange">'.get_field('home_hero_button')['title'].' <i class="fas fa-chevron-right"></i></a>' : '';
     $home_hero_image = get_field('home_hero_image') ? 'style="background-image:url('.get_field('home_hero_image')['url'].')"' : '';
     $text_1 = get_field('text_1') ? '<h5>'.get_field('text_1').'</h5>' : '';
     $text_2 = get_field('text_2') ? '<h5>'.get_field('text_2').'</h5>' : '';
     $text_3 = get_field('text_3') ? '<h5>'.get_field('text_3').'</h5>' : '';

	?>
     <!-- Hero -->
     <section class="section--hero">
               <div class="section--hero__item" <?php echo $home_hero_image?>>
                    <div class="container">
                         <div class="item__content">
                              <?php echo $home_hero_title?>
                              <?php echo $home_hero_content?>
                              <?php echo $home_hero_button?>
                         </div>
                    </div>
               </div>
               <div class="section--hero__bottom">
                    <div class="row">
                         <div class="col-md-4 bottom__txt">
                              
                              <?php echo $text_1?>
                          
                         </div>
                         <div class="col-md-4 bottom__txt">
                        
                              <?php echo $text_2?>
                         
                         </div>
                         <div class="col-md-4 bottom__txt">
                              
                              <?php echo $text_3?>
                           
                         </div>
                    </div>
               </div>
     </section>

    <!-- Introducction -->

    <?php if( have_rows('section__intro') ): ?>
      <?php while( have_rows('section__intro') ): the_row(); 
        // Get sub field values.
        $lf_c_content = get_sub_field('lf_c_content') ? get_sub_field('lf_c_content') : '';
        $lf_c_image = get_sub_field('lf_c_image') ? get_sub_field('lf_c_image') : '';
        $rg_c_title= get_sub_field('rg_c_title') ? '<h2>'.get_sub_field('rg_c_title').'</h2>' : '';
        $rg_c_content= get_sub_field('rg_c_content') ? get_sub_field('rg_c_content') : '';
    
      ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <section class="section-introduction">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section-introduction__image" data-aos="fade-up" data-aos-once="true">
                <?php echo $lf_c_content ?>
                <div class="section-introduction__image__box" data-aos="fade-right" data-aos-once="true">
                  <img src="<?php echo $lf_c_image['url'] ?>" alt="<?php echo $lf_c_image['title'] ?>">
                </div>
            </div>
          </div>
          <div class="col-md-6">
              <div class="section-introduction__text" data-aos="fade-up" data-aos-once="true">
                <?php echo $rg_c_title?>
                <?php echo $rg_c_content?>
              </div>
            </div>
        </div>
      </div>
    </section>

    <!-- Support  -->
 
    <?php 
      $section_business_goals = get_field('section_business_goals') ? get_field('section_business_goals') : '';
      if($section_business_goals != ''):
        $tab1_title = $section_business_goals['tab1_title'] ? '<h5>'.$section_business_goals['tab1_title'].'</h5>' : '';
        $tab1_content = $section_business_goals['tab1_content'] ? $section_business_goals['tab1_content'] : '';
        $tab1_link = $section_business_goals['tab1_link'] ? '<a href="'.$section_business_goals['tab1_link']['url'].'" title="'.$section_business_goals['tab1_link']['title'].'" class="">'.$section_business_goals['tab1_link']['title'].' <i class="fas fa-play"></i></a>' : '';
        $tab1_image = $section_business_goals['tab1_image'] ? 'style="background-image:url('.$section_business_goals['tab1_image'].')"' : '';
        
        $tab2_title = $section_business_goals['tab2_title'] ? '<h5>'.$section_business_goals['tab2_title'].'</h5>' : '';
        $tab2_content = $section_business_goals['tab2_content'] ? $section_business_goals['tab2_content'] : '';
        $tab2_link = $section_business_goals['tab2_link'] ? '<a href="'.$section_business_goals['tab2_link']['url'].'" title="'.$section_business_goals['tab2_link']['title'].'" class="">'. $section_business_goals['tab2_link']['title'].' <i class="fas fa-play"></i></a>' : '';
        $tab2_image = $section_business_goals['tab2_image'] ? 'style="background-image:url('.$section_business_goals['tab2_image'].')"' : '';
        
        $tab3_title =  $section_business_goals['tab3_title'] ? '<h5>'. $section_business_goals['tab3_title'].'</h5>' : '';
        $tab3_content =  $section_business_goals['tab3_content'] ?  $section_business_goals['tab3_content'] : '';
        $tab3_link =  $section_business_goals['tab3_link'] ? '<a href="'. $section_business_goals['tab3_link']['url'].'" title="'.get_sub_field('tab3_link')['title'].'" class="">'. $section_business_goals['tab3_link']['title'].' <i class="fas fa-play"></i></a>' : '';
        $tab3_image = $section_business_goals['tab3_image'] ? 'style="background-image:url('.$section_business_goals['tab3_image'].')"' : '';
      ?>

    <section class="section--support">
      <div class="container">
        <div class="section--support__head" data-aos="fade-up" data-aos-once="true">
          <h2>Leverage advanced tools to <span>support business goals</span></h2>
        </div>
        <div class="row">
          <div class="col-md-4">
                <div class="section--support__card" data-aos="fade-up" data-aos-once="true">
                  <div class="section--support__card--head">
                    <?php echo $tab1_title?>
                  </div>
                  <div class="section--support__card--bg" <?php echo $tab1_image;?>>
                    <div class="section--support__card--bg__text">
                      <a href="<?php echo $section_business_goals['tab1_link']['url'] ?>" class="a-wrap">
                        <?php echo $tab1_content?>
                        <?php echo $tab1_link?>
                      </a>
                    </div>
                  </div>
                </div>
          </div>
          <div class="col-md-4">
            <div class="section--support__card" data-aos="fade-up" data-aos-once="true">
              <div class="section--support__card--head">
                <?php echo $tab2_title?>
              </div>
              <div class="section--support__card--bg" <?php echo $tab2_image;?>>
                <div class="section--support__card--bg__text">
                  <a href="<?php echo $section_business_goals['tab2_link']['url'] ?>" class="a-wrap">
                    <?php echo $tab2_content?>
                    <?php echo $tab2_link?>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="section--support__card" data-aos="fade-up" data-aos-once="true">
              <div class="section--support__card--head">
                <?php echo $tab3_title?>
              </div>
              <div class="section--support__card--bg" <?php echo $tab3_image;?>>
                <div class="section--support__card--bg__text">
                  <a href="<?php echo $section_business_goals['tab3_link']['url'] ?>" class="a-wrap">
                    <?php echo $tab3_content?>
                    <?php echo $tab3_link?>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      <?php endif;?>
      <?php if( have_rows('section_our_solutions') ): ?>
      <?php while( have_rows('section_our_solutions') ): the_row(); 
        // Get sub field values.
        $our_solutions = get_sub_field('our_solutions') ? get_sub_field('our_solutions') : '';
        
      ?>
      <?php endwhile; ?>
    <?php endif; ?>
  <?php echo do_shortcode($our_solutions)?>

    <!-- Corner   -->
    <?php if( have_rows('section_three_images') ): ?>
      <?php while( have_rows('section_three_images') ): the_row(); 
        // Get sub field values.
        $left_section_title = get_sub_field('left_section_title') ? '<h2>'.get_sub_field('left_section_title').'</h2>' : '';
        $left_section_content = get_sub_field('left_section_content') ? get_sub_field('left_section_content') : '';
        $right_image_1 = get_sub_field('right_image_1') ? get_sub_field('right_image_1') : '';
        $right_image_2 = get_sub_field('right_image_2') ? get_sub_field('right_image_2') : '';
        $right_image_3 = get_sub_field('right_image_3') ? get_sub_field('right_image_3') : '';
      ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <section class="section--corner">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-2 order-md-1">
            <div class="section--corner__text" data-aos="fade-right" data-aos-once="true">
              <?php echo $left_section_title?>
              <?php echo $left_section_content?>
            </div>
          </div>
          <div class="col-md-6 order-1 order-md-2">
            <div class="section--corner__images" data-aos="fade-left" data-aos-once="true">
              <div class="section--corner__images__bg" style="background-image: url('<?php echo $right_image_1['url'] ?> ');"></div>
              <div class="section--corner__images__bg" style="background-image: url('<?php echo $right_image_2['url'] ?> ');"></div>
              <div class="section--corner__images__bg2" style="background-image: url('<?php echo $right_image_3['url'] ?> ');"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Partners  -->
    <?php if( have_rows('section_four_images') ): ?>
      <?php while( have_rows('section_four_images') ): the_row(); 
        // Get sub field values.
        $four_title = get_sub_field('four_title') ? '<h2>'.get_sub_field('four_title').'</h2>' : '';
        $four_content = get_sub_field('four_content') ? get_sub_field('four_content') : '';
        $four_image_1 = get_sub_field('four_image_1') ? get_sub_field('four_image_1') : '';
        $image_title_1 = get_sub_field('image_title_1') ? '<h5>'.get_sub_field('image_title_1').'</h5>' : '';
        $four_image_2 = get_sub_field('four_image_2') ? get_sub_field('four_image_2') : '';
        $image_title_2 = get_sub_field('image_title_2') ? '<h5>'.get_sub_field('image_title_2').'</h5>' : '';
        $four_image_3 = get_sub_field('four_image_3') ? get_sub_field('four_image_3') : '';
        $image_title_3 = get_sub_field('image_title_3') ? '<h5>'.get_sub_field('image_title_3').'</h5>' : '';
        $four_image_4 = get_sub_field('four_image_4') ? get_sub_field('four_image_4') : '';
        $image_title_4 = get_sub_field('image_title_4') ? '<h5>'.get_sub_field('image_title_4').'</h5>' : '';
      ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <section class="section--partners">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section--partners__images">
              <div class="section--partners__images__bg1" style="background-image: url('<?php echo $four_image_1['url'] ?>');" data-aos="fade-right" data-aos-once="true">
                <?php echo $image_title_1 ?>
              </div>
              <div class="section--partners__images__bg2" style="background-image: url('<?php echo $four_image_2['url'] ?>');"data-aos="fade-right" data-aos-once="true">
                <?php echo $image_title_2 ?>
              </div>
              <div class="section--partners__images__bg3" style="background-image: url('<?php echo $four_image_3['url'] ?>');"data-aos="fade-right" data-aos-once="true">
                <?php echo $image_title_3 ?>
              </div>
              <div class="section--partners__images__bg4" style="background-image: url('<?php echo $four_image_4['url'] ?>');"data-aos="fade-right" data-aos-once="true">
                <?php echo $image_title_4 ?>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="section--partners__work">
              <div class="section--partners__work__text" data-aos="fade-left" data-aos-once="true">
              <?php echo $four_title ?>
              <?php echo $four_content ?>
              </div>
            </div>
          </div>
        </div>
        <?php if( have_rows('section_our_partners') ): ?>
          <?php while( have_rows('section_our_partners') ): the_row(); 
            // Get sub field values.
            $partnerst_title= get_sub_field('partnerst_title') ? '<h2>'.get_sub_field('partnerst_title').'</h2>' : '';
            $partnerst_shortcode= get_sub_field('partnerst_shortcode') ? get_sub_field('partnerst_shortcode') : '';
          ?>
          <?php endwhile; ?>
        <?php endif; ?>
        <div class="section--partners__our--partners" data-aos="fade-up" data-aos-once="true">
          <?php echo $partnerst_title ?>
          <?php echo do_shortcode($partnerst_shortcode)?>
        </div>
      </div>

    </section>

    <!-- How it work  -->
    <?php if( have_rows('section_how_it_works') ): ?>
      <?php while( have_rows('section_how_it_works') ): the_row(); 
        // Get sub field values.
        $content = get_sub_field('content') ? get_sub_field('content') : '';
      ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <?php
     if($content): ?>
      
      <section class="section_how_it_works">
        <?php echo do_shortcode('[how_it_works]');?>
      </section>
    <?php endif;
    ?>
    

    <!-- Helping  -->
    <?php if( have_rows('section_helping') ): ?>
      <?php while( have_rows('section_helping') ): the_row(); 
        // Get sub field values.
        $helping_title = get_sub_field('helping_title') ? '<h2>'.get_sub_field('helping_title').'</h2>' : '';
        $helping_content = get_sub_field('helping_content') ? get_sub_field('helping_content') : '';
        $helping_main_image = get_sub_field('helping_main_image') ? get_sub_field('helping_main_image') : '';
      ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <section class="section--helping"  data-aos="fade-up" data-aos-once="true">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="section--helping__text">
              <?php echo $helping_title?>
              <?php echo $helping_content?>
            </div>
          </div>
          <div class="col-md-4">
            <div class="section--helping__img">
              <div class="section--helping__img__bg" style="background-image: url('<?php echo $helping_main_image['url']; ?>');">
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Guide  -->
     <?php
}
add_action( 'genesis_after_header', 'home_loop' );
remove_action( 'genesis_loop', 'genesis_do_loop' );




genesis();