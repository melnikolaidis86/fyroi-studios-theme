<?php get_header(); ?>

<?php
$args = array(
    'post_type' => 'room',
    'post_status' => 'publish'
);

$rooms = new WP_Query( $args );
?>

<?php if( $rooms->have_posts() ) : ?>

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5"
             style="background-image: url(' <?php
             if( has_post_thumbnail() )
                 the_post_thumbnail();
             else
                 echo get_theme_mod("fs_hero_background_image");
             ?>');">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-12 text-center">

                    <div class="mb-5 element-animate">
                        <h1>Our Rooms</h1>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php
    // Start the loop.
    while ( $rooms->have_posts() ) : $rooms->the_post();

        // Include the page content template.
        get_template_part( 'template-parts/page/content', 'rooms' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

        // End the loop.
    endwhile;
    ?>

<?php endif; ?>

<?php get_footer(); ?>