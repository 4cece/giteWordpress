<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-center">
        <div class="container-fluid">
          <a class="navbar-brand" href="http://localhost/www/wordpress/"><img class="w-50" src="<?php echo get_theme_mod("footer_options_5")?>" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
         
          <?php wp_nav_menu( array(
                 'theme_location'   => 'header-menu',
                 'container_class'  => 'collapse navbar-collapse justify-content-end',
                 'container_id'     => 'navbarContent',
                 'menu_class'       => "navbar-nav",
                 'add_li_class'     => 'nav-item',
                 'link_class'       => 'nav-link',
                                  ) ); ?>
        </div>
      </nav>
    
