<?php get_header();?>

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	<!-- <div class="container">
            <div class="row">
                <div class="col">
                 Article
                 <h1 class="text-center"><?php the_title(); ?></h1>
                 <?php the_post_thumbnail('post-thumbnail', ['class'=>'img-fluid']); ?>
                    
                </div>
            </div>
        </div>
        <?php echo get_post_meta($post->ID,'_price',true); ?> -->


    <div id="content" class="container">
        <!-- présentation -->       

          <div class="row align-items-center h-100 mb-5">
            <h1 class="text-center p-5 text-info"><?php the_title(); ?></h1>
            <div class="col-md-6">
              <?php echo the_post_thumbnail('post-thumbnail', ['class'=>'img-fluid']); ?>
            </div>
            <div class="col-md-6">
              <p class="ps-5 text-center"><?php the_content(); ?>
              </p>
            </div>
          </div>

          <div class="row align-items-center h-100 mb-5">
            <div class="col-md-6">
              <p class="ps-5 text-center"><?php the_excerpt(); ?>
              </p>
            </div>
            <div class="col-md-6">
              <?php echo the_post_thumbnail('post-thumbnail', ['class'=>'img-fluid']); ?>
            </div>   
         </div>
    </div>
      
        
            <!-- tarif -->
        <div class="tarif p-5 my-5 container-fluid">
            <h1 class="text-center pb-5 text-info">Tarifs</h1>
            <p><?php echo get_post_meta($post->ID,'_price',true); ?></p>    
        </div>
        


    <?php
// Use below code to show metabox values from anywhere
$id = get_the_ID();
	$banner_img = get_post_meta($id, 'post_banner_img', true);	
	$banner_img = explode(',', $banner_img);
	if(!empty($banner_img)) {
		?>
		<table class="plugin-detail-tabl container mb-5" width="100%" cellspacing="0" cellpadding="0">
			<tbody class="d-flex flex-wrap justify-content-center">
				<?php  foreach ($banner_img as $attachment_id) { ?>
					<tr>
						<td><img class="galerie" src="<?php echo wp_get_attachment_url( $attachment_id);?>"></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		<?php
	} ?>

<?php endwhile; endif; ?>


 <?php get_footer(); ?>