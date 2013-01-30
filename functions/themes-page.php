<?php

// Add scripts and stylesheet

function enqueue_styles() {

    global $themename, $themeslug, $options;
    wp_register_style($themeslug . 'storecss', get_template_directory_uri() . '/functions/theme-page-style.css');


    wp_enqueue_style($themeslug . 'storecss');
}

    ?>