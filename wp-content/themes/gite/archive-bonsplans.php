<?php get_header();?>

  <div class="container">
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
<?php if ($condition) : ?>
   <p> Some html code </p> <!-- or -->
   <?php echo "some php code"; ?>
<?php else : ?>
    <p> Some html code </p> <!-- or -->
   <?php echo "some php code"; ?>
<?php endif;  ?>

    <article class="row plan align-items-center h-100 m-5">
        <div class="col-md-6 px-0"><?php the_post_thumbnail('post-thumbnail',['class'=>'img-fluid']) ?></div>
        <div class=" col-md-6 p-3">
           <h3><?php the_title(); ?></h3>
           <?php the_content(); ?> 
        </div>
    </article>
    
    <?php endwhile; endif; ?>
  </div>

<?php get_footer(); ?>