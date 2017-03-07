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

?>