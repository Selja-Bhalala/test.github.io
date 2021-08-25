<?php
/**
* Template Name: Services
*
* @package Tagline
*/
get_header();
?>

<?php 

$is_display  = get_field('is_display');
$title  = get_field('title');
$content_text  = get_field('content_text');
$banner_image  = get_field('banner_image');
if($is_display == "Yes"):

?>
<section class="subpage-banner">
	<div class="container">
		<div class="row flex-row-reverse align-items-center">
			<div class="col-12 col-lg-6">
				<div class="img anim1">
					<img src="<?php echo $banner_image['url'] ?>" alt="Services Banner">
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="content">
					<h1 class="anim2"><?php echo $title ?></h1>
					<p class="anim2">
						<?php echo $content_text ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php

endif;



if( have_rows('Sections') ): ?>
	
	<section class="services-bg pt-0">
		<div class="container">
		<?php
		$count = 0;
		while ( have_rows('Sections') ) : the_row();

			if( get_row_layout() == 'services' ): 
				$title = get_sub_field('title');
				$title_hash_tag = get_sub_field('title_hash_tag');
				$content_text = get_sub_field('content_text');
				$image = get_sub_field('image');
				$service_list = get_sub_field('service_list');

				$animate_class= $count%2 ? "anim1" : "anim2";
				$stucture_class= $count%2 ? "" : "flex-row-reverse";
			?>
	    

			<div class="row <?php echo $stucture_class; ?> align-items-center" id="<?php echo $title_hash_tag; ?>">
				<div class="col-12 col-lg-5">
					<div class="img anim1">
						<img src="<?php echo $image['url'] ?>" alt="<?php echo $title; ?>">
					</div>
				</div>
				<div class="col-12 col-lg-7">
					<h4 class="<?php echo $animate_class; ?> text-default"><?php echo $title; ?></h4>
					<p class="<?php echo $animate_class; ?>"><?php echo $content_text; ?></p>
					<ul class="arrow_list">
						<?php

						$featured_posts = get_sub_field('services');
						if( $featured_posts ): ?>
						    <?php foreach( $featured_posts as $post ): 
						        setup_postdata($post); 

						        ?>
						     
						        <li class="<?php echo $animate_class; ?>">
									<a href="<?php $post->post_status == "publish" ? the_permalink() : "#"; ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/arrow-grey.png" alt="arrow"><span class="service-texts"><?php the_title(); ?></span>
									</a>
								</li>

						    <?php endforeach; ?>
						   
						    <?php 
						    wp_reset_postdata(); ?>
						<?php endif; ?>

					</ul>
				</div>				
			</div>

    		<?php

   			endif; 
   			$count++;
    	endwhile; ?>
    	</div>
    </section>
    <?php

else :

endif; 

$bottom_title  = get_field('bottom_title');
$bottom_button_text  = get_field('bottom_button_text');
$bottom_button_link  = get_field('bottom_button_link');
?>

<section class="letstalk-bg">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-auto">
				<h2 class="anim2"><?php echo $bottom_title; ?></h2>
			</div>
			<div class="col-12 col-sm-auto ml-auto">
				<a href="<?php echo $bottom_button_link; ?>" class="btn btn-light color-black anim1"><?php echo $bottom_button_text; ?></a>
			</div>
		</div>
	</div>
</section>


<?php
get_footer();
 ?>
