<?php


Softpoint_Kirki::add_section( 'upgrade_section', array(
    'title'          => esc_html__( 'Upgrade To Pro Version', 'softpoint' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 201,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


// Pro banner
Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'upgrade_custom_field',
	'section'     => 'upgrade_section',
	'default'     => '<div class="customizer-pro-promo"><h3>'. esc_html__( 'Upgrade To Pro Version', 'softpoint') .'</h3>
        <p>' . esc_html__( 'Let\'s make your website even better with a pro version!', 'softpoint' ) . '</p>
        <ul class="pro-features-list">
            <li>' . esc_html__( 'Premium Website Demos', 'softpoint' ) . '</li>
            <li>' . esc_html__( 'Google Fonts (Typography Options)', 'softpoint' ) . '</li>
            <li>' . esc_html__( 'Post Formats', 'softpoint' ) . '</li>
            <li>' . esc_html__( 'Transparent Header', 'softpoint' ) . '</li>
            <li>' . esc_html__( 'Advanced Customization', 'softpoint' ) . '</li>
            <li>' . esc_html__( 'Advanced Cover Section with Video Background', 'softpoint' ) . '</li>
            <li>' . esc_html__( 'Remove Footer Branding', 'softpoint' ) . '</li>
            <li>' . esc_html__( 'Footer Widgets', 'softpoint' ) . '</li>
            <li>' . esc_html__( 'Priority support and many other features to make your website better...', 'softpoint' ) . '</li>
        </ul>
        <a class="button button-primary" href="https://themes.salttechno.com/wordpress-theme/softpoint-pro/" target="_blank">' . esc_html__( 'Learn More', 'softpoint' ) . '</a></div>',
) );
