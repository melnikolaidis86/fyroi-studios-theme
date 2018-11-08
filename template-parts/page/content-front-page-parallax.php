<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage fyroi-studios
 */

?>

<section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url('<?php echo get_theme_mod("fs_parallax_background_image", get_template_directory_uri() . "/assets/images/img_5.jpg")  ?>');">
    <div class="container">
        <div class="row justify-content-center align-items-center intro">
            <div class="col-md-9 text-center element-animate">
                <h2><?php echo get_theme_mod('fs_parallax_title', 'Relax and Enjoy your Holiday') ?></h2>
                <p class="lead mb-5"><?php echo get_theme_mod('fs_parallax_subtitle', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quidem tempore expedita facere facilis, dolores!') ?></p>
            </div>
        </div>
    </div>
</section>


