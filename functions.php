<?php
function my_custom_theme_scripts() {
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');
add_theme_support("post-thumbnails");
//echo get_stylesheet_uri();
//die();

function sample_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'sample'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'sample'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'sample_widgets_init');

function sample_menus() {
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary Menu', 'sample-text-domain'),
        )
    );
}
add_action('after_setup_theme', 'sample_menus');