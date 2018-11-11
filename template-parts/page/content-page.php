<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
                        <h1><?php the_title() ?></h1>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="site-section">
        <div class="container">
            <div class="row">

                <?php the_content(); ?>

            </div>
        </div>
    </section>

    <?php edit_post_link(); ?>

</article>