<?php

// دالة لتحميل ملفات CSS و JavaScript الخاصة بالقالب
function custom_files()
{
    // تحميل ملف CSS الرئيسي الخاص بالقالب
    wp_enqueue_style('custom_main_styles', get_theme_file_uri('/build/style-index.css'));

    // تحميل ملف CSS إضافي
    wp_enqueue_style('custom_extra_styles', get_theme_file_uri('/build/index.css'));

    // تحميل مكتبة Font Awesome
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    // تحميل خطوط Google Fonts
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    // تحميل ملف JavaScript الرئيسي
    wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);

    // تمرير بيانات إلى JavaScript
    wp_localize_script('main-js', 'customData', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
    ));
}
add_action('wp_enqueue_scripts', 'custom_files');

// دالة لتفعيل بعض ميزات الثيم
function custom_features()
{
    add_theme_support('title-tag');

    register_nav_menu('headerMenulocation', 'Header Menu Location');
    register_nav_menu('footerlocationOne', 'Footer Location One');
    register_nav_menu('footerlocationTow', 'Footer Location Two');
}
add_action('after_setup_theme', 'custom_features');

// دالة لتسجيل نوع منشور مخصص: الفعاليات (Events)

