<?php
    $port_1_id = get_theme_mod( 'first_port_item' );
    $port_2_id = get_theme_mod( 'second_port_item' );
    $port_3_id = get_theme_mod( 'third_port_item' );

    $port_1 = get_post( $port_1_id );
    $port_2 = get_post( $port_2_id );
    $port_3 = get_post( $port_3_id );
?>

<?php if ( get_option( 'jetpack_portfolio' ) ) : ?>
    <?php if( ( $port_1_id && $port_1 && $port_1->post_status === 'publish' ) ||
                ( $port_2_id && $port_2 && $port_2->post_status === 'publish' ) ||
                ( $port_3_id && $port_3 && $port_3->post_status === 'publish' ) ||
                get_theme_mod( 'portfolio_title' ) ||
                get_theme_mod( 'portfolio_subtitle' ) ) : ?>
    <section class="sp-portfolio-section">
        <div class="<?php if ( !get_theme_mod( 'boxed_site' ) ) : echo 'container sp-container'; endif; ?>">

            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <?php if( get_theme_mod( 'portfolio_title' ) ) : ?><h3><?php echo esc_html( get_theme_mod( 'portfolio_title' ) ); ?></h3><?php endif; ?>
                    <?php if( get_theme_mod( 'portfolio_subtitle' ) ) : ?>
                        <p class="text-muted sp-section-subtitle">
                            <?php echo esc_html( get_theme_mod( 'portfolio_subtitle' ) ); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->

            <?php if( $port_1 || $port_2 || $port_3 ) : ?>
                <div class="row">

                    <?php if( $port_1_id && $port_1 && $port_1->post_status === 'publish' ) : ?>
                        <div class="col-md-4">
                            <div class="card sp-portfolio-card">
                                <?php echo get_the_post_thumbnail( $port_1, 'medium', array( 'class' => 'card-img-top sp-port-img' ) ); ?>
                                <div class="card-img-overlay d-flex align-items-center">
                                    <div class="sp-card-content">
                                        <h5 class="card-title"><?php echo esc_html( $port_1->post_title ); ?></h5>
                                        <p class="card-text">
                                            <?php echo esc_html( softpoint_get_short_excerpt( 20, $port_1 ) ); ?>
                                        </p>
                                        <?php if( get_theme_mod( 'show_portfolio_buttons', '1' ) ) : ?>
                                            <a href="<?php echo esc_url( get_post_permalink( $port_1 ) ); ?>" class="btn btn-primary"><?php echo esc_html( get_theme_mod( 'portfolio_button_text', __( 'Read More', 'softpoint' ) ) ); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <!-- /.card-img-overlay -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col-md-4 -->
                    <?php endif; ?>

                    <?php if( $port_2_id && $port_2 && $port_2->post_status === 'publish' ) : ?>
                        <div class="col-md-4">
                            <div class="card sp-portfolio-card">
                                <?php echo get_the_post_thumbnail( $port_2, 'medium', array( 'class' => 'card-img-top sp-port-img' ) ); ?>
                                <div class="card-img-overlay d-flex align-items-center">
                                    <div class="sp-card-content">
                                        <h5 class="card-title"><?php echo esc_html( $port_2->post_title ); ?></h5>
                                        <p class="card-text">
                                            <?php echo esc_html( softpoint_get_short_excerpt( 20, $port_2 ) ); ?>
                                        </p>
                                        <?php if( get_theme_mod( 'show_portfolio_buttons', '1' ) ) : ?>
                                            <a href="<?php echo esc_url( get_post_permalink( $port_2 ) ); ?>" class="btn btn-primary"><?php echo esc_html( get_theme_mod( 'portfolio_button_text', __( 'Read More', 'softpoint' ) ) ); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <!-- /.card-img-overlay -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col-md-4 -->
                    <?php endif; ?>

                    <?php if( $port_3_id && $port_3 && $port_3->post_status === 'publish' ) : ?>
                        <div class="col-md-4">
                            <div class="card sp-portfolio-card">
                                <?php echo get_the_post_thumbnail( $port_3, 'medium', array( 'class' => 'card-img-top sp-port-img' ) ); ?>
                                <div class="card-img-overlay d-flex align-items-center">
                                    <div class="sp-card-content">
                                        <h5 class="card-title"><?php echo esc_html( $port_3->post_title ); ?></h5>
                                        <p class="card-text">
                                            <?php echo esc_html( softpoint_get_short_excerpt( 20, $port_3 ) ); ?>
                                        </p>
                                        <?php if( get_theme_mod( 'show_portfolio_buttons', '1' ) ) : ?>
                                            <a href="<?php echo esc_url( get_post_permalink( $port_3 ) ); ?>" class="btn btn-primary"><?php echo esc_html( get_theme_mod( 'portfolio_button_text', __( 'Read More', 'softpoint' ) ) ); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <!-- /.card-img-overlay -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col-md-4 -->
                    <?php endif; ?>

                </div>
                <!-- /.row -->
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>
<?php endif; ?>
