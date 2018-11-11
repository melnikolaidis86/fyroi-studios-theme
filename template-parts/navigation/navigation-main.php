<nav class="navbar navbar-expand-md navbar-dark bg-light">
    <div class="container">

        <?php if ( function_exists( 'the_custom_logo' ) ) : ?>
            <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); ?>
            <?php $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
            <?php if ( has_custom_logo() ) : ?>
                <a class="navbar-brand" href="index.html"><img src="<?php echo  esc_url( $logo[0] ) ?>"></a>
            <?php else : ?>
                <a class="navbar-brand" href="index.html"><?php echo  get_bloginfo( 'name' ) ?></a>
            <?php  endif; ?>
        <?php endif; ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php
        wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse navbar-light',
            'container_id'    => 'navbarsExample05',
            'menu_class'      => 'navbar-nav ml-auto pl-lg-5 pl-0',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?>

    </div>
</nav>