<?php get_header(); ?>

    <?php
        $args = array(
            'post_type' => 'room',
            'post_status' => 'publish'
        );

        $rooms = new WP_Query( $args );
    ?>

    <?php if( $rooms->have_posts() ) : ?>

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