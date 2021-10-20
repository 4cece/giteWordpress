<?php get_header();
$id = get_the_ID();
  ?> 

<div class="container mb-5">

<H1 class="text-center text-info p-5 m-5">Frap'Art</H1>
<p class="text-center text-primary fw-bold">Dans un monde ou l’écologie a une importance fondamentale, transformer , c’est relooker !! 
  Nous vous proposons des meubles rénovés mais aussi des ateliers de rénovation de meuble ainsi que des ateliers de couture. Rien ne se perd et tout se 
  transforme ! Voici quelques exemples de ce que nous proposons: 
</p>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php if($id % 2): ?>

      <article class="test position-relative mt-5">
        <div class=" photo1 w-25"><?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']) ?></div>
        <div class=" description bg-danger  top-50 end-0 p-2 text-end text-light d-flex justify-content-end">
          <?php the_content(); ?>
        </div>
      </article>

    <?php else : ?>

      <article class=" test position-relative d-flex justify-content-end">
            <div class=" description bg-danger top-50 start-0 p-2 top-50 start-0 d-flex justify-content-start text-start text-light">
              <?php the_content(); ?>
            </div>
            <div class=" photo1 w-25"><?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']) ?></div>
        </article>

        <?php endif; ?>
        <?php endwhile; endif; ?>

  </div>
<?php get_footer(); ?>