<section class="sp-front-content">
    <div class="<?php if ( !get_theme_mod( 'boxed_site' ) ) : echo 'container sp-container'; endif; ?>">

        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <?php if( get_theme_mod( 'main_content_title' ) ) : ?><h3><?php echo esc_html( get_theme_mod( 'main_content_title' ) ); ?></h3><?php endif; ?>
                <?php if( get_theme_mod( 'main_content_subtitle' ) ) : ?>
                    <p class="text-muted sp-section-subtitle pb-3">
                        <?php echo esc_html( get_theme_mod( 'main_content_subtitle' ) ); ?>
                    </p>
                <?php endif; ?>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <?php the_content(); ?>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
    </div>
</section>
