<?php
/**
* Template Name: About Us
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

?>

<?php if( have_rows('Sections') ): ?>

<section class="about-bg">
		<div class="container">
	<?php
	while ( have_rows('Sections') ) : the_row();
	?>

			<?php  if( get_row_layout() == 'about_section' ): 
				$title = get_sub_field('title');
        		$content_text = get_sub_field('content_text');
        		$image = get_sub_field('image');

			?>
			<div class="row flex-row-reverse">
				<div class="col-12 col-lg-5">
					<div class="img anim1">
						<img src="<?php echo $image['url'] ?>" alt="<?php echo $title; ?>">
					</div>
				</div>
				<div class="col-12 col-lg-7">
					<h4 class="anim2 text-default"><?php echo $title; ?></h4>
					<?php echo $content_text; ?>
				</div>
			</div>
			<div class="row">
				<?php 
					if( have_rows('vision_box') ): 
						while( have_rows('vision_box') ): the_row();

							$icon  = get_sub_field('icon');
							$title  = get_sub_field('title');
							$content_text  = get_sub_field('content_text');
							

					?>
				<div class="col-12 col-lg-4">
					<div class="visionmission-box">
						<div class="icon anim6">
							<?php echo file_get_contents( $icon['url'] ) ?>
						</div>
						<h4 class="anim4"><?php echo $title; ?></h4>
						<p class="anim4"><?php echo $content_text; ?></p>
					</div>
				</div>
				<?php
					endwhile;
				endif;
				?>
			</div>
			<?php 

			elseif( get_row_layout() == 'experience_section' ): 
	        	$title = get_sub_field('title');
	        	$content_text = get_sub_field('content_text');
	        	$sub_title = get_sub_field('sub_title');
	        	$sub_content_text = get_sub_field('sub_content_text');
			?>
			
			
			<div class="row">
						<div class="col-12 col-lg-10 mx-auto">
							<div class="experience-box">
								<h2 class="anim2 text-default"><?php echo $title ?></h2>
								<p class="text-center anim1"><?php echo $content_text ?></p>
								<div class="row">
									<div class="col-12 col-lg-6">
										<h3 class="anim2"><?php echo $sub_title ?></h3>
										<h6 class="anim2"><?php echo $sub_content_text ?> </h6>
									</div>
									<div class="col-12 col-lg-6">
										<div class="row">
											<?php 
												if( have_rows('counter') ): 
													while( have_rows('counter') ): the_row();

														$count_number  = get_sub_field('count_number');
														$count_text  = get_sub_field('count_text');
														$class_name  = get_sub_field('class_name');
														$box_animate_class  = get_sub_field('box_animate_class');
													

												?>
											<div class="col-12 col-lg-6 <?php echo $class_name  ?>">
												<div class="brands-boxs <?php echo $box_animate_class  ?>">
													<h3><?php echo $count_number  ?></h3>
													<p><?php echo $count_text  ?></p>
												</div>
											</div>
											<?php
												endwhile;
											endif;
											?>

										</div>
									</div>
								</div>
							</div>
						</div>
			</div>

			<?php 

			elseif( get_row_layout() == 'team_section' ): 
	        	$title = get_sub_field('title');
	        	$content_text = get_sub_field('content_text');
	   
			?>
			
			
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="team-main">
						<h2 class="anim2 text-default"><?php echo $title; ?></h2>
						<p class="anim1"><?php echo $content_text; ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="team-main mt-0">
						<div class="owl-carousel">
							<?php 
								if( have_rows('members') ): 
									while( have_rows('members') ): the_row();

										$title  = get_sub_field('title');
										$designation  = get_sub_field('designation');
										$image  = get_sub_field('image');
									

								?>
							<div class="item">
								<div class="img">
									<img src="<?php echo $image['url'] ?>" alt="<?php echo $title ?>" class="anim6">
									<h3 class="anim4"><?php echo $title ?></h3>
									<p class="anim4"><?php echo $designation ?></p>
								</div>
							</div>
							<?php
									endwhile;
								endif;
								?>
						</div>
					</div>
				</div>
			</div>

			<?php endif; ?>

			
		
<?php
	endwhile;?>
</div>
	</section>
	<?php

endif; 

if( have_rows('Sections') ):
	while ( have_rows('Sections') ) : the_row();
    ?>
    	<?php 
    	// if( get_row_layout() == 'banner_section' ): 

    	?>

    <?php

   		// endif; 
    endwhile;

	
	
	
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