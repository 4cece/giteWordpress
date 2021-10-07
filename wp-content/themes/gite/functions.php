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


  // Register post type Locations

  function add_post_type_locations(){
      register_post_type("locations", [
        "label" =>    "Locations",
        "has_archive"=> true ,
        "labels"=>    [
                    'name'=> 'location',
                    'add_new_item'=>'Ajouter une location',
                    'search_items'=>'Rechercher une location',
					'edit_item' => 'Modifier une location',
					'all_items' => 'Toutes les locations'  // affiché dans le sous menu

        ],
        "public" =>   true,
        "menu_icon"=> "dashicons-admin-home",
        "supports"=>  ['title', 'editor', 'thumbnail', 'author', 'excerpt' ],
		"show_in_rest"=> true

        
      ]);

  }

  add_action('init', 'add_post_type_locations');

  function add_post_type_bonsPlans(){
	register_post_type("bonsPlans", [
	  "label" =>    "Les bons plans",
	  "has_archive"=> true ,
	  "labels"=>    [
				  'name'=> 'Les bons plans ',
				  'add_new_item'=>'Ajouter un bon plan',
				  'search_items'=>'Rechercher un bon plan',
				  'edit_item' => 'Modifier un bon plan',
				  'all_items' => 'Toutes les bons plans'  // affiché dans le sous menu

	  ],
	  "public" =>   true,
	  "menu_icon"=> "dashicons-admin-home",
	  "supports"=>  ['title', 'editor', 'thumbnail', 'author', 'excerpt' ],
	  "show_in_rest"=> true
	  
	]);


}

add_action('init', 'add_post_type_bonsPlans');


function add_post_type_sacmeuble(){
	register_post_type("sacmeuble", [
	  "label" =>    "Sac'créa & Frap'art",
	  "has_archive"=> true ,
	  "labels"=>    [
				  'name'=> "Sac'créa & Frap'art ",
				  'add_new_item'=>'Ajouter un produit',
				  'search_items'=>'Rechercher un produit',
				  'edit_item' => 'Modifier un produit',
				  'all_items' => 'Toutes les produits'  // affiché dans le sous menu

	  ],
	  "public" =>   true,
	  "menu_icon"=> "dashicons-tag",
	  "supports"=>  ['title', 'editor', 'thumbnail', 'author', 'excerpt' ],
	  "show_in_rest"=> true
	  
	]);

}

add_action('init', 'add_post_type_sacmeuble');
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
// tarif

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


// Metabox image https://codexcoach.com/upload-multiple-featured-images-in-a-custom-post-wordpress/

// Add Meta Box to post
add_action( 'add_meta_boxes', 'multi_media_uploader_meta_box' );

function multi_media_uploader_meta_box() {
	add_meta_box( 'my-post-box', 'Galerie d\'image', 'multi_media_uploader_meta_box_func', 'locations', 'normal', 'high' );
}

function multi_media_uploader_meta_box_func($post) {
	$banner_img = get_post_meta($post->ID,'post_banner_img',true);
	?>
	<style type="text/css">
		.multi-upload-medias ul li .delete-img { position: absolute; right: 3px; top: 2px; background: aliceblue; border-radius: 50%; cursor: pointer; font-size: 14px; line-height: 20px; color: red; }
		.multi-upload-medias ul li { width: 120px; display: inline-block; vertical-align: middle; margin: 5px; position: relative; }
		.multi-upload-medias ul li img { width: 100%; }
	</style>

	<table cellspacing="10" cellpadding="10">
		<tr>
			<td>Banner Image</td>
			<td>
				<?php echo multi_media_uploader_field( 'post_banner_img', $banner_img ); ?>
			</td>
		</tr>
	</table>

	<script type="text/javascript">
		jQuery(function($) {

			$('body').on('click', '.wc_multi_upload_image_button', function(e) {
				e.preventDefault();

				var button = $(this),
				custom_uploader = wp.media({
					title: 'Insert image',
					button: { text: 'Use this image' },
					multiple: true 
				}).on('select', function() {
					var attech_ids = '';
					attachments
					var attachments = custom_uploader.state().get('selection'),
					attachment_ids = new Array(),
					i = 0;
					attachments.each(function(attachment) {
						attachment_ids[i] = attachment['id'];
						attech_ids += ',' + attachment['id'];
						if (attachment.attributes.type == 'image') {
							$(button).siblings('ul').append('<li data-attechment-id="' + attachment['id'] + '"><a href="' + attachment.attributes.url + '" target="_blank"><img class="true_pre_image" src="' + attachment.attributes.url + '" /></a><i class=" dashicons dashicons-no delete-img"></i></li>');
						} else {
							$(button).siblings('ul').append('<li data-attechment-id="' + attachment['id'] + '"><a href="' + attachment.attributes.url + '" target="_blank"><img class="true_pre_image" src="' + attachment.attributes.icon + '" /></a><i class=" dashicons dashicons-no delete-img"></i></li>');
						}

						i++;
					});

					var ids = $(button).siblings('.attechments-ids').attr('value');
					if (ids) {
						var ids = ids + attech_ids;
						$(button).siblings('.attechments-ids').attr('value', ids);
					} else {
						$(button).siblings('.attechments-ids').attr('value', attachment_ids);
					}
					$(button).siblings('.wc_multi_remove_image_button').show();
				})
				.open();
			});

			$('body').on('click', '.wc_multi_remove_image_button', function() {
				$(this).hide().prev().val('').prev().addClass('button').html('Add Media');
				$(this).parent().find('ul').empty();
				return false;
			});

		});

		jQuery(document).ready(function() {
			jQuery(document).on('click', '.multi-upload-medias ul li i.delete-img', function() {
				var ids = [];
				var this_c = jQuery(this);
				jQuery(this).parent().remove();
				jQuery('.multi-upload-medias ul li').each(function() {
					ids.push(jQuery(this).attr('data-attechment-id'));
				});
				jQuery('.multi-upload-medias').find('input[type="hidden"]').attr('value', ids);
			});
		})
	</script>

	<?php
}


function multi_media_uploader_field($name, $value = '') {
	$image = '">Add Media';
	$image_str = '';
	$image_size = 'full';
	$display = 'none';
	$value = explode(',', $value);

	if (!empty($value)) {
		foreach ($value as $values) {
			if ($image_attributes = wp_get_attachment_image_src($values, $image_size)) {
				$image_str .= '<li data-attechment-id=' . $values . '><a href="' . $image_attributes[0] . '" target="_blank"><img src="' . $image_attributes[0] . '" /></a><i class="dashicons dashicons-no delete-img"></i></li>';
			}
		}

	}

	if($image_str){
		$display = 'inline-block';
	}

	return '<div class="multi-upload-medias"><ul>' . $image_str . '</ul><a href="#" class="wc_multi_upload_image_button button' . $image . '</a><input type="hidden" class="attechments-ids ' . $name . '" name="' . $name . '" id="' . $name . '" value="' . esc_attr(implode(',', $value)) . '" /><a href="#" class="wc_multi_remove_image_button button" style="display:inline-block;display:' . $display . '">Remove media</a></div>';
}

// Save Meta Box values.
add_action( 'save_post', 'wc_meta_box_save' );

function wc_meta_box_save( $post_id ) {
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;	
	}

	if( !current_user_can( 'edit_post' ) ){
		return;	
	}
	
	if( isset( $_POST['post_banner_img'] ) ){
		update_post_meta( $post_id, 'post_banner_img', $_POST['post_banner_img'] );
	}
}


// Menu personnalisé

function gite_customiser($wp_customize){
// ajouter un panel
  $wp_customize->add_panel("info_principal", [
    "title" => __("information principale"),
    "description" => "Les informations essentielles de l'entreprise",
    "priority" => 1
  ]);
// ajouter une section
  $wp_customize->add_section("ouvertire de l\'entreprise", [
    "title" => __("horaires d\'ouverture"),
    "priority" => 1,
    "panel" => "info_principal"

  ]);

// ajouter un setting
  $wp_customize->add_setting("settings_ouverture", [

  ]);
// ajouter un contrôle
  $wp_customize->add_control("zone_horaire", [
    "label"=> __("horaire d'ouverture"),
    "type" => "textarea",
    "section"=> "ouvertire de l\'entreprise",
    "setting"=> "settings_ouverture"
  ]);
}

add_action('customise_register', 'gite_customiser');




function replace_content($content) {
	$content = htmlentities($content, 0, 'utf-8');
	$content = str_replace("&nbsp;", " ", $content);
	$content = html_entity_decode($content);
return $content;
}
add_filter('the_content','replace_content', 999999999);