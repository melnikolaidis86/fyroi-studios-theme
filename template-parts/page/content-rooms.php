<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="container">
        <div class="row my-5">

            <?php if(has_post_thumbnail()) : ?>

                <div class="col-md-8">
                    <?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img-fluid d-block mr-auto ml-auto')); ?>
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <ul class="room-specs list-group">
                        <li class="list-group-item bg-light"><span class="ion-ios-people-outline"></span> Persons: <strong><?php echo get_post_meta( $post->ID, 'Guests', TRUE ); ?></strong></li>
                        <li class="list-group-item"><span class="ion-ios-crop"></span> Size: <strong><?php echo get_post_meta( $post->ID, 'Size', TRUE ); ?><sup>2</sup></strong></li>
                    </ul>
                </div>


            <?php endif; ?>

        </div>
        <div class="row">

            <?php the_content(); ?>

        </div>
    </div>

    <?php edit_post_link(); ?>

</article>