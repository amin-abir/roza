<?php 
function roza_custom_css() {
    wp_enqueue_style('roza-custom', get_template_directory_uri() . '/assets/css/custom-style.css' );
    $header_text_color = get_header_textcolor();
    $roza_custom_css = '';
    $roza_custom_css .= '
        .site-title a,
        .site-description,
        .site-title a:hover {
            color: #'.esc_attr( $header_text_color ).' ;
        }
    ';
    wp_add_inline_style( 'roza-custom', $roza_custom_css );
}
add_action( 'wp_enqueue_scripts', 'roza_custom_css' );