<?php if( get_theme_mod( 'cover_layout', 'image' ) === 'image' ) : ?>
    <div class="jumbotron sp-cover">
        <div class="sp-cover-overlay">
            <h1 class="display-4"><?php echo esc_html( get_theme_mod( 'cover_title', __( 'Perfect Business Theme', 'softpoint' ) ) ); ?></h1>
            <p class="lead mb-4">
                <?php echo esc_html( get_theme_mod( 'cover_subtitle', __( 'It is blazingly fast, extremely light-weight, search engine friendly and very easy to use.', 'softpoint' ) ) ); ?>
            </p>
            <a href="<?php echo esc_url( get_theme_mod( 'cover_btn_link', '#' ) ); ?>" class="btn btn-primary btn-lg"><?php echo esc_html( get_theme_mod( 'cover_btn_text', __( 'Contact Us', 'softpoint' ) ) ); ?></a>
        </div>
        <!-- /.sp-cover-overlay -->
    </div>

<?php else:
    $slide_1_id = get_theme_mod( 'first_slide' );
    $slide_2_id = get_theme_mod( 'second_slide' );
    $slide_3_id = get_theme_mod( 'third_slide' );

    $slide_1 = get_post( $slide_1_id );
    $slide_2 = get_post( $slide_2_id );
    $slide_3 = get_post( $slide_3_id );
?>

<?php if ( ( $slide_1_id && $slide_1 && $slide_1->post_status === 'publish' ) ||
           ( $slide_2_id && $slide_2 && $slide_2->post_status === 'publish' ) ||
           ( $slide_3_id && $slide_3 && $slide_3->post_status === 'publish' ) ) : ?>
    <div class="sp-page-slider">
        <div class="swiper-container sp-main-slider">
            <div class="swiper-wrapper">

                <?php if( $slide_1_id && $slide_1 && $slide_1->post_status === 'publish' ) : ?>
                    <?php $slide_1_img_url = get_the_post_thumbnail_url( $slide_1, 'full' ); ?>
                    <div class="swiper-slide sp-featured-img-bg" style="background-image:url(<?php echo esc_url( $slide_1_img_url ); ?>)">
                        <div class="slide-overlay row justify-content-center align-items-center">
                            <div class="slide-content col-md-6">
                                <h3><?php echo esc_html( $slide_1->post_title ); ?></h3>
                                <p class="lead mb-4">
                                    <?php echo esc_html( softpoint_get_short_excerpt( 30, $slide_1 ) ); ?>
                                </p>
                                <?php if( get_theme_mod( 'show_slide_buttons', '1' ) ) : ?>
                                    <a href="<?php echo esc_url( get_post_permalink( $slide_1 ) ); ?>" class="btn btn-primary btn-lg"><?php echo esc_html( get_theme_mod( 'slide_button_text', __( 'Read More', 'softpoint' ) ) ); ?></a>
                                <?php endif; ?>
                            </div>
                            <!-- /.slide-content -->
                        </div>
                        <!-- /.slide-overlay -->
                    </div>
                    <!-- /.swiper-slide -->
                <?php endif; ?>

                <?php if( $slide_2_id && $slide_2 && $slide_2->post_status === 'publish' ) : ?>
                    <?php $slide_2_img_url = get_the_post_thumbnail_url( $slide_2, 'full' ); ?>
                    <div class="swiper-slide sp-featured-img-bg" style="background-image:url(<?php echo esc_url( $slide_2_img_url ); ?>)">
                        <div class="slide-overlay row justify-content-center align-items-center">
                            <div class="slide-content col-md-6">
                                <h3><?php echo esc_html( $slide_2->post_title ); ?></h3>
                                <p class="lead mb-4">
                                    <?php echo esc_html( softpoint_get_short_excerpt( 30, $slide_2 ) ); ?>
                                </p>
                                <?php if( get_theme_mod( 'show_slide_buttons', '1' ) ) : ?>
                                    <a href="<?php echo esc_url( get_post_permalink( $slide_2 ) ); ?>" class="btn btn-primary btn-lg"><?php echo esc_html( get_theme_mod( 'slide_button_text', __( 'Read More', 'softpoint' ) ) ); ?></a>
                                <?php endif; ?>
                            </div>
                            <!-- /.slide-content -->
                        </div>
                        <!-- /.slide-overlay -->
                    </div>
                    <!-- /.swiper-slide -->
                <?php endif; ?>

                <?php if( $slide_3_id && $slide_3 && $slide_3->post_status === 'publish' ) : ?>
                    <?php $slide_3_img_url = get_the_post_thumbnail_url( $slide_3, 'full' ); ?>
                    <div class="swiper-slide sp-featured-img-bg" style="background-image:url(<?php echo esc_url( $slide_3_img_url ); ?>)">
                        <div class="slide-overlay row justify-content-center align-items-center">
                            <div class="slide-content col-md-6">
                                <h3><?php echo esc_html( $slide_3->post_title ); ?></h3>
                                <p class="lead mb-4">
                                    <?php echo esc_html( softpoint_get_short_excerpt( 30, $slide_3 ) ); ?>
                                </p>
                                <?php if( get_theme_mod( 'show_slide_buttons', '1' ) ) : ?>
                                    <a href="<?php echo esc_url( get_post_permalink( $slide_3 ) ); ?>" class="btn btn-primary btn-lg"><?php echo esc_html( get_theme_mod( 'slide_button_text', __( 'Read More', 'softpoint' ) ) ); ?></a>
                                <?php endif; ?>
                            </div>
                            <!-- /.slide-content -->
                        </div>
                        <!-- /.slide-overlay -->
                    </div>
                    <!-- /.swiper-slide -->
                <?php endif; ?>

            </div>

            <div class="swiper-pagination"></div>

            <!-- Add Arrows -->
            <?php if( is_rtl() ) : ?>
                <div class="swiper-button-next"><span class="fas fa-chevron-left"></span></div>
                <div class="swiper-button-prev"><span class="fas fa-chevron-right"></span></div>
            <?php else : ?>
                <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
                <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
            <?php endif; ?>

        </div>
    </div>
    <!-- /.sp-posts-slider -->
<?php endif; ?>
<?php endif; ?>
