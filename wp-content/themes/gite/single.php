<?php get_header();?>

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	<div class="container">
            <div class="row">
                <div class="col">
                 Article
                 <h1 class="text-center"><?php the_title(); ?></h1>
                 <?php the_post_thumbnail('post-thumbnail', ['class'=>'img-fluid']); ?>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

	<?php endwhile; endif; ?>


<?php get_footer(); ?>