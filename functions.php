<?php

/* Menu */

register_nav_menu('menu', 'Основное меню');

/* Thumbnails */

add_theme_support( 'post-thumbnails');

/* Slider */

add_action( 'init', 'slider_index' );

function slider_index(){
    $args = array(
        'public' => true,
        'supports' => array( 'title', 'thumbnail' ),
        'menu_icon' => get_template_directory_uri() . '/img/slider.png',
        'labels' => array(
            'name' => 'Слайдер',
            'all_items' => 'Все слайды',
            'add_new' => 'Добавить слайд',
            'add_new_item' => 'Новый слайд',
            'edit_item' => 'Редактировать слайд',
            'search_items' => 'Поиск слайдов',
            'featured_image' => 'Изображение'
        )
    );
    register_post_type( 'slider', $args );
}

/* Fotos Home */

add_action( 'init', 'fotos_index' );

function fotos_index() {
    $args = array(
        'public' => true,
        'supports' => array( 'title', 'thumbnail' ),
        'menu_icon' => get_template_directory_uri() . '/img/fotos.png',
        'labels' => array(
            'name' => 'Фото на главной',
            'all_items' => 'Все фото',
            'add_new' => 'Добавить фото',
            'add_new_item' => 'Новое фото',
            'edit_item' => 'Редактировать фото',
            'search_items' => 'Поиск фото',
            'featured_image' => 'Фото'
        )
    );
    register_post_type( 'fotos', $args );
}

/* Reviews */

add_action( 'init', 'reviews' );

function reviews() {
    $args = array(
        'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon' => get_template_directory_uri() . '/img/reviews.png',
        'labels' => array(
            'name' => 'Отзывы',
            'all_items' => 'Все отзывы',
            'add_new' => 'Добавить отзыв',
            'add_new_item' => 'Новый отзыв',
            'edit_item' => 'Редактировать отзыв',
            'search_items' => 'Поиск отзывов',
            'featured_image' => 'Фото'
        )
    );
    register_post_type( 'reviews', $args );
}

/* Video */

add_action( 'init', 'video' );

function video() {
    $args = array(
        'public' => true,
        'supports' => array( 'title', 'editor' ),
        'menu_icon' => get_template_directory_uri() . '/img/video.png',
        'labels' => array(
            'name' => 'Видео',
            'all_items' => 'Все видео',
            'add_new' => 'Добавить видео',
            'add_new_item' => 'Новое видео',
            'edit_item' => 'Редактировать видео',
            'search_items' => 'Поиск видео'
        )
    );
    register_post_type( 'video', $args );
}

/* Info Footer */

register_sidebar( array(
    'name' => 'Подвал слева',
    'id' => 'footer_left',
    'description' => 'Место для контактной информации',
    'before_widget' => '',
    'after_widget' => ''
));

register_sidebar( array(
    'name' => 'Подвал справа',
    'id' => 'footer_right',
    'description' => 'Место для ссылок',
    'before_widget' => '',
    'after_widget' => ''
));

/* Our team */

add_action( 'init', 'our_team' );

function our_team() {
    $args = array(
        'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon' => get_template_directory_uri() . '/img/team.png',
        'labels' => array(
            'name' => 'Наша команда',
            'all_items' => 'Все участники',
            'add_new' => 'Добавить участника',
            'add_new_item' => 'Новый участник',
            'edit_item' => 'Редактировать участника',
            'search_items' => 'Поиск участников',
            'featured_image' => 'Фото'
        )
    );
    register_post_type( 'team', $args );
}

/* Page excerpt */

function page_excerpt() {
    add_post_type_support('page', array('excerpt'));
}

add_action('init', 'page_excerpt');

/* Shortcode gallery */

function code_gallery( $attr, $text='' ) {
    $img_src = explode(',', $attr['ids']);
    $return = '<div class="container"><div class="gallery"><div class="galleryContainer">';
    foreach( $img_src as $item ){
        $img_url = wp_get_attachment_image( $item, 'full' );
        $return .= '<div class="slide">' . $img_url . '</div>';
    }
    $return .= '</div></div></div>';
    echo $return;
    
}
add_shortcode( 'gallery-code', 'code_gallery' );

/* Info Header */

register_sidebar( array(
    'name' => 'Шапка по центру',
    'id' => 'header_center',
    'description' => 'Место для телефонов',
    'before_widget' => '',
    'after_widget' => ''
));

register_sidebar( array(
    'name' => 'Шапка справа',
    'id' => 'header_right',
    'description' => 'Место для e-mail',
    'before_widget' => '',
    'after_widget' => ''
));

?>