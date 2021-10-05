<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- <div class="collapse navbar-collapse" id="navbarNavDropdown">
             <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Accueil</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Locations                  </a>
                  <ul class="dropdown-menu bg-danger text-primary" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="gite.html">Le gite aux anges</a></li>
                    <li><a class="dropdown-item" href="chambre.html">La chambre d'hôtes</a></li>
                  </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact & accès</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bonsplans.html">Les bons plans</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sac&meuble.html">Sac'créa & Frap'art</a>
              </li>
            </ul> 
          </div> -->
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
    
