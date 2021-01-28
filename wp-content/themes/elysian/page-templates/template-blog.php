<?php
/* Template Name: Template: Blog */


function be_custom_loop() {
	global $post;

	?>
	<!-- hero -->
  <section class="hero--blog" style="background-image: url('<?php echo get_stylesheet_directory_uri()?>/images/blog-bg.jpg');">
    <div class="container">
     <div class="hero--blog__content">
        <h5>Elysian blog</h5>
        <h2>News, information and insights from our experts</h2>
     </div>
    </div>
  </section>
  <!-- end hero -->
  
  <!-- Featred Post  -->
  <?php
  $featured_post = get_field('choose_the_featured_post');
  if( $featured_post ): ?>
  <section class="section--featured" data-aos="fade-up" data-aos-once="true">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-2 order-md-1">
          <div class="section--featured__text">
            <h6>featured post</h6>
            <h3><?php echo esc_html( $featured_post->post_title ); ?></h3>
            <p><?php echo esc_html( $featured_post->post_excerpt ); ?></p>
						<a href="<?php get_permalink( $featured_post->ID );?>" title="">Read More<i class="fas fa-caret-right"></i></a>
          </div>
        </div>
        <div class="col-md-6 order-1 order-md-2">
          <div class="section--featured__img" style="background-image: url('<?php echo get_stylesheet_directory_uri()?>/images/blog.jpg');"></div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <!-- End Featred Post  -->
	<?php
	// arguments, adjust as needed
	$args = array(
		'post_type'      => 'post',
		'posts_per_page' => 8,
		'post_status'    => 'publish',
		'paged'          => get_query_var( 'paged' )
	);

	global $wp_query;
	$wp_query = new WP_Query( $args );
	$i = 1;
	if ( have_posts() ) : 
		echo '<section class="list--blog">';
		echo '<div class="container">';
		echo '<div class="row">';
		while ( have_posts() ) : the_post(); 
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full') ? get_the_post_thumbnail_url(get_the_ID(),'full') : get_site_url().'/wp-content/uploads/2020/08/Layer-11@2x.png' ; 
			if($i == 1):
			?>
			<div class="col-md-6">
				<div class="blog--item blog--spacing1" data-aos="fade-right" data-aos-once="true">
          <div class="blog--item__img" style="background-image: url(<?php echo $featured_img_url?>)">
						<a href="<?php echo get_permalink()?>" title=""></a>
					</div>
					<div class="blog--item__content">
						<div class="item__meta">
							<?php echo get_the_date()?>  by <?php echo get_the_author()?>
						</div>
						<h3><?php echo get_the_title()?> <a href="<?php echo get_permalink()?>" title=""></a></h3>
						<p><?php echo get_the_excerpt()?></p>
						<a href="<?php echo get_permalink()?>" title="">Read More<i class="fas fa-caret-right"></i></a>
					</div>
				</div>
			</div>
			<?php
			endif;
			if($i == 2):
			?>
			<div class="col-md-6">
				<div class="blog--item blog--spacing2" data-aos="fade-left" data-aos-once="true">
          <div class="blog--item__img image-mobile" style="background-image: url(<?php echo $featured_img_url?>)">
            <a href="<?php echo get_permalink()?>" title=""></a>
          </div>
					<div class="blog--item__content">
						<div class="item__meta">
							<?php echo get_the_date()?>  by <?php echo get_the_author()?>
						</div>
						<h3><?php echo get_the_title()?> <a href="<?php echo get_permalink()?>" title=""></a></h3>
						<p><?php echo get_the_excerpt()?></p>
						<a href="<?php echo get_permalink()?>" title="">Read More<i class="fas fa-caret-right"></i></a>
					</div>
          <div class="blog--item__img image-desktop" style="background-image: url(<?php echo $featured_img_url?>)">
          <a href="<?php echo get_permalink()?>" title=""></a>
					</div>
				</div>
			</div>
			<?php endif;
			if($i == 3):
			?>
			<div class="col-12" data-aos="fade-up" data-aos-once="true">
				<div class="row">
					<div class="col-md-6">
            <div class="blog--item__img" style="background-image: url(<?php echo $featured_img_url?>)">
            <a href="<?php echo get_permalink()?>" title=""></a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="blog--item__content">
							<div class="item__meta">
								<?php echo get_the_date()?>  by <?php echo get_the_author()?>
							</div>
							<h3><?php echo get_the_title()?> <a href="<?php echo get_permalink()?>" title=""></a></h3>
							<p><?php echo get_the_excerpt()?></p>
							<a href="<?php echo get_permalink()?>" title="">Read More<i class="fas fa-caret-right"></i></a>
						</div>
						
					</div>
				</div>
			</div>
			<?php endif;
			if($i == 4):
			?>
			<div class="col-md-6">
				<div class="blog--item blog--spacing3" data-aos="fade-right" data-aos-once="true">
          <div class="blog--item__img image-mobile" style="background-image: url(<?php echo $featured_img_url?>)">
          <a href="<?php echo get_permalink()?>" title=""></a>
					</div>
					<div class="blog--item__content">
						<div class="item__meta">
							<?php echo get_the_date()?>  by <?php echo get_the_author()?>
						</div>
						<h3><?php echo get_the_title()?> <a href="<?php echo get_permalink()?>" title=""></a></h3>
						<p><?php echo get_the_excerpt()?></p>
						<a href="<?php echo get_permalink()?>" title="">Read More<i class="fas fa-caret-right"></i></a>
					</div>
          <div class="blog--item__img image-desktop" style="background-image: url(<?php echo $featured_img_url?>)">
          <a href="<?php echo get_permalink()?>" title=""></a>
					</div>
				</div>
			</div>
			<?php
			endif;
			if($i == 5):
			?>
			<div class="col-md-6">
				<div class="blog--item blog--spacing4" data-aos="fade-left" data-aos-once="true">
					
          <div class="blog--item__img" style="background-image: url(<?php echo $featured_img_url?>)">
          <a href="<?php echo get_permalink()?>" title=""></a>
					</div>
					<div class="blog--item__content">
						<div class="item__meta">
							<?php echo get_the_date()?>  by <?php echo get_the_author()?>
						</div>
						<h3><?php echo get_the_title()?> <a href="<?php echo get_permalink()?>" title=""></a></h3>
						<p><?php echo get_the_excerpt()?></p>
						<a href="<?php echo get_permalink()?>" title="">Read More<i class="fas fa-caret-right"></i></a>
					</div>
				</div>
			</div>
			<?php endif;
			if($i == 6):
				?>
				<div class="col-12" data-aos="fade-up" data-aos-once="true">
					<div class="row">
						<div class="col-md-6 order-2 order-md-1">
							<div class="blog--item__content">
								<div class="item__meta">
									<?php echo get_the_date()?>  by <?php echo get_the_author()?>
								</div>
								<h3><?php echo get_the_title()?> <a href="<?php echo get_permalink()?>" title=""></a></h3>
								<p><?php echo get_the_excerpt()?></p>
								<a href="<?php echo get_permalink()?>" title="">Read More<i class="fas fa-caret-right"></i></a>
							</div>
							
						</div>
						<div class="col-md-6 order-1 order-md-2">
              <div class="blog--item__img" style="background-image: url(<?php echo $featured_img_url?>)">
              <a href="<?php echo get_permalink()?>" title=""></a>
							</div>
						</div>
					</div>
				</div>
			<?php $i=0;endif;
			$i++;
		endwhile;
		echo '</div></div> <div class="list--blog__bg"></div> </section>';
		do_action( 'genesis_after_endwhile' );
	endif;
	wp_reset_query();
	
  	
}
add_action( 'genesis_after_header', 'be_custom_loop' );
remove_action( 'genesis_loop', 'genesis_do_loop' );


genesis();