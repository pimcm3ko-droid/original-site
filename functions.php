<?php
add_action('wp_enqueue_scripts', 'add_styles');

function add_styles()
{
    // google fonts
    wp_register_style(
        'google-fonts_style',
        'https://fonts.googleapis.com/css2?family=Alexandria:wght@100..900&family=B612&family=Forum&display=swap',
        array(),
        '1.0'
    );

    // slick style
    wp_register_style(
        'slick_style',
        get_template_directory_uri() . '/css/slick.css',
        array(),
        '1.0'
    );

    // slick-theme style
    wp_enqueue_style(
        'slick-theme_style',
        get_template_directory_uri() . '/css/slick-theme.css',
        array('slick_style'),
        '1.0'
    );

    // reset styleを登録
    wp_register_style(
        'reset_style',
        'https://unpkg.com/ress/dist/ress.min.css',
        array(),
        '1.0'
    );

    // main style
    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/scss/style.css',
        array('reset_style', 'google-fonts_style','slick_style'),
        '1.0'
    );
}

// jsの読み込み
add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts() {
  // デフォルトのjQueryを削除
  wp_deregister_script('jquery');

  
  // jQueryを読み込む
  wp_register_script(
    'jquery_script',
    'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js',
    array(),
    '1.0',
    true
  );

  // slick（jQuery依存にする）
  wp_enqueue_script(
    'slick_script',
    get_template_directory_uri() . '/js/slick.js',
    array('jquery_script'),
    '1.8.1',
    true
  );

  // メインのスクリプトを読み込む
  wp_enqueue_script(
    'main_script',
    get_template_directory_uri() . '/js/main.js',
    array('jquery_script','slick_script'),
    '1.0',
    true
  );
}

// サムネイル設定を有効化
add_theme_support('post-thumbnails');

?>