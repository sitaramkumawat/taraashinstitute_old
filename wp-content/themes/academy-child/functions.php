<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );  
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );

}

add_theme_support( 'custom-logo' );

add_action( 'widgets_init', 'theme_custom_widgets_init' );
function theme_custom_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer Sidebar 1 ', 'academy' ),
        'id' => 'foo-1',
        'description' => __( 'Widgets in this area will be shown to website footer', 'academy' ),
		'before_widget' => '<div id="block1" class="widget-block">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer_title">',
		'after_title'   => '</h2>',
    ) );
	register_sidebar( array(
        'name' => __( 'Footer Sidebar 2 ', 'academy' ),
        'id' => 'foo-2',
        'description' => __( 'Widgets in this area will be shown to website footer', 'academy' ),
		'before_widget' => '<div id="block2" class="widget-block">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer_title">',
		'after_title'   => '</h2>',
    ) );
	register_sidebar( array(
        'name' => __( 'Footer Sidebar 3 ', 'academy' ),
        'id' => 'foo-3',
        'description' => __( 'Widgets in this area will be shown to website footer', 'academy' ),
		'before_widget' => '<div id="block3" class="widget-block">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer_title">',
		'after_title'   => '</h2>',
    ) );
	register_sidebar( array(
        'name' => __( 'Footer Sidebar 4 ', 'academy' ),
        'id' => 'foo-4',
        'description' => __( 'Widgets in this area will be shown to website footer', 'academy' ),
		'before_widget' => '<div id="block4" class="widget-block">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer_title">',
		'after_title'   => '</h2>',
    ) );
}

?>