<?php get_header();?>
<?php $id=get_the_ID() ?>
  <div class="container pt-5">
    <p class="text-center">Pendand votre séjour chez nous voici certain endroit à proximité que vous pouvez visiter:</p>
    <!-- <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<?php the_ID(); ?>

  
    
    <?php endwhile; endif; ?> -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php if($id % 2): ?>

    <article class="row plan align-items-center h-100 m-5">
        <div class="col-md-6 px-0"><?php the_post_thumbnail('post-thumbnail',['class'=>'img-fluid']) ?></div>
        <div class=" col-md-6 p-3">
           <h3><?php the_title(); ?></h3>
           <?php the_content(); ?> 
        </div>
    </article>

    <?php else : ?>

      <article class="row plan align-items-center h-100 m-5">
        <div class=" col-md-6 p-3">
           <h3><?php the_title(); ?></h3>
           <?php the_content(); ?> 
        </div>
        <div class="col-md-6 px-0"><?php the_post_thumbnail('post-thumbnail',['class'=>'img-fluid']) ?></div>
    </article>

  <?php endif; ?>
  <?php endwhile; endif; ?>

  </div>

<?php get_footer(); ?>