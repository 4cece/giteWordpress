<?php get_header();?>

<div id="content" class="container">

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
        <section class="container">
        <h1 class="text-center p-5 text-info"><?php the_title(); ?></h1>

        <div class="row align-items-center h-100">
          <div class="col-md-6 col-sm-12">
            <p class=" text-info text-center px-auto"><?php the_content(); ?>
</p>
          </div>
          <div class="col-md-6 col-sm-12">
              <?php the_post_thumbnail('post-thumbnail',['class'=>'img-fluid']) ?>
            <!-- <img class="mb-3 mx-auto d-block" src="./assets/img/maison/facade coté 2.png" alt="facade"> -->
          </div>
          
        </div>
            <div class="d-flex justify-content-center">
                <a href="gite.html"><button type="button" class="btn btn-info m-5">Plus d'information sur <?php the_title(); ?></button></a>
            </div>
      </section>
	<?php endwhile; endif; ?>

    </div>
    <div id="background"></div>

<?php get_footer(); ?>