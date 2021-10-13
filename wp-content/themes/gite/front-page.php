<?php
get_header();
?>
<header>
          <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>./assets/img/maison/jardin et maison 2 2.png" alt="Jardin et gite">
</header>
<!-- gite -->
<section class="container">
        <h1 class="text-center p-5 m-5 text-info"><?php echo get_the_title(1827) ?></h1>

        <div class="row align-items-center h-100">
          <div class="col-md-6 col-sm-12">
            <p class=" text-info text-center px-auto"><?php $post = get_post(1827); echo $content = $post->post_content; ?></p>
          </div>
          <div class="col-md-6 col-sm-12">
            <img class="mb-3 mx-auto d-block" src="<?php echo get_template_directory_uri() ?>./assets/img/maison/facade coté 2.png" alt="facade">
          </div>
          
        </div>
            <div class="d-flex justify-content-center">
                <a href="http://localhost/www/wordpress/locations/le-gite-aux-anges-2/"><button type="button" class="btn btn-info m-5">Plus d'information sur le gite</button></a>
            </div>
      </section>

      <!-- chambre -->
      <section class=" chambre">
          <div class="container">
            <h1 class="text-center p-5 text-info"><?php echo get_the_title(100) ?></h1>

            <div class="row align-items-center h-100">
              <div class="col-md-6 col-sm-12">
                <img class="mb-3 mx-auto d-block" src="<?php echo get_template_directory_uri() ?>./assets/img/maison/chambre 2.png" alt="facade">
              </div>
              <div class="col-md-6 col-sm-12">
                <p class=" text-info text-center px-auto"><?php $post = get_post(100); echo $content = $post->post_content; ?></p>
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <a href="http://localhost/www/wordpress/locations/chambre/"><button type="button" class="btn btn-info m-5">Plus d'information sur la chambre</button></a>  
          </div>
            
      </section>

      <!-- contact et réservation -->
      <section class="bg-info container mt-5 p-5">
        <h1 class="text-center text-light mb-5 ">Contact et réservation</h1>
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12  mb-4">
                <h5 class="text-center text-light">
                    Le gîte aux anges <br>
                    51300 Thieblemont-Farémont <br>
                    France <br>
                    Tel: 0635274060 <br>
                    frapart.estelle@gmail.com
                </h5>
                  <br>
                  <h5 class="text-center text-light ">Réserver en cliquant sur:</h5> 
                  <div class="d-flex justify-content-center ms-4">
                      <a href=""><img  src="<?php echo get_template_directory_uri() ?>./assets/img/logo/1200x630wa 1.png" alt="booking"></a>
                       <img  class="w-25" src="<?php echo get_template_directory_uri() ?>./assets/img/logo/Airbnb-Logo.png" alt="Airbnb-Logo">
                      <div class="logo d-flex flex-column ">
                          <a href=""><img class="mb-3" src="<?php echo get_template_directory_uri() ?>./assets/img/logo/Homerez-ART-LOGO-2018 3.png" alt="Homerez"></a>
                          <a href=""><img  class="" src="<?php echo get_template_directory_uri() ?>./assets/img/logo/Vector.svg" alt="leboncoin"></div></a>
                  </div>
            </div>
            <div class="col-md-5 col-sm-12 text-light text-center ">
              
              <?php echo apply_shortcodes( '[ninja_form id=1]	' ) ?>
               
            </div>
        </div>
      </section>

      <!-- Sac'créa et Frap'art -->
      <section class="chambre p-5 mt-5 text-center">
          <h4 class="mb-5">
            La propriétaire du gite a aussi une activité de création de sac et de rénovation de meuble. Vous pourrez trouver ses dernière réalisation ci-dessous: 
          </h4>
          <div class="d-flex justify-content-around flex-wrap ">
            <a href="http://localhost/www/wordpress/meuble/">
              <figure>
                <img src="<?php echo get_template_directory_uri() ?>./assets/img/sac et meuble/meuble.png" alt="meuble">
                <figcaption class="text-center">Frap'Art</figcaption>
              </figure>
            </a>
            <a href="http://localhost/www/wordpress/sac/">
              <figure>
                <img src="<?php echo get_template_directory_uri() ?>./assets/img/sac et meuble/sac et meuble 1.png" alt="sac">
                <figcaption class="text-center">Sac'créa</figcaption>
              </figure>
              </a>
          </div>
      </section>

<?php
get_footer();
?>