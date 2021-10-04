<?php
/*
  Template Name: Les bons plans
*/
?>

<?php get_header();?>

<h1 class="text-center m-5 p-5">Les bons plans</h1>
      <div class="container">
        <article class="row plan align-items-center h-100 mb-5">
          <img class="col px-0" src="<?php echo get_template_directory_uri() ?>./assets/img/bons plans/nigloland-parc-attraction.jpg" alt="nigloland-parc-attraction">
          <div class=" col p-3">
           <h3>Nigloland</h3>
           <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo eius iure ducimus hic voluptatem officia autem, fugiat est laboriosam, sit aspernatur, error eligendi. Odio atque fugiat iure dicta, impedit fuga!</p>
           <p>A 45 minutes</p>
          </div>
         </article>

         <article class="row plan align-items-center h-100 mb-5">
          <div class="col p-3">
           <h3>Les magasins d'usine</h3>
           <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo eius iure ducimus hic voluptatem officia autem, fugiat est laboriosam, sit aspernatur, error eligendi. Odio atque fugiat iure dicta, impedit fuga!</p>
           <p>A 45 minutes</p>
          </div>
          <img class="col px-0" src="<?php echo get_template_directory_uri() ?>./assets/img/bons plans/image_secondaire-1024x640.jpg" alt="magasins d'usine">
         </article>

         <article class="row plan align-items-center h-100 mb-5">
          <img class="col px-0" src="<?php echo get_template_directory_uri() ?>./assets/img/bons plans/balade-bateau-lac-du-der.jpg" alt="lac du der">
          <div class=" col p-3">
           <h3>Le lac du Der</h3>
           <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo eius iure ducimus hic voluptatem officia autem, fugiat est laboriosam, sit aspernatur, error eligendi. Odio atque fugiat iure dicta, impedit fuga!</p>
           <p>A 10 minutes</p>
          </div>
         </article>
      </div>


<?php get_footer(); ?>