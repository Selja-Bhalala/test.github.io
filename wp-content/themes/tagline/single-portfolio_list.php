<?php
/**
*
* @package Tagline
*/
get_header();
?>

<?php 

if( have_rows('sections') ):
	while ( have_rows('sections') ) : the_row();
    ?>
    	<?php 
    	if( get_row_layout() == 'banner_section' ): 

    		$image = get_sub_field('image');
	        $title = get_sub_field('title');
	        $sub_title = get_sub_field('sub_title');
	        $content_text = get_sub_field('content_text');
	        $button_text = get_sub_field('button_text');
	        $button_link = get_sub_field('button_link');
	        $ios_link = get_sub_field('ios_link');
	        $android_link = get_sub_field('android_link');
    	?>
    	<section class="section_portfolio_detail background_bg overlay_bg" data-img-src="<?php echo $image['url'] ?>">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-8">
	                	<div class="portfolio-title anim2">
	                    	<h3><?php echo $title; ?></h3>
	                        <span class="portfolio_subtitle"><?php echo $sub_title; ?></span>
	                        <p><?php echo $content_text; ?></p>
	                    </div>
	                    <a href="#" class="btn btn-default color-black anim2" data-toggle="modal" data-target="#getquote-popup"><?php echo $button_text; ?></a>
	                    <div class="app_btn anim2">
	                    	<?php if($ios_link!=''){ ?>
	                    	<a href="<?php echo $ios_link; ?>" target="_blank">
	                        	<img src="<?php echo get_template_directory_uri(); ?>/images/app-store-img.png" alt="app-store-img"/>
	                        </a>
	                        <?php } ?>
	                        <?php if($android_link!=''){ ?>
	                    	<a href="<?php echo $android_link; ?>" target="_blank">
	                        	<img src="<?php echo get_template_directory_uri(); ?>/images/play-store-img.png" alt="app-store-img"/>
	                        <?php } ?>
	                        </a>
	                    </div>
	                </div>
				</div>
			</div>
		</section>
    	<?php
    	elseif( get_row_layout() == 'section_1' ): 
    		$is_display = get_sub_field('is_display');
    		$image = get_sub_field('image');
    		$title = get_sub_field('title');
    		$sub_title = get_sub_field('sub_title');
    		$content_text = get_sub_field('content_text');

    		if($is_display == "Yes"):
    	?>
    	<section class="section">
	    	<div class="container">	
	        	<div class="row align-items-center">
	            	<div class="col-lg-6 anim2">
	                	<div class="shadow_img mb-4 mb-lg-0">
	                		<img src="<?php echo $image['url'] ?>" alt="recognize-application-img"/>
	                    </div>
	                </div>
	            	<div class="col-lg-6 anim1">
	                	<div class="heading">
	            			<h2><?php echo $title; ?></h2>
	                        <p class="text-uppercase"><strong><?php echo $sub_title; ?></strong></p>
	                    </div>
	                    <?php echo $content_text; ?>
	                </div>
	            </div>
	        </div>
	    </section>

    	<?php
    		endif;
    	elseif( get_row_layout() == 'features_section' ): 
    		$is_display = get_sub_field('is_display');
    		$title = get_sub_field('title');
    		
    		if($is_display == "Yes"):

    	?>
    	<section class="bg-gray section">
	    	<div class="container">
	        	<div class="row">
	            	<div class="col-12">
	                	<div class="heading text-center anim4">
	                    	<h2><?php echo $title; ?></h2>
	                    </div>
	                </div>
	            </div>
	            <div class="row">
            	<?php 
		  			if( have_rows('features') ): 
						while( have_rows('features') ): the_row();

							$image = get_sub_field('image');
				    		$title = get_sub_field('title');
				    		$content_text = get_sub_field('content_text');

		  		?>
            	<div class="col-lg-6">
                	<div class="icon_box anim4">
                    	<div class="icon">
                        	<img src="<?php echo $image['url']; ?>" alt="program"/>
                        </div>
                        <div class="icon_content">
                        	<h4><?php echo $title; ?></h4>
                            <p><?php echo $content_text; ?></p>
                        </div>
                    </div>
                </div>
               <?php 
						endwhile;
					endif;
				?>
	            </div>
	        </div>
	    </section>
    	<?php
    		endif;
    	elseif( get_row_layout() == 'solution_section' ): 
    		$is_display = get_sub_field('is_display');
    		$title = get_sub_field('title');
    		$content_text = get_sub_field('content_text');
    		
    		if($is_display == "Yes"):
    	?>
    	<section class="section">
	    	<div class="container">
	        	<div class="row justify-content-center">
	            	<div class="col-md-8">
	                	<div class="heading text-center anim4">
	                    	<h2><?php echo $title; ?></h2>
	                        <p><?php echo $content_text; ?></p>
	                    </div>
	                </div>
	            </div>

	            <div class="row">
	            	<?php 
			  			if( have_rows('features') ): 
							while( have_rows('features') ): the_row();

								$image = get_sub_field('image');
					    		$title = get_sub_field('title');
					    		$content_text = get_sub_field('content_text');

			  		?>
	            	<div class="col-md-4 col-sm-6 mt-4 pt-2">
	                	<div class="solution_box anim4">
	                    	<div class="solution_icon">
	                        	<img src="<?php echo $image['url']; ?>" alt="<?php echo $title; ?>"/>
	                        </div>
	                        <div class="icon_content">
	                        	<h4><?php echo $title; ?></h4>
	                            <p><?php echo $content_text; ?></p>
	                        </div>
	                    </div>
	                </div>
	               	<?php 
							endwhile;
						endif;
					?>
				</div>
	        </div>
	    </section>

    	<?php
    		endif;
    	elseif( get_row_layout() == 'technology_section' ): 
    		$is_display = get_sub_field('is_display');
    		$title = get_sub_field('title');
    
    		
    		if($is_display == "Yes"):
    	?>
    	<section class="section bg-gray">
	    	<div class="container">
	        	<div class="row justify-content-center">
	            	<div class="col-md-8">
	                	<div class="heading text-center anim4">
	                    	<h2><?php echo $title; ?></h2>
	                    </div>
	                </div>
				</div>
				<div class="row technology_wrap justify-content-center">
					<?php 
			  			if( have_rows('technology') ): 
							while( have_rows('technology') ): the_row();

								$image = get_sub_field('image');
					    		$title = get_sub_field('title');
					    

			  		?>
					<div class="col-md-3">
						<div class="technology_box">
							<div class="technology_logo">
								<img src="<?php echo $image['url']; ?>" alt="react-native"/>
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
	    </section>

    	<?php
    		endif;
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