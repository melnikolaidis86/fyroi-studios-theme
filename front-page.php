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
            <div class="row ">
                <div class="col-md-7">
                    <div class="media d-block room mb-0">
                        <figure>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/img_1.jpg" alt="Generic placeholder image" class="img-fluid">
                            <div class="overlap-text">
                  <span>
                    Featured Room
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                            </div>
                        </figure>
                        <div class="media-body">
                            <h3 class="mt-0"><a href="#">Presidential Room</a></h3>
                            <ul class="room-specs">
                                <li><span class="ion-ios-people-outline"></span> 2 Guests</li>
                                <li><span class="ion-ios-crop"></span> 22 ft <sup>2</sup></li>
                            </ul>
                            <p>Nulla vel metus scelerisque ante sollicitudin. Fusce condimentum nunc ac nisi vulputate fringilla. </p>
                            <p><a href="#" class="btn btn-primary btn-sm">Book Now From $20</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 room-thumbnail-absolute">
                    <a href="#" class="media d-block room bg first-room" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/img_2.jpg'); ">
                        <!-- <figure> -->
                        <div class="overlap-text">
                  <span>
                    Hotel Room
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                            <span class="pricing-from">
                    from $22
                  </span>
                        </div>
                        <!-- </figure> -->
                    </a>

                    <a href="#" class="media d-block room bg second-room" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/img_4.jpg'); ">
                        <!-- <figure> -->
                        <div class="overlap-text">
                  <span>
                    Hotel Room
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                            <span class="pricing-from">
                    from $22
                  </span>
                        </div>
                        <!-- </figure> -->
                    </a>

                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/page/content', 'front-page-parallax' ); ?>

    <?php get_template_part( 'template-parts/page/content', 'front-page-information' ); ?>

<?php get_footer(); ?>