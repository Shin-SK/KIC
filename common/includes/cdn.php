<?php


//drawer
function enqueue_drawer_scripts() {
	// drawer.css
    wp_enqueue_style(
        'drawer-css',
        'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css',
        array(),
        null
    );


    // drawer.js
    wp_enqueue_script(
        'drawer-js',
        'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js',
        array('jquery', 'iscroll'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_drawer_scripts');

// slick
function enqueue_slick_scripts() {
    wp_enqueue_style(
        'slick-css',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css',
        array(),
        null
    );
    wp_enqueue_style(
        'slick-theme-css',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css',
        array('slick-css'),
        null
    );
    wp_enqueue_script(
        'slick-js',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js',
        array('jquery'),
        null,
        true
    );

    // CF7カスタムJS
    wp_enqueue_script(
        'cf7',
        get_template_directory_uri() . '/common/js/cf7.js',
        array('jquery'),
        false,
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_slick_scripts');


//fontawsome
function enqueue_fontawesome_script() {
    wp_enqueue_script(
        'fontawesome-kit',
        'https://kit.fontawesome.com/66f29bbc2b.js',
        array(),
        null,
        false // trueにするとフッターで読み込み
    );
}
add_action('wp_enqueue_scripts', 'enqueue_fontawesome_script');


// GSAP
function enqueue_gsap_scripts(){

    wp_enqueue_script(
        'gsap-js',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js',
        array('jquery'),
        null,
        true
    );

	// ScrollToPlugin
	wp_enqueue_script(
		'gsap-ScrollToPlugin-js',
		'https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollToPlugin.min.js',
		array('gsap-js'),
		null,
		true    
	);

	// ScrollTriggerプラグイン
	wp_enqueue_script(
		'gsap-scrolltrigger-js',
		'https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js',
		array('gsap-js'),
		null,
		true
	);

}
add_action('wp_enqueue_scripts', 'enqueue_gsap_scripts');


//custom
function enqueue_custom_scripts(){

    // Custom global
    wp_enqueue_script(
        'global',
        get_template_directory_uri() . '/common/js/global.js',
        array('jquery'),
        false,
        true
    );

    // Custom JS
    wp_enqueue_script(
        'custom',
        get_template_directory_uri() . '/common/js/custom.js',
        array('jquery'),
        false,
        true
    );

    // Custom CSS
    wp_enqueue_style(
        'custom',
        get_template_directory_uri() . '/common/css/custom.css',
        array(),
        null
    );

}


add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


