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

// Nav

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

//  add class li

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// add class link

function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
  };
  add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );


  // Register posy type Locations

  function add_post_type_locations(){
      register_post_type("locations", [
        "label" =>    "Locations",
        "has_archive"=> true ,
        "labels"=>    [
                    'name'=> 'location',
                    'add_new_item'=>'Ajouter une location',
                    'search_items'=>'Rechercher une location'
        ],
        "public" =>   true,
        "menu_icon"=> "dashicons-admin-home",
        "supports"=>  ['title', 'editor', 'thumbnail', 'author' ]
        
      ]);
  }

  add_action('init', 'add_post_type_locations');

//   function add_post_type_categories(){
//     register_post_type("Domaine", [
//       "label" =>    "Domaines",
//       "has_archive"=> true ,
//       "labels"=>    [
//                   'name'=> 'location',
//                   'add_new_item'=>'Ajouter une location',
//                   'search_items'=>'Rechercher une location'
//       ],
//       "public" =>   true,
//       "menu_icon"=> "dashicons-admin-home",
//       "supports"=>  ['title', 'editor', 'thumbnail', 'author' ]
      
//     ]);
// }

// add_action('init', 'add_post_type_locations');


// meta_box

add_action('add_meta_boxes','init_metabox');
function init_metabox(){
  add_meta_box('price', 'Tarif', 'tarif', 'locations', 'normal');
}

function tarif($post){
  $val = get_post_meta($post->ID,'_price',true);
  echo '<label for="tarif_meta">Tarif :</label>';
  echo '<input id="tarif_meta" type="text" name="tarif_loc" value="'.$val.'" />';
}

add_action('save_post','save_metabox');
function save_metabox($post_id){
if(isset($_POST['tarif_loc']))
  update_post_meta($post_id, '_price', sanitize_text_field($_POST['tarif_loc']));
}
