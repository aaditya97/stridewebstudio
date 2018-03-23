<section class="sp-topbar-bg">
    <div class="<?php if ( get_theme_mod( 'header_width', 'default' ) === 'default' ) : echo 'container sp-container'; else : echo 'container-fluid'; endif; ?>">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-left">
                <?php dynamic_sidebar( 'sidebar-topbar-left' ); ?>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <?php dynamic_sidebar( 'sidebar-topbar-right' ); ?>
            </div>
        </div>
    </div>
</section>
