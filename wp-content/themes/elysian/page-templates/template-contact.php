<?php
/* Template Name: Template: Contact */


function contact_loop() {
    $location = get_field('location') ? get_field('location') : '';
    $business = get_field('business') ? get_field('business') : '';
    $inquiries = get_field('inquiries') ? get_field('inquiries') : '';
    $images_bottom = get_field('images_bottom') ? get_field('images_bottom') : '';
    
    ?>
    <section class="general-hero" style="background:url(<?php echo get_the_post_thumbnail_url() ?>);
    background-size:cover; background-position:center;">
        <div class="container">
            <h2><?php echo get_the_title() ?></h2>
        </div>
    </section>
    <section class="section-contact">
        <div class="container"> 
            <div class="row">
                <div class="col-md-8">
                    <div class="content-wrap">
                        <?php the_content() ?>
                    </div>
                </div>
                <div class="col-md-4 contact-side">
                    <div class="location">
                        <?php echo $location ?>
                    </div>
                    <div class="business">
                    <?php echo $business ?>
                    </div>
                    <div class="inquiries">
                    <?php echo $inquiries ?>
                    </div>
                    <div class="socials">
                        <h4>GET SOCIAL</h4>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-linkedin"></i></a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
            <div class="contact-bottom">
                <div class="row">
                    <div class="col-12">
                        <img src=" <?php echo $images_bottom ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="section-contact__bg"></div>
    </section>
    <?php
}
add_action( 'genesis_after_header', 'contact_loop' );
remove_action( 'genesis_loop', 'genesis_do_loop' );

genesis();