<?php if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
add_theme_support( 'custom-background' );
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
add_theme_support( 'custom-header' );?>