<?php get_header(); ?>

    <?php get_template_part( 'template-parts/page/content', 'front-page-hero' ); ?>

    <section class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 heading-wrap text-center">
                    <h4 class="sub-heading">Our Luxury Rooms</h4>
                    <h2 class="heading">Featured Rooms</h2>
                </div>
            </div>

            <?php
                $args = array(
                        'post_type' => 'room',
                        'post_status' => 'publish',
                        'posts_per_page' => 1
                );

                $firstroom = new WP_Query( $args );
            ?>

            <?php if ( $firstroom->have_posts() ) : ?>

                <?php while( $firstroom->have_posts() ) : $firstroom->the_post() ?>

            <div class="row ">
                <div class="col-md-7">
                    <div class="media d-block room mb-0">
                        <figure>
                                <?php echo get_the_post_thumbnail( $post_id, 'large', array( 'class' => 'img-fluid')) ?>
                            <div class="overlap-text">
                                  <span>
                                    Featured Room
                                  </span>
                            </div>
                        </figure>

                        <div class="media-body">
                            <h3 class="mt-0"><a href="<?php echo get_the_permalink() ?>"><?php the_title() ?></a></h3>
                            <ul class="room-specs">
                                <li><span class="ion-ios-people-outline"></span> <?php echo get_post_meta( $post->ID, 'Guests', TRUE ); ?> Guests</li>
                                <li><span class="ion-ios-crop"></span> <?php echo get_post_meta( $post->ID, 'Size', TRUE ); ?> ft <sup>2</sup></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php endwhile; ?>

            <?php endif; ?>



                <div class="col-md-5 room-thumbnail-absolute">

                <?php
                $args = array(
                    'post_type' => 'room',
                    'post_status' => 'publish',
                    'posts_per_page' => 2,
                    'offset' => 1
                );

                $nextrooms = new WP_Query( $args );
                ?>

                <?php if ( $nextrooms->have_posts() ) : ?>

                    <?php while( $nextrooms->have_posts() ) : $nextrooms->the_post() ?>
                        <a href="<?php echo get_the_permalink() ?>" class="media d-block room bg first-room" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>'); ">
                        </a>

                    <?php endwhile; ?>
                <?php endif; ?>

                </div>
            </div>

        </div>
    </section>


    <?php get_template_part( 'template-parts/page/content', 'front-page-parallax' ); ?>

    <?php get_template_part( 'template-parts/page/content', 'front-page-information' ); ?>

<?php get_footer(); ?>