<?php
/*
  Template Name: Chambre
*/
?>
<?php get_header();?>

<div id="content" class="container">
        <!-- présentation -->       

          <div class="row align-items-center h-100 mb-5">
            <h1 class="text-center p-5 text-info">La chambre d'hôtes</h1>
            <div class="col-md-6">
              <img class="w-50 mb-3" src="<?php echo get_template_directory_uri() ?>./assets/img/chambre/7.jpg" alt="chambre">
            </div>
            <div class="col-md-6">
              <p class="ps-5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam omnis earum odio.
                Nobis vitae error, quod
                repellendus in reprehenderit ducimus unde consequatur suscipit debitis esse omnis earum at nulla fugiat!
                dus magni suscipit dolor, impedit
                praesentium nam numquam dicta distinctio beatae in reiciendis laborum quos? Quaerat maxime rerum tempora in!
                reprehenderit tempore, labore dolor, ipsum accusantium aut, ut doloremque dicta quis velit sunt sapiente?
              </p>
            </div>
          </div>

          <div class="row align-items-center h-100 mb-5">
            <div class="col-md-6">
              <p class="ps-5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam omnis earum odio.
                Nobis vitae error, quod
                repellendus in reprehenderit ducimus unde consequatur suscipit debitis esse omnis earum at nulla fugiat!
                dus magni suscipit dolor, impedit
                praesentium nam numquam dicta distinctio beatae in reiciendis laborum quos? Quaerat maxime rerum tempora in!
                reprehenderit tempore, labore dolor, ipsum accusantium aut, ut doloremque dicta quis velit sunt sapiente?
              </p>
            </div>
            <div class="col-md-6">
              <img class="w-50 mb-3" src="<?php echo get_template_directory_uri() ?>./assets/img/chambre/11.jpg" alt="chambre">
            </div>   
     
      
        
            <!-- tarif -->
        <div class="tarif p-5 my-5">
            <h1 class="text-center pb-5 text-info">Tarifs</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque provident, dolore totam voluptates amet earum! Doloremque eveniet cumque, 
                 officia! Expedita soluta, temporibus magni unde fugit dicta totam, ab praesentium, voluptate culpa
                  eveniet! amet reiciendis delectus corrupti impedit unde sequi perspiciatis culpa, consectetur
                   ullam fugit?</p>    
        </div>
        
        <!-- Galerie-->
        <div>
            <h1 class="text-center p-5 text-info">Galerie</h1>
            <div class="gap-2 m-5">
                <img class="galeriec" src="<?php echo get_template_directory_uri() ?>./assets/img/chambre/12.jpg" alt="maison">
                <img class="galeriec" src="<?php echo get_template_directory_uri() ?>./assets/img/chambre/1.jpg" alt="chambre">
                <img class="galeriec" src="<?php echo get_template_directory_uri() ?>./assets/img/chambre/2.jpg" alt="chambre">
                <img class="galeriec" src="<?php echo get_template_directory_uri() ?>./assets/img/chambre/3.jpg" alt="salle de bain">
                <img class="galeriec" src="<?php echo get_template_directory_uri() ?>./assets/img/chambre/4.jpg" alt="coin cuisine">
                <img class="galeriec" src="<?php echo get_template_directory_uri() ?>./assets/img/chambre/6.jpg" alt="chambre">
                <img class="galeriec" src="<?php echo get_template_directory_uri() ?>./assets/img/chambre/8.jpg" alt="chambre">
                <img class="galeriec" src="<?php echo get_template_directory_uri() ?>./assets/img/chambre/9.jpg" alt="chambre">
                
            </div>
        </div>
  </div>
</div>
<?php get_footer(); ?>