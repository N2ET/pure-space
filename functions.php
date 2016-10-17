<?php
/**
 * Created by PhpStorm.
 * User: GNPLX
 * Date: 2016/10/16
 * Time: 18:23
 */

add_action('after_setup_theme', 'gnpl_setup');


function gnpl_setup() {

    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

}

function gnpl_scripts() {
	wp_enqueue_style('gnpl', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'gnpl_scripts');
