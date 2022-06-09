<?php
//Aktiverar dynamisk meny
add_action('init', 'register_my_menus');

//Huvudmeny
function register_my_menus()
{
    register_nav_menus(array(
        'desktop-nav' => 'Top menu'
    ));
}

//Aktiverar Widget-area
add_action('widgets_init', 'kraft_widget_init');

function kraft_widget_init()
{
    register_sidebar(array(
        'name' => 'nyhetsbrev',
        'id' => 'nyhetsbrev',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'breadcrumbs',
        'id' => 'breadcrumbs'
    ));

    register_sidebar(array(
        'name' => 'big-image',
        'id' => 'big-image'
    ));

    register_sidebar(array(
        'name' => 'offer',
        'id' => 'offer',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
        'before_widget' => '<div>',
        'after_widget' => '</div>'
    ));
}

//Tar bort "comments" från WP-admin
add_action('admin_menu', 'remove_menus');
function remove_menus()
{
    remove_menu_page('edit-comments.php');
}

//Array med inställningar för dynamisk headerbild
$argsImg = array(
    'width' => 1500,
    'height' => 500,
    'default-image' => get_template_directory_uri() . '/images/header1.jpg',
    'uploads' => true
);

//Aktiverar dynamisk headerbild
add_theme_support('custom-header', $argsImg);

//Aktiverar utvald bild
add_theme_support('post-thumbnails');
//Storlekar för utvalda bilder
add_image_size('medium-page', 540, 360);
add_image_size('hotel-room-small', 540, 300);
add_image_size('big-header', 1500, 500);
add_image_size('spa-medium', 400, 300);
add_image_size('breakfast-big', 750, 500);
