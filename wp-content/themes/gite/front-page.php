<?php
get_header();
?>
<header>
          <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>./assets/img/maison/Rectangle 2.png" alt="Jardin et gite">
</header>
<!-- gite -->
<section class="container">
        <h1 class="text-center p-5 text-info"><?php echo get_the_title(99) ?></h1>

        <div class="row align-items-center h-100">
          <div class="col-md-6 col-sm-12">
            <p class=" text-info text-center px-auto"><?php $post = get_post(99); echo $content = $post->post_content; ?></p>
          </div>
          <div class="col-md-6 col-sm-12">
            <img class="mb-3 mx-auto d-block" src="<?php echo get_template_directory_uri() ?>./assets/img/maison/facade coté 2.png" alt="facade">
          </div>
          
        </div>
            <div class="d-flex justify-content-center">
                <a href="http://localhost/www/wordpress/locations/gite/"><button type="button" class="btn btn-info m-5">Plus d'information sur le gite</button></a>
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
                <p class=" text-info text-center px-auto"><?php $post = get_post(99); echo $content = $post->post_content; ?></p>
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <a href="http://localhost/www/wordpress/locations/chambre/"><button type="button" class="btn btn-info m-5">Plus d'information sur la chambre</button></a>  
          </div>
            
      </section>

      <!-- contact et réservation -->
      <section class="bg-info container mt-5 p-5">
        <h1 class="text-center text-light mb-5 ">Contact et réservation</h1>
        <div class="row">
            <div class="col-md-6 col-sm-12  mb-4">
                <h5 class="text-center text-light">
                    Le gîte aux anges <br>
                    51300 Thieblemont-Farémont <br>
                    France <br>
                    Tel: 0635274060 <br>
                    frapart.estelle@gmail.com
                  </h5>
                  <br>
                  <h5 class="text-center text-light ">Réserver</h5> 
                  <div class="d-flex justify-content-center ms-4">
                      <img  src="<?php echo get_template_directory_uri() ?>./assets/img/logo/1200x630wa 1.png" alt="booking">
                      <img  class="w-25" src="<?php echo get_template_directory_uri() ?>./assets/img/logo/Airbnb-Logo.png" alt="Airbnb-Logo">
                      <div class="logo d-flex flex-column ">
                          <img class="mb-3" src="<?php echo get_template_directory_uri() ?>./assets/img/logo/Homerez-ART-LOGO-2018 3.png" alt="Homerez">
                         <img  class="" src="<?php echo get_template_directory_uri() ?>./assets/img/logo/Vector.svg" alt="leboncoin"></div>
                  </div>
            </div>
            <div class="col-md-5 col-sm-12 ">
                <form action="" class="d-flex flex-column gap-3 ">
                    <input  class="form-control" type="text" placeholder="Nom">
                    <input  class="form-control" type="text" placeholder="Email">
                    <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Message, question, demande de date réservation"></textarea>
                    <div class="d-flex justify-content-center">
                      <button type="button" class="btn btn-light w-50">Envoyer</button>
                    </div>
                  </form>
            </div>
        </div>
      </section>

      <!-- Sac'créa et Frap'art -->
      <section class="chambre p-5 mt-5">
          <h4 class="mb-5">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat minima odio eius totam minus impedit laudantium? Ab similique error cum ut fugit nisi, pariatur officia. Mollitia temporibus eveniet quos natus.
          </h4>
          <div class="d-flex justify-content-around flex-wrap ">
            <figure>
                <img src="<?php echo get_template_directory_uri() ?>./assets/img/sac et meuble/meuble.png" alt="meuble">
                <figcaption class="text-center">Frap'Art</figcaption>
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri() ?>./assets/img/sac et meuble/sac et meuble 1.png" alt="sac">
                <figcaption class="text-center">Sac'créa</figcaption>
            </figure>
          </div>
          <div class="d-flex justify-content-center">
            <a href="http://localhost/www/wordpress/?page_id=94"><button type="button" class="btn btn-info m-5">Avoir plus d'information</button></a>  
        </div>
      </section>

<?php
get_footer();
?>