<?php get_header();
$id = get_the_ID();
$title = get_the_title();

// if($title == "meuble"){
//   echo "ça marche";
// }elseif($title == "sac"){
//   echo "merde";
// }
  ?> 

<div class="container">

  <H1 class="text-center text-info m-5">Sac'créa</H1>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php if($id % 2): ?>

      <article class="test position-relative mt-5">
        <div class=" photo w-25"><?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']) ?></div>
        <div class=" description bg-primary  top-50 end-0 p-2 text-end text-light d-flex justify-content-end">
          <?php the_content(); ?>
        </div>
      </article>

    <?php else : ?>

      <article class=" test position-relative d-flex justify-content-end">
            <div class=" description bg-primary top-50 start-0 p-2 top-50 start-0 d-flex justify-content-start text-start text-light">
              <?php the_content(); ?>
            </div>
            <div class=" photo w-25"><?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']) ?></div>
        </article>

        <?php endif; ?>
        <?php endwhile; endif; ?>
 
  <H1 class="text-center text-info m-5">Frap'Art</H1>




<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="test position-relative d-flex justify-content-end mb-5">
            <div class=" description bg-danger top-50 start-0  p-2 d-flex justify-content-start text-start text-light">
                <?php the_content(); ?>
            </div>
            <div class=" photo1 w-25"><?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']) ?></div>
        </article>

  <?php endwhile; endif; ?>

  </div>
<?php get_footer(); ?>