<?php get_header();?>

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	<div class="container m-5 p-5">
            <div class="row">
                <div class="col text-center">
                    <h1><?php the_title()?></h1>
                    <p><?php the_content() ?></p>
                </div>
            </div>
        </div>

	<?php endwhile; endif; ?>


<?php get_footer(); ?>