<?php function my_theme_register_menus() {
    register_nav_menus( array(
        'main-navigation' => __( 'Main Navigation', 'my-theme' ),
        'footer-navigation' => __( 'Footer Navigation', 'my-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'my_theme_register_menus' );
?>