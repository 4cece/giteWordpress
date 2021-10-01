<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );


// style CSS

function add_theme_style() {
    wp_enqueue_style( 'global', get_template_directory_uri() . '/assets/css/app.css');
}

add_action( 'wp_enqueue_scripts', 'add_theme_style' );

// script JS

function add_theme_scripts() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js');
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


