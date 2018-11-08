<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage fyroi-studios
 */

?>

<section class="site-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="heading-wrap text-center element-animate">
                    <h4 class="sub-heading"><?php echo get_theme_mod('fs_information_title', 'Stay with our luxury rooms') ?></h4>
                    <h2 class="heading"><?php echo get_theme_mod('fs_information_subtitle', 'Stay and Enjoy') ?></h2>
                    <p class="mb-5"><?php echo get_theme_mod('fs_information_description', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus illo similique natus, a recusandae? Dolorum, unde a quibusdam est? Corporis deleniti obcaecati quibusdam inventore fuga eveniet! Qui delectus tempore amet!') ?></p>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <img class="img-fluid" src="<?php echo get_theme_mod("fs_information_image", get_template_directory_uri() . "/assets/images/f_img_1.png")  ?>" alt="Information Image">
            </div>
        </div>
    </div>
</section>

