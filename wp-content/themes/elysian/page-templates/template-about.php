<?php
/* Template Name: Template: About */


function home_loop() {
     $image_services = get_field('image_services') ? get_field('image_services') : '';
     $title_services = get_field('title_services') ? get_field('title_services') : '';
     $serving_client_title = get_field('serving_client_title') ? get_field('serving_client_title') : '';
     $clients_number = get_field('clients_number') ? get_field('clients_number') : '';
     $clientes_title = get_field('clientes_title') ? get_field('clientes_title') : '';
     $problems_fixed_number = get_field('problems_fixed_number') ? get_field('problems_fixed_number') : '';
     $problems_title = get_field('problems_title') ? get_field('problems_title') : '';
     $years_number = get_field('years_number') ? get_field('years_number') : '';
     $years_title = get_field('years_title') ? get_field('years_title') : '';

     
	?>
   
     <!-- Reliable -->
     <section class="section--reliable">
       <div class="container">
         <div class="row">
           <div class="col-md-6">
             <div class="section--reliable__image" data-aos="fade-up" data-aos-once="true">
              <img src="<?php echo $image_services?>" alt="">
             </div>
           </div>
          <div class="col-md-6">
            <div class="section--reliable__text" data-aos="fade-up" data-aos-once="true">
              <?php echo $title_services?>
            </div>
          </div>
         </div>
       </div>
     </section>

     <!-- Based  -->
     <section class="section-based">
       <div class="container">
         <div class="section-based__head" data-aos="fade-up" data-aos-once="true">
           <h2> <?php echo $serving_client_title?></h2>
         </div>
         <div class="row">
           <div class="col-md-4">
             <div class="section-based__item" data-aos="fade-up" data-aos-once="true">
               <p class="section-based__item__number"><?php echo $clients_number?></p>
               <h5><?php echo $clientes_title?></h5>
             </div>
           </div>
           <div class="col-md-4">
             <div class="section-based__item"data-aos="fade-up" data-aos-once="true">
               <p class="section-based__item__number"><?php echo $problems_fixed_number?></p>
               <h5><?php echo $problems_title?></h5>
             </div>
           </div>
           <div class="col-md-4">
             <div class="section-based__item"data-aos="fade-up" data-aos-once="true">
               <p class="section-based__item__number"><?php echo $years_number?></p>
               <h5><?php echo $years_title?></h5>
             </div>
           </div>
         </div>
       </div>
     </section>

     <!-- Values  -->
     <?php 
      $add_model_left = get_field('add_model_left') ? get_field('add_model_left') : ''; 
      $link_values = get_field('link_values') ? get_field('link_values') : ''; 
      $title_values_center = get_field('title_values_center') ? get_field('title_values_center') : ''; 
      $content_values_center = get_field('content_values_center') ? get_field('content_values_center') : ''; 

     ?>
    <section class="section--values">
      <div class="container">
        <div class="section--values__button">
        <?php 
        if( $link_values ): 
            $link_url = $link_values['url'];
            $link_title = $link_values['title'];
            $link_target = $link_values['target'] ? $link_values['target'] : '_self';
            ?>
            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn--orange"><?php echo esc_html( $link_title ); ?> <i class="fas fa-chevron-right"></i></a>

        <?php endif; ?>
        </div>
        <div class="row">
          <div class="col-md-3">
          <?php
          // Check rows exists.
          if( have_rows('add_model_left') ):
              // Loop through rows.
              while( have_rows('add_model_left') ) : the_row();
                  // Load sub field value.
                  $image = get_sub_field('image'); 
                  $title = get_sub_field('title'); 
                  $content = get_sub_field('content'); 
                  ?>
                   <div class="section--values__item" data-aos="fade-right" data-aos-once="true">
                      <img src="<?php echo $image ?>" alt="vedor">
                      <h3><?php echo $title ?></h3>
                      <p><?php echo $content ?></p>
                  </div>
             <?php
              // End loop.
              endwhile;
          endif; ?>
          </div>
          <div class="col-md-6">
            <div class="section--values__our">
              <div class="section--values__our__values" data-aos="fade-up" data-aos-once="true">
              <h2><?php echo $title_values_center ?></h2>
              <p><?php echo $content_values_center ?></p>
              <img src="<?php echo get_stylesheet_directory_uri()?>/images/dots.png" alt="dots">
              </div>
            </div>
          </div>
          <div class="col-md-3">
          <?php
          // Check rows exists.
          if( have_rows('add_model_right') ):
              // Loop through rows.
              while( have_rows('add_model_right') ) : the_row();
                  // Load sub field value.
                  $image = get_sub_field('image'); 
                  $title = get_sub_field('title'); 
                  $content = get_sub_field('content'); 
                  ?>
                   <div class="section--values__item" data-aos="fade-left" data-aos-once="true">
                      <img src="<?php echo $image ?>" alt="vedor">
                      <h3><?php echo $title ?></h3>
                      <p><?php echo $content ?></p>
                  </div>
             <?php
              // End loop.
              endwhile;
          endif; ?>
          </div>
        </div>
      </div>
      <div class="section--values__bottom--curve">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#124871" fill-opacity="1" d="M0,0L120,32C240,64,480,128,720,133.3C960,139,1200,85,1320,58.7L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
      </div>
    </section>

    <!-- Name -->
    <?php 
      $image_whats = get_field('image_whats') ? get_field('image_whats') : ''; 
      $title_whats = get_field('title_whats') ? get_field('title_whats') : ''; 
      $subtitle_whats = get_field('subtitle_whats') ? get_field('subtitle_whats') : ''; 
      $content_whats = get_field('content_whats') ? get_field('content_whats') : ''; 
      $link_whats = get_field('link_whats') ? get_field('link_whats') : ''; 
      
     ?>
    <section class="section--name" style="background-image: url('<?php echo get_stylesheet_directory_uri()?>/images/bg.png');">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section--name__elysian" data-aos="fade-right" data-aos-once="true">
              <img src="<?php echo $image_whats?>" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="section--name__text" data-aos="fade-left" data-aos-once="true">
              <h2><?php echo $title_whats?></h2>
              <h5><?php echo $subtitle_whats?></h5>
              <?php echo $content_whats?>
              <?php 
            if( $link_whats ): 
                $link_url = $link_whats['url'];
                $link_title = $link_whats['title'];
                $link_target = $link_whats['target'] ? $link_whats['target'] : '_self';
                ?>
                <a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" ><?php echo esc_html( $link_title ); ?> <i class="fas fa-play"></i></a>

            <?php endif; ?>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Trusted  -->
    <?php 
      $title_partners = get_field('title_partners') ? get_field('title_partners') : ''; 
      $add_partners = get_field('add_partners') ? get_field('add_partners') : ''; 
     ?>
    <section class="section--trusted">
      <div class="container">
        <div class="section--trusted__head" data-aos="fade-up" data-aos-once="true">
          <h2> <?php echo $title_partners; ?></h2>
        </div>
        <div class="row">
        <?php
          // Check rows exists.
          if( have_rows('add_partners') ):
              // Loop through rows.
              while( have_rows('add_partners') ) : the_row();
                  // Load sub field value.
                  $image = get_sub_field('image'); 
                  $name = get_sub_field('name'); 
                  $position = get_sub_field('position'); 
                  $content = get_sub_field('content'); 
                  ?>
                   <div class="col-md-4">
                    <div class="section--trusted__profile" data-aos="fade-up" data-aos-once="true">
                      <div class="section--trusted__profile__bg" style="background-image: url(  <?php echo $image ?>);"></div>
                      <div class="section--trusted__profile__text">
                        <h5><?php echo $name ?></h5>
                        <h6><?php echo $position ?></h6>
                        <?php echo $content ?>
                      </div>
                    </div>
                  </div> 
            <?php
              // End loop.
              endwhile;
          endif; ?>
         
        </div>
      </div>
    </section>

    <!-- Work  -->
    <?php
      $how_it_works_content = get_field('how_it_works_content') ? get_field('how_it_works_content') : ''; 
      echo do_shortcode($how_it_works_content);
    ?>
    <!-- How it work  -->

     <?php
}
add_action( 'genesis_after_header', 'home_loop' );
remove_action( 'genesis_loop', 'genesis_do_loop' );



genesis();