<?php get_header();?>


    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <article class="row plan align-items-center h-100 m-5">
        <div class="col-md-6 px-0"><?php the_post_thumbnail('post-thumbnail',['class'=>'img-fluid']) ?></div>
        <div class=" col-md-6 p-3">
           <h3><?php the_title(); ?></h3>
           <p><?php the_content(); ?></p>
        </div>
    </article>
    
	<?php endwhile; endif; ?>

   

<?php get_footer(); ?>
