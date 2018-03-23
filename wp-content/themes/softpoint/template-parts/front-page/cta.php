<section class="sp-cta-section">
    <div class="<?php if ( !get_theme_mod( 'boxed_site' ) ) : echo 'container sp-container'; endif; ?>">
        <div class="row align-items-center">
            <div class="col-md-8">
                <p class="mb-2 mb-md-0 h5 text-light text-center text-md-left">
                    <?php echo esc_html( get_theme_mod( 'cta_text', __( 'Did you like this website? It\'s built using SoftPoint.', 'softpoint' ) ) ); ?>
                </p>
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4 text-center text-md-right">
                <a href="<?php echo esc_url( get_theme_mod( 'cta_btn_link', 'https://downloads.wordpress.org/theme/softpoint.zip' ) ); ?>" class="btn btn-light"><?php echo esc_html( get_theme_mod( 'cta_btn_text', __( 'Download Now', 'softpoint' ) ) ); ?></a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
    </div>
</section>
