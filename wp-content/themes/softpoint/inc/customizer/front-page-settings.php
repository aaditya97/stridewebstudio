<?php

Softpoint_Kirki::add_panel( 'frontpage_panel', array(
    'priority'        => 22,
    'title'           => esc_html__( 'Frontpage Settings', 'softpoint' ),
    'active_callback' => 'softpoint_is_frontpage_settings_panel_active',
) );

include( get_template_directory() . '/inc/customizer/frontpage/cover.php');
include( get_template_directory() . '/inc/customizer/frontpage/services.php');
include( get_template_directory() . '/inc/customizer/frontpage/main-content.php');
include( get_template_directory() . '/inc/customizer/frontpage/cta.php');
include( get_template_directory() . '/inc/customizer/frontpage/portfolio.php');

// Add alert if not static frontpage with frontpage template
Softpoint_Kirki::add_section( 'frontpage_alert_section', array(
    'title'           => esc_html__( 'Frontpage Settings', 'softpoint' ),
    'panel'           => '',
    'priority'        => 22,
    'capability'      => 'edit_theme_options',
    'theme_supports'  => '',
    'active_callback' => 'softpoint_is_frontpage_settings_alert_active',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
    'type'            => 'custom',
    'settings'        => 'frontpage_inactive_alert',
    'section'         => 'frontpage_alert_section',
    'active_callback' => 'softpoint_is_frontpage_settings_alert_active',
    'default'         => '<div class="notice notice-error">
                            <h4><em>' . esc_html__( 'Frontpage settings are enabled only if following conditions are true:', 'softpoint') . '<em></h4>
                            <ol>
                                <li>' . esc_html__( 'Select a Static Page as a homepage from "Homepage Settings".', 'softpoint' ) . '</li>
                                <li>' . esc_html__( 'The page which is selected as "Homepage" should use "Frontpage" page template.', 'softpoint' ) . '</li>
                            </ol>
                        </div>',
) );
