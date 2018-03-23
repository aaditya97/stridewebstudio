<?php
    $loading_img_url = get_template_directory_uri() . '/assets/images/spinner.svg';
?>

<div class="sp-loading-wrap d-flex align-items-center justify-content-center">
    <img src="<?php echo esc_url( $loading_img_url ); ?>" class="loading-img" alt="<?php esc_attr_e( 'Loading', 'softpoint' ); ?>" />
</div>

<?php if( get_theme_mod( 'show_goto_top', '1' ) ) : ?>
    <div class="sp-goto-top">
        <span class="fas fa-chevron-up"></span>
    </div>
<?php endif; ?>
