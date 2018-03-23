<div class="sp-section-wrap">
    <p class="sp-intro-para">
        <?php esc_html_e( 'Getting started with SoftPoint is as easy as step 1, 2, 3 and 4. We have mentioned these steps below so that beginners can understand them easily. Refresh this page if you think you have completed the step but it is not updated here.', 'softpoint' ); ?>
    </p>
    <div class="sp-col sp-col-full">
        <div class="postbox">
            <h4 class="col-title"><?php esc_html_e( '1. Install & Activate Required Plugins', 'softpoint' ); ?></h4>
            <p>
                <?php echo wp_kses_post( __( 'It is highly recommended that you install all of the mentioned plugins so that it will be easy for you to setup your website quickly.', 'softpoint' ) ); ?>
            </p>
            <h4><?php esc_html_e( 'Recommended Plugins:', 'softpoint' ); ?></h4>
            <ul>
                <li><?php esc_html_e( 'Kirki Toolkit', 'softpoint' ); ?></li>
                <li><?php esc_html_e( 'Jetpack', 'softpoint' ); ?></li>
                <li><?php esc_html_e( 'Contact Form 7', 'softpoint' ); ?></li>
                <li><?php esc_html_e( 'One Click Demo Import', 'softpoint' ); ?></li>
            </ul>

            <?php if ( class_exists( 'Kirki' ) && defined( 'JETPACK__VERSION' ) && defined( 'WPCF7_VERSION' ) && class_exists( 'OCDI_Plugin' ) ) : ?>
                <h5 class="step-completed"><span class="dashicons dashicons-yes"></span> <?php esc_html_e( 'All above plugins are already active. You have completed step 1.', 'softpoint' ); ?></h5>
            <?php else: ?>
                <a href="?page=tgmpa-install-plugins" class="button"><?php esc_html_e( 'Install & Activate Now', 'softpoint' ); ?></a>
            <?php endif; ?>
        </div>
    </div>
    <!-- /.sp-col sp-col-full -->

    <div class="sp-col sp-col-full">
        <div class="postbox">
            <h4 class="col-title"><?php esc_html_e( '2. Enable Jetpack Portfolio', 'softpoint' ); ?></h4>
            <p>
                <?php esc_html_e( 'We are using "Jetpack Portfolio" module to display portfolio items on homepage. You can enable this module from jetpack settings.', 'softpoint' ); ?>
            </p>
            <p>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/jetpack-portfolio.jpg'); ?>" alt="<?php echo esc_attr__( 'Enable Jetpack Portfolio', 'softpoint' ); ?>" class="jet-port" />
            </p>
            <?php
                $softpoint_portfolio_enabled = false;
                if( get_option( 'jetpack_portfolio' ) ) {
                    $softpoint_portfolio_enabled = true;
                }
            ?>
            <?php if ( defined( 'JETPACK__VERSION' ) ) : ?>
                <?php if ( $softpoint_portfolio_enabled ) : ?>
                    <h5 class="step-completed"><span class="dashicons dashicons-yes"></span> <?php esc_html_e( 'Jetpack Portfolio is enabled. Step 2 is complete.', 'softpoint' ); ?></h5>
                <?php else : ?>
                    <a href="?page=jetpack#/settings" class="button"><?php esc_html_e( 'Go-to Jetpack Settings', 'softpoint' ); ?></a>
                <?php endif; ?>
            <?php else: ?>
                <h5 class="step-not-completed"><span class="dashicons dashicons-info"></span> <?php esc_html_e( 'You need "Jetpack" to be installed and active for this. You have not completed step 1.', 'softpoint' ); ?></h5>
            <?php endif; ?>
        </div>
    </div>
    <!-- /.sp-col sp-col-full -->

    <div class="sp-col sp-col-full">
        <div class="postbox">
            <h4 class="col-title"><?php esc_html_e( '3. Import Demo Content', 'softpoint' ); ?></h4>
            <p>
                <?php echo wp_kses_post( __( 'We have made it really easy to import demo content on your website. You must have installed "One Click Demo Import" plugin to complete this step.', 'softpoint' ) ); ?>
            </p>
            <p>
                <strong><em><?php esc_html_e( 'You can skip this step if you want to create something totally different than our demo.', 'softpoint' ) ?></em></strong>
            </p>
            <?php $softpoint_demo_imported = get_option( 'softpoint-demo-imported' ); ?>
            <?php if( ! empty( $softpoint_demo_imported ) ) : ?>
                <h5 class="step-completed"><span class="dashicons dashicons-yes"></span> <?php esc_html_e( 'You have imported demo content. Step 3 is complete. If you want, you can import another demo.', 'softpoint' ); ?></h5>
            <?php endif; ?>
            <?php if ( ! get_option( 'jetpack_portfolio' ) ) : ?>
                <p>
                    <em><?php esc_html_e( 'Portfolio section might not be displayed properly as you have not completed step 2 mentioned above.', 'softpoint' ); ?></em>
                </p>
            <?php endif; ?>
            <?php if ( class_exists( 'Kirki' ) && defined( 'JETPACK__VERSION' ) && defined( 'WPCF7_VERSION' ) && class_exists( 'OCDI_Plugin' ) ) : ?>
                <a href="?page=pt-one-click-demo-import" class="button"><?php esc_html_e( 'Import Demo', 'softpoint' ); ?></a>
            <?php else: ?>
                <h5 class="step-not-completed"><span class="dashicons dashicons-info"></span> <?php esc_html_e( 'You need to complete steps 1 before importing demo content.', 'softpoint' ); ?></h5>
            <?php endif; ?>
        </div>
    </div>
    <!-- /.sp-col sp-col-full -->

    <div class="sp-col sp-col-full">
        <div class="postbox">
            <h4 class="col-title"><?php esc_html_e( '4. Customize As Per Your Choice', 'softpoint' ); ?></h4>
            <p>
                <?php echo wp_kses_post( __( 'You can easily customize your website\'s look with a live preview. SoftPoint is fully integrated with WordPress\' built-in Customizer. Give it a try now!', 'softpoint' ) ); ?>
            </p>
            <a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button"><?php esc_html_e( 'Go to the Customizer', 'softpoint' ); ?></a>
        </div>
    </div>
    <!-- /.sp-col sp-col-full -->
</div>
<!-- /.sp-section-wrap -->
