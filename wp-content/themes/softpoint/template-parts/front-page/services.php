<?php
    $service_1_id = get_theme_mod( 'first_service' );
    $service_2_id = get_theme_mod( 'second_service' );
    $service_3_id = get_theme_mod( 'third_service' );

    $service_1 = get_post( $service_1_id );
    $service_2 = get_post( $service_2_id );
    $service_3 = get_post( $service_3_id );
?>

<?php if( ( $service_1_id && $service_1 && $service_1->post_status === 'publish' ) ||
            ( $service_2_id && $service_2 && $service_2->post_status === 'publish') ||
            ( $service_3_id && $service_3 && $service_3->post_status === 'publish') ||
            get_theme_mod( 'services_title' ) ||
            get_theme_mod( 'services_subtitle' ) ) : ?>
<section class="sp-services-section <?php if ( !get_theme_mod( 'boxed_site' ) ) : echo 'container sp-container'; endif; ?>">
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
            <?php if( get_theme_mod( 'services_title' ) ) : ?><h3><?php echo esc_html( get_theme_mod( 'services_title' ) ); ?></h3><?php endif; ?>
            <?php if( get_theme_mod( 'services_subtitle' ) ) : ?>
                <p class="text-muted sp-section-subtitle">
                    <?php echo esc_html( get_theme_mod( 'services_subtitle' ) ); ?>
                </p>
            <?php endif; ?>
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->

    <?php if( $service_1_id || $service_2_id || $service_3_id ) : ?>
        <div class="row">

            <?php if( $service_1_id && $service_1 && $service_1->post_status === 'publish' ) : ?>
                <div class="col-md-4 sp-single-service">
                    <span class="fa sp-service-icon fa-<?php echo esc_attr( get_theme_mod( 'first_service_icon', 'heart' ) ); ?>"></span>
                    <h3 class="sp-service-title"><a href="<?php echo esc_url( get_post_permalink( $service_1 ) ); ?>"><?php echo esc_html( $service_1->post_title ); ?></a></h3>
                    <p class="text-muted">
                        <?php echo esc_html( softpoint_get_short_excerpt( 20, $service_1 ) ); ?>
                    </p>
                    <?php if( get_theme_mod( 'show_services_buttons', '1' ) ) : ?>
                        <a href="<?php echo esc_url( get_post_permalink( $service_1 ) ); ?>" class="btn <?php if( get_theme_mod( 'show_services_button_as_link', '0' ) ) : echo 'btn-link'; else : echo 'btn-outline-primary'; endif; ?>"><?php echo esc_html( get_theme_mod( 'services_button_text', __( 'Read More', 'softpoint' ) ) ); ?></a>
                    <?php endif; ?>
                </div>
                <!-- /.col-md-4 -->
            <?php endif; ?>

            <?php if( $service_2_id && $service_2 && $service_2->post_status === 'publish' ) : ?>
                <div class="col-md-4 sp-single-service">
                    <span class="fa sp-service-icon fa-<?php echo esc_attr( get_theme_mod( 'second_service_icon', 'code' ) ); ?>"></span>
                    <h3 class="sp-service-title"><a href="<?php echo esc_url( get_post_permalink( $service_2 ) ); ?>"><?php echo esc_html( $service_2->post_title ); ?></a></h3>
                    <p class="text-muted">
                        <?php echo esc_html( softpoint_get_short_excerpt( 20, $service_2 ) ); ?>
                    </p>
                    <?php if( get_theme_mod( 'show_services_buttons', '1' ) ) : ?>
                        <a href="<?php echo esc_url( get_post_permalink( $service_2 ) ); ?>" class="btn <?php if( get_theme_mod( 'show_services_button_as_link', '0' ) ) : echo 'btn-link'; else : echo 'btn-outline-primary'; endif; ?>"><?php echo esc_html( get_theme_mod( 'services_button_text', __( 'Read More', 'softpoint' ) ) ); ?></a>
                    <?php endif; ?>
                </div>
                <!-- /.col-md-4 -->
            <?php endif; ?>

            <?php if( $service_3_id && $service_3 && $service_3->post_status === 'publish' ) : ?>
                <div class="col-md-4 sp-single-service">
                    <span class="fa sp-service-icon fa-<?php echo esc_attr( get_theme_mod( 'third_service_icon', 'cloud-upload' ) ); ?>"></span>
                    <h3 class="sp-service-title"><a href="<?php echo esc_url( get_post_permalink( $service_3 ) ); ?>"><?php echo esc_html( $service_3->post_title ); ?></a></h3>
                    <p class="text-muted">
                        <?php echo esc_html( softpoint_get_short_excerpt( 20, $service_3 ) ); ?>
                    </p>
                    <?php if( get_theme_mod( 'show_services_buttons', '1' ) ) : ?>
                        <a href="<?php echo esc_url( get_post_permalink( $service_3 ) ); ?>" class="btn <?php if( get_theme_mod( 'show_services_button_as_link', '0' ) ) : echo 'btn-link'; else : echo 'btn-outline-primary'; endif; ?>"><?php echo esc_html( get_theme_mod( 'services_button_text', __( 'Read More', 'softpoint' ) ) ); ?></a>
                    <?php endif; ?>
                </div>
                <!-- /.col-md-4 -->
            <?php endif; ?>
        </div>
    <?php endif; ?>
</section>
<?php endif; ?>
