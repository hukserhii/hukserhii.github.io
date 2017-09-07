<?php
/**
 * Чистый Шаблон для разработки
 * Функции шаблона
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */


show_admin_bar(false);


remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head','qtranxf_wp_head_meta_generator');
remove_action( 'wp_head','wp_syntax_head');


//register_nav_menus( array( // Регистрируем 2 меню
//	'top' => 'Верхнее меню',
//	'left' => 'Нижнее'
//) );
//add_theme_support('post-thumbnails'); // Включаем поддержку миниатюр
set_post_thumbnail_size(254, 190); // Задаем размеры миниатюре

//if ( function_exists('register_sidebar') )
//register_sidebar(); // Регистрируем сайдбар


add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
if (!function_exists('add_scripts')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
    function add_scripts() { // добавление скриптов
        if(is_admin()) return false; // если мы в админке - ничего не делаем
        wp_deregister_script('jquery'); // выключаем стандартный jquery
        wp_enqueue_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js','','',true); // добавляем свой
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js','','',true); // бутстрап
        wp_enqueue_script('retina', get_template_directory_uri() . '/bower_components/retina.js/dist/retina.js','','',true); // и скрипты шаблона
//        wp_enqueue_script('validator', get_template_directory_uri() . '/js/validator.min.js','','',true); // и скрипты шаблона
//        wp_enqueue_script('form-scripts', get_template_directory_uri() . '/js/form-scripts.js','','',true); // и скрипты шаблона
        wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js','','',true); // и скрипты шаблона
        wp_enqueue_script('transition', get_template_directory_uri() . '/js/transition.js','','',true); // и скрипты шаблона
        wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js','','',true); // и скрипты шаблона
        wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js','','',true); // и скрипты шаблона
        wp_enqueue_script('google', '//maps.googleapis.com/maps/api/js?key=AIzaSyBqdF9SVT-nQi8vVDAW-aoW_fWo2etlZlg&extension=.js','','',true); // и скрипты шаблона
        wp_enqueue_script('krainePrintMap', get_template_directory_uri() . '/js/ukrainePrintMap.js','','',true); // и скрипты шаблона
        wp_enqueue_script('classie', get_template_directory_uri() . '/bower_components/classie/classie.js','','',true); // и скрипты шаблона
        wp_enqueue_script('waypoints', get_template_directory_uri() . '/bower_components/jquery-waypoints/lib/jquery.waypoints.min.js','','',true); // и скрипты шаблона
//        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js','','',true); // и скрипты шаблона
    }
}

add_action('wp_footer',  'add_styles'); // приклеем ф-ю на добавление стилей в хедер
if (!function_exists('add_styles')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
    function add_styles()
    { // добавление стилей
        if (is_admin()) return false; // если мы в админке - ничего не делаем
        wp_enqueue_style('norm', get_template_directory_uri() . '/css/normalize.min.css'); // бутстрап
        wp_enqueue_style('bs', get_template_directory_uri() . '/css/bootstrap.min.css'); // основные стили шаблона
        wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css'); // основные стили шаблона
        wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css'); // основные стили шаблона
        wp_enqueue_style('querie', get_template_directory_uri() . '/css/styles.css'); // основные стили шаблона
        wp_enqueue_style('main', get_template_directory_uri() . '/css/queries.css'); // основные стили шаблона
        wp_enqueue_style('animate', get_template_directory_uri() . '/bower_components/animate.css/animate.min.css'); // основные стили шаблона
        wp_enqueue_style('fa',  '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); // основные стили шаблона
    }
}

//
//// Заносим CSS стили и JS скрипты в функцию twentytwelve_scripts_styles
//function twentytwelve_scripts_styles(){
//
//    // Регистрирую стили
//    wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.min.css', array(), '1.1', 'screen');
//    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array('my_reset'), '1.2', 'screen');
//    wp_register_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', array('my_reset'), '1.3', 'screen');
//    wp_register_style( 'flexslider', get_template_directory_uri() . 'c/ss/flexslider.css', array('my_reset'), '1.4', 'screen');
//    wp_register_style( 'styles', get_template_directory_uri() . '/css/styles.css', array('my_reset'), '1.5', 'screen');
//    wp_register_style( 'queries', get_template_directory_uri() . '/css/queries.css', array('my_reset'), '1.6', 'screen');
//    wp_register_style( 'animate', get_template_directory_uri() . '/bower_components/animate.css/animate.min.css', array('my_reset'), '1.7', 'screen');
//    wp_register_style( 'font-awesome', get_template_directory_uri() . '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array('my_reset'), '1.8', 'screen');
//
//
//
//    // Подключаю стили
////    wp_enqueue_style( 'normalize');
////    wp_enqueue_style( 'bootstrap');
////    wp_enqueue_style( 'fancybox');
////    wp_enqueue_style( 'flexslider');
////    wp_enqueue_style( 'styles');
////    wp_enqueue_style( 'queries');
////    wp_enqueue_style( 'animate');
////    wp_enqueue_style( 'font-awesome');
//
//
//
//    // Подключать стили можно и сразу, без регистрации. Тогда необходимо прописать все параметры внутри wp_enqueue_style();
//    // Пример подключение стандартного обязательного файла стилей style.css
//    wp_enqueue_style( 'twentytwelve-style', get_stylesheet_uri(), 'css/normalize.min.css', array(), '1.1', 'screen');
//    wp_enqueue_style( 'twentytwelve-style', get_stylesheet_uri(), 'css/bootstrap.min.css', array(), '1.2', 'screen');
//
//    // Регистируем файл с JS скриптом
////    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), '1.0', false);
//
//    // Подключаем файл с JS скриптом
////    wp_enqueue_script( 'jquery');
//
//    // Подключаем файл с JS скриптом сразу без регистрации
//    wp_enqueue_script( 'twentytwelve-navigation', get_template_directory_uri() . 'js/vendor/jquery-1.11.2.min.js', array(), '1.0', true );
//    wp_enqueue_script( 'twentytwelve-navigation', get_template_directory_uri() . '/bower_components/retina.js/dist/retina.js', array(), '1.0', true );
//    wp_enqueue_script( 'twentytwelve-navigation', get_template_directory_uri() . '/js/validator.min.js', array(), '1.0', true );
//    wp_enqueue_script( 'twentytwelve-navigation', get_template_directory_uri() . '/js/form-scripts.js', array(), '1.0', true );
//    wp_enqueue_script( 'twentytwelve-navigation', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), '1.0', true );
//    wp_enqueue_script( 'twentytwelve-navigation', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0', true );
//    wp_enqueue_script( 'twentytwelve-navigation', get_template_directory_uri() . '/js/scripts.js', array(), '1.0', true );
//    wp_enqueue_script( 'twentytwelve-navigation', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), '1.0', true );
//    wp_enqueue_script( 'twentytwelve-navigation', get_template_directory_uri() . '//maps.googleapis.com/maps/api/js?key=AIzaSyBqdF9SVT-nQi8vVDAW-aoW_fWo2etlZlg&extension=.js', array(), '1.0', true );
//    wp_enqueue_script( 'twentytwelve-navigation', get_template_directory_uri() . '/js/ukrainePrintMap.js', array(), '1.0', true );
//    wp_enqueue_script( 'twentytwelve-navigation', get_template_directory_uri() . '/bower_components/classie/classie.js', array(), '1.0', true );
//    wp_enqueue_script( 'twentytwelve-navigation', get_template_directory_uri() . '/bower_components/jquery-waypoints/lib/jquery.waypoints.min.js', array(), '1.0', true );
//
//}
//
//// Создаем экшн в котором подключаем скрипты подключенные внутри функции twentytwelve_scripts_styles
//add_action('wp_enqueue_scripts', 'twentytwelve_scripts_styles', 'wp_enqueue_style', 1 );

?>