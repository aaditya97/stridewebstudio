<div class="wrap about-wrap">
    <h1><?php esc_html_e( 'Welcome to SoftPoint!', 'softpoint' ); ?></h1>
    <p class="about-text">
        <?php echo wp_kses_post( __( 'SoftPoint is a perfect theme for your business website. It is fast & light-weight and works with almost all popular WordPress plugins. It suits small businesses, creative agencies, corporate businesses, startups, IT companies and consultancies. It is completely tested and has been thoroughly reviewed by expert WordPress reviewers. It works well with all latest page builders like Elementor, Beaver Builder, SiteOrigin etc. ', 'softpoint' ) ); ?>
    </p>
    <p class="about-text">
        <?php echo wp_kses_post( __( 'You can easily reach out to us in case of queries.  Even with the free version of this theme, you get support from our team as well as from the WordPress community.', 'softpoint' ) ) ?>
    </p>
    <div class="wp-badge"><?php esc_html_e( 'SoftPoint', 'softpoint' ); ?></div>
    <div class="salt-badge">
        <a href="https://themes.salttechno.com" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brought-by-salt.png'); ?>" alt="<?php echo esc_attr__( 'Brought to you by Salt', 'softpoint' ); ?>" /></a>
    </div>


    <?php
        $active_tab = isset( $_GET['tab'] ) ? sanitize_text_field( wp_unslash( $_GET['tab'] ) ) : 'getting_started';
    ?>

    <h2 class="nav-tab-wrapper wp-clearfix">
        <a href="?page=about-softpoint&tab=getting_started" class="nav-tab <?php echo $active_tab == 'getting_started' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e( 'Getting Started', 'softpoint' ); ?></a>
        <a href="?page=about-softpoint&tab=recommended_actions" class="nav-tab <?php echo $active_tab == 'recommended_actions' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e( 'Recommended Actions', 'softpoint' ); ?></a>
        <a href="?page=about-softpoint&tab=support" class="nav-tab <?php echo $active_tab == 'support' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e( 'Support', 'softpoint' ); ?></a>
        <a href="?page=about-softpoint&tab=free_pro" class="nav-tab <?php echo $active_tab == 'free_pro' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e( 'Free vs Pro', 'softpoint' ); ?></a>
    </h2>

    <?php
        if( $active_tab == 'support' ) {
            get_template_part( 'inc/views/support' );
        }
        elseif ( $active_tab == 'recommended_actions' ) {
            get_template_part('inc/views/recommended-actions');
        }
        elseif ( $active_tab == 'free_pro' ) {
            get_template_part('inc/views/free-pro');
        }
        else {
            get_template_part('inc/views/getting-started');
        }
    ?>


</div>
<!-- /.wrap -->
