<?php
/**
* Template Name: Home
*
* @package Tagline
*/
get_header(); 	
?>

<?php 
	if( have_rows('Sections') ):
    while ( have_rows('Sections') ) : the_row();
    ?>


   		<?php 
    	if( get_row_layout() == 'banner_section' ):
        
	        $background_image = get_sub_field('background_image');
	        $small_title = get_sub_field('small_title');
	        $animate_texts = get_sub_field('animate_texts');
	        $content_text = get_sub_field('content_text');

            ?>
            <section class="banner-bg background_bg" data-img-src="<?php echo $background_image['url'] ?>">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-sm-6">
							<div class="content">
								<h5 class="anim2"><?php echo $small_title; ?></h5>
								<h1 class="anim2 anim-typewriter typewrite" data-period="2000" data-type='[ <?php echo $animate_texts; ?> ]'></h1>
								<p class="anim2"><?php echo $content_text; ?></p>
							</div>
						</div>
					</div>
				</div>
			</section>

        <?php
        elseif( get_row_layout() == 'aboutus_section' ): 

    		$count_number = get_sub_field('count_number');
        	$count_text = get_sub_field('count_text');
        	$title = get_sub_field('title');
        	$content_text = get_sub_field('content_text');

        	?>

        	<section class="aboutus-bg">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-3">
							<div class="review-boxs anim2">
								<h3><?php echo $count_number; ?><span>+</span></h3>
								<div class="star-boxs">
									<span><svg xmlns="http://www.w3.org/2000/svg" width="25.748" height="25.748" viewBox="0 0 25.748 25.748"> <path d="M25.681,10.221A1.379,1.379,0,0,0,24.5,9.239l-7.432-.7L14.133,1.358a1.347,1.347,0,0,0-2.517,0L8.677,8.535l-7.433.7a1.382,1.382,0,0,0-1.177.982,1.467,1.467,0,0,0,.4,1.517l5.617,5.141L4.429,24.493a1.459,1.459,0,0,0,.532,1.474,1.313,1.313,0,0,0,1.5.068l6.41-4,6.408,4a1.316,1.316,0,0,0,1.5-.068,1.46,1.46,0,0,0,.532-1.474l-1.656-7.614,5.617-5.14a1.469,1.469,0,0,0,.4-1.518Zm0,0" transform="translate(0 -0.491)" /></svg></span>
									<span><svg xmlns="http://www.w3.org/2000/svg" width="25.748" height="25.748" viewBox="0 0 25.748 25.748"> <path d="M25.681,10.221A1.379,1.379,0,0,0,24.5,9.239l-7.432-.7L14.133,1.358a1.347,1.347,0,0,0-2.517,0L8.677,8.535l-7.433.7a1.382,1.382,0,0,0-1.177.982,1.467,1.467,0,0,0,.4,1.517l5.617,5.141L4.429,24.493a1.459,1.459,0,0,0,.532,1.474,1.313,1.313,0,0,0,1.5.068l6.41-4,6.408,4a1.316,1.316,0,0,0,1.5-.068,1.46,1.46,0,0,0,.532-1.474l-1.656-7.614,5.617-5.14a1.469,1.469,0,0,0,.4-1.518Zm0,0" transform="translate(0 -0.491)" /></svg></span>
									<span><svg xmlns="http://www.w3.org/2000/svg" width="25.748" height="25.748" viewBox="0 0 25.748 25.748"> <path d="M25.681,10.221A1.379,1.379,0,0,0,24.5,9.239l-7.432-.7L14.133,1.358a1.347,1.347,0,0,0-2.517,0L8.677,8.535l-7.433.7a1.382,1.382,0,0,0-1.177.982,1.467,1.467,0,0,0,.4,1.517l5.617,5.141L4.429,24.493a1.459,1.459,0,0,0,.532,1.474,1.313,1.313,0,0,0,1.5.068l6.41-4,6.408,4a1.316,1.316,0,0,0,1.5-.068,1.46,1.46,0,0,0,.532-1.474l-1.656-7.614,5.617-5.14a1.469,1.469,0,0,0,.4-1.518Zm0,0" transform="translate(0 -0.491)" /></svg></span>
									<span><svg xmlns="http://www.w3.org/2000/svg" width="25.748" height="25.748" viewBox="0 0 25.748 25.748"> <path d="M25.681,10.221A1.379,1.379,0,0,0,24.5,9.239l-7.432-.7L14.133,1.358a1.347,1.347,0,0,0-2.517,0L8.677,8.535l-7.433.7a1.382,1.382,0,0,0-1.177.982,1.467,1.467,0,0,0,.4,1.517l5.617,5.141L4.429,24.493a1.459,1.459,0,0,0,.532,1.474,1.313,1.313,0,0,0,1.5.068l6.41-4,6.408,4a1.316,1.316,0,0,0,1.5-.068,1.46,1.46,0,0,0,.532-1.474l-1.656-7.614,5.617-5.14a1.469,1.469,0,0,0,.4-1.518Zm0,0" transform="translate(0 -0.491)" /></svg></span>
									<span><svg xmlns="http://www.w3.org/2000/svg" width="25.748" height="25.748" viewBox="0 0 25.748 25.748"> <path d="M25.681,10.221A1.379,1.379,0,0,0,24.5,9.239l-7.432-.7L14.133,1.358a1.347,1.347,0,0,0-2.517,0L8.677,8.535l-7.433.7a1.382,1.382,0,0,0-1.177.982,1.467,1.467,0,0,0,.4,1.517l5.617,5.141L4.429,24.493a1.459,1.459,0,0,0,.532,1.474,1.313,1.313,0,0,0,1.5.068l6.41-4,6.408,4a1.316,1.316,0,0,0,1.5-.068,1.46,1.46,0,0,0,.532-1.474l-1.656-7.614,5.617-5.14a1.469,1.469,0,0,0,.4-1.518Zm0,0" transform="translate(0 -0.491)" /></svg></span>
								</div>
								<p><?php echo $count_text; ?></p>
							</div>
						</div>
						<div class="col-12 col-sm-9">
							<h5 class="anim1"><?php echo $title; ?></h5>
							<p class="anim1"><?php echo $content_text; ?></p>
						</div>
					</div>
				</div>
			</section>

        <?php
        elseif( get_row_layout() == 'ourservices_section' ): 
        	$small_text = get_sub_field('small_text');
        	$title = get_sub_field('title');
        	$section_bottom_text = get_sub_field('section_bottom_text');
        	$button_text = get_sub_field('button_text');
        	$button_link = get_sub_field('button_link');

        	?>

        	<section class="ourservices-bg">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h5 class="anim2 text-dark"><?php echo $small_text ?></h5>
							<h2 class="anim2 text-default"><?php echo $title ?></h2>
						</div>

						<?php 
						if( have_rows('service_blocks') ): 
							while( have_rows('service_blocks') ): the_row();

								$icon  = get_sub_field('icon');
								$title  = get_sub_field('title');
								$title_link  = get_sub_field('title_link');
								$content_text  = get_sub_field('content_text');
								$border_class_name  = get_sub_field('border_class_name');
								$animate_class_name  = get_sub_field('animate_class_name');

						?>
						<div class="col-12 col-sm-6 col-lg-4 <?php echo $border_class_name ?>">
							<div class="services-boxs <?php echo $animate_class_name ?>">
								<div class="top">
									<div class="icon">
										<?php echo file_get_contents( $icon['url'] ) ?>
									</div>
									<h3><a href="<?php echo $title_link ?>"><?php echo $title ?></a></h3>
								</div>
								<p><?php echo $content_text ?></p>
							</div>
						</div>
						<?php
							endwhile;
						endif;
						?>
						
						<div class="col-12 text-center">
							<p class="dont-text anim4"><?php echo $section_bottom_text ?></p>
							<a href="<?php echo $button_link ?>" class="btn btn-info anim4"><?php echo $button_text ?></a>
						</div>
					</div>
				</div>
			</section>

        <?php
        elseif( get_row_layout() == 'ourtechnologies_section' ): 
        	
        	$title = get_sub_field('title');
        	$is_display = get_sub_field('is_display');
      
      		// Display If:
        	if($is_display == "Yes"):
        	?>

        	<section class="ourtechnologies-bg">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="heading">
								<h2 class="anim2 text-default font-weight-bold"><?php echo $title ?></h2>
							</div>


							<ul class="nav nav-tabs anim5" id="myTab" role="tablist">
								<?php 
									$loop = new WP_Query( array( 'post_type' => 'technologies', 'posts_per_page' => -1 ) ); 
							        $counter = 0;
							        	while ( $loop->have_posts() ) : $loop->the_post(); 
							            $counter++;
						        		?>
						            	<li><a class="post-<?php the_ID(); ?> <?=($counter == 1) ? 'active' : ''?>" id="#post-<?php the_ID(); ?>" data-toggle="tab" href="#post-<?php the_ID(); ?>" role="tab" aria-controls="post-<?php the_ID(); ?>" aria-selected="true"><?php the_title();?></a></li>

						        <?php endwhile; wp_reset_query(); ?>
							</ul>

							<div class="tab-content" id="myTabContent">
								<?php 
									$loop = new WP_Query( array( 'post_type' => 'technologies', 'posts_per_page' => -1 ) ); 
							        $counter = 0;
							        	while ( $loop->have_posts() ) : $loop->the_post(); 
							            $counter++;
						        		?>
							  <div class="tab-pane fade post-<?php the_ID(); ?> <?=($counter == 1) ? 'show active' : ''?>" id="post-<?php the_ID(); ?>" role="tabpanel" aria-labelledby="post-<?php the_ID(); ?>">
							  	<div class="logos-boxs">
							  		<?php 
							  			if( have_rows('technology_icons') ): 
											while( have_rows('technology_icons') ): the_row();

												$icon  = get_sub_field('technology_icon');

							  		?>
									<div class="img"><img src="<?php echo $icon['url'];  ?>" alt="our-technologies"></div>
									<?php 
											endwhile;
										endif;
									?>
								</div>
							  </div>
							  <?php endwhile; wp_reset_query(); ?>
							</div>
						</div>
					</div>
				</div>
			</section>

		<?php
			endif;
        elseif( get_row_layout() == 'award_section' ): 
        	
        	$title = get_sub_field('title');
        	$content_text = get_sub_field('content_text');

        	?>

        	<section class="section">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<div class="heading">
								<h2><?php echo $title ?></h2>
								<p><?php echo $content_text; ?></p>
							</div>
						</div>
					</div>
					<div class="row">
					   <div class="col-12">
					      <div class="row">
					      	<?php 
								if( have_rows('awards') ): 
									while( have_rows('awards') ): the_row();

										$title  = get_sub_field('title');
										$image  = get_sub_field('image');
										$link  = get_sub_field('link');
										
								?>
					         <div class="col-sm-2 col-6 anim4">
					            <div class="languages_box">
					               <div class="languages_logo">
					                  <a target="_blank" href="<?php echo $link; ?>">
					                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $title; ?>" />
					                  </a>
					               </div>
					               <h6><?php echo $title; ?></h6>
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
			</section>

        <?php
        	

        elseif( get_row_layout() == 'experience_section' ): 
        	
        	$title = get_sub_field('title');
        	$content_text = get_sub_field('content_text');
        	$sub_title = get_sub_field('sub_title');
        	$sub_content_text = get_sub_field('sub_content_text');
        	?>

        	<section class="experience-bg">
				<div class="container">
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
					
				</div>
			</section>


			<section class="testimonials">
				<div class="container">
					<div class="experience-box mb-5">
						<span class="anim2"><?php echo $title ?></span>
						<h2 class="anim2 text-default">What's Our Client Say</h2>
					</div>
						
					<div class="row">
						<div class="col-sm-12">
							<div id="customers-testimonials" class="owl-carousel">
								<?php 
									if( have_rows('testimonials') ): 
										while( have_rows('testimonials') ): the_row();

											$name  = get_sub_field('name');
											$designation  = get_sub_field('designation');
											$comment_text  = get_sub_field('comment_text');
											$image  = get_sub_field('image');
										
									?>
								<div class="item">
								<div class="shadow-effect">
								<i class="fas fa-quote-left"></i>
								<p><?php echo $comment_text; ?></p>
								</div>
								<div class="client-detail">
								<img src="<?php echo $image['url'] ?>" alt="<?php echo $name; ?>">	
								<h4 ><?php echo $name; ?></h4>
								<h6 ><?php echo $designation; ?></h6>
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
			</section>

        <?php
        	// Display if End:



   		endif; 
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