<?php get_header();
$id = get_the_ID();
  ?> 
<div class="container mb-5">
  <div class="row">
    <img class="col align-self-center" src="<?php echo get_template_directory_uri() ?>./assets/img/sac et meuble/logo frap.png" alt="logo Frap'art">
    <p class="col align-self-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius incidunt magnam similique doloremque excepturi. Beatae qui vero expedita quisquam non commodi eum ipsum reprehenderit enim maiores, nobis ullam, natus necessitatibus.</p>

  </div>

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