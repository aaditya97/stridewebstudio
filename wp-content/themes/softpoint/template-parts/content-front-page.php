<?php

if ( get_theme_mod( 'show_cover_section', '1' ) ) {
    get_template_part( 'template-parts/front-page/cover' );
}
if ( get_theme_mod( 'show_services_section', '1' ) ) {
    get_template_part( 'template-parts/front-page/services' );
}
if ( get_theme_mod( 'show_main_content_section', '0' ) ) {
    get_template_part( 'template-parts/front-page/main-content' );
}
if ( get_theme_mod( 'show_cta_section', '1' ) ) {
    get_template_part( 'template-parts/front-page/cta' );
}
if ( get_theme_mod( 'show_portfolio_section', '1' ) ) {
    get_template_part( 'template-parts/front-page/portfolio' );
}
