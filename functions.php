<?php
/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:46:17 
 * @Last Modified by: Emma Forslund - emfo2102
 * @Last Modified time: 2022-08-14 21:36:59
 */

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
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => 'breadcrumbs',
        'id' => 'breadcrumbs',
    ));

    register_sidebar(array(
        'name' => 'hotel-form',
        'id' => 'hotel-form',
    ));

    register_sidebar(array(
        'name' => 'frontpage-info',
        'id' => 'frontpage-info',
        'before-widget' => '<div>',
        'after-widget' => '</div>',
        'before-title' => '<h3>',
        'after-title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'frontpage-ruta2',
        'id' => 'frontpage-ruta2',
        'before-widget' => '<div>',
        'after-widget' => '</div>',
        'before-title' => '<h3>',
        'after-title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'frontpage-ruta3',
        'id' => 'frontpage-ruta3',
        'before-widget' => '<div>',
        'after-widget' => '</div>',
        'before-title' => '<h3>',
        'after-title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'kampanj-ruta1',
        'id' => 'kampanj-ruta1',
        'before-widget' => '<div>',
        'after-widget' => '</div>',
        'before-title' => '<h3>',
        'after-title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'kampanj-ruta2',
        'id' => 'kampanj-ruta2',
        'before-widget' => '<div>',
        'after-widget' => '</div>',
        'before-title' => '<h3>',
        'after-title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'kampanj-text1',
        'id' => 'kampanj-text1',
    ));

    register_sidebar(array(
        'name' => 'kampanj-text2',
        'id' => 'kampanj-text2',
    ));

    register_sidebar(array(
        'name' => 'sociala-medier',
        'id' => 'sociala-medier',
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
    'uploads' => true,
);

//Aktiverar dynamisk headerbild
add_theme_support('custom-header', $argsImg);

//Aktiverar utvald bild
add_theme_support('post-thumbnails');
//Storlekar för utvalda bilder
add_image_size('medium-page', 540, 360);
add_image_size('hotel-room-small', 540, 300);
add_image_size('hotel-room-medium', 720, 400);
add_image_size('big-header', 1500, 500);
add_image_size('spa-medium', 400, 300);
add_image_size('breakfast-big', 750, 500);
add_image_size('personal-picture', 300, 300);

