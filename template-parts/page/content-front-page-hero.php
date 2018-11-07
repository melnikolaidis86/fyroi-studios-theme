<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage fyroi-studios
 */

?>

<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url('<?php echo get_theme_mod("fs_hero_background_image", get_template_directory_uri() . "/assets/images/big_image_1.jpg")  ?>');">
    <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-12 text-center">

                <div class="mb-5 element-animate">
                    <h1><?php echo get_theme_mod('fs_hero_title', 'Welcome To Our Luxury Rooms'); ?></h1>
                    <p><?php echo get_theme_mod('fs_hero_subtitle', 'Discover our world\'s #1 Luxury Room For VIP.'); ?></p>
                    <p><a href="booknow.html" class="btn btn-primary"><?php _e('Check Our Rooms', 'fyroi_theme') ?></a></p>
                </div>

            </div>
        </div>
    </div>
</section>
