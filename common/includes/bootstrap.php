<?php

function theme_enqueue_styles() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2');

    // テーマのスタイルシート（必要に応じて）
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // jQuery（WordPress同梱のものを利用）
    wp_enqueue_script('jquery');

    // Bootstrap JS and Popper.js
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery', 'popper-js'), '4.5.2', true);
    wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js', array('jquery'), '2.5.3', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');