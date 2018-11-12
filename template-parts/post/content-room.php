<section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5"
         style="background-image: url(' <?php echo get_theme_mod("fs_hero_background_image"); ?>');">
    <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-12 text-center">

                <div class="mb-5 element-animate">
                    <h1><?php the_title() ?></h1>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="site-section">
    <div class="container">
        <div class="row mb-5">

            <?php if(has_post_thumbnail()) : ?>

                <div class="col-md-8">
                    <?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img-fluid d-block mr-auto ml-auto')); ?>
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <ul class="room-specs list-group">
                        <li class="list-group-item bg-light"><span class="ion-ios-people-outline"></span> <?php echo get_post_meta( $post->ID, 'Guests', TRUE ); ?></li>
                        <li class="list-group-item"><span class="ion-ios-crop"></span> <?php echo get_post_meta( $post->ID, 'Size', TRUE ); ?><sup>2</sup></li>
                    </ul>
                </div>


            <?php endif; ?>

        </div>
        <div class="row">

            <?php the_content(); ?>

        </div>
    </div>
</section>