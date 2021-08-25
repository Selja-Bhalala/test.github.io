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

    		$banner = get_sub_field('banner');
	        $title = get_sub_field('title');
	        $sub_title = get_sub_field('sub_title');
	        $content_text = get_sub_field('content_text');
	        $button_text = get_sub_field('button_text');
	        $button_link = get_sub_field('button_link');
	       
    	?>
    	
		<section class="section_portfolio_detail background_bg service_overlay_bg" data-img-src="<?php echo $banner['url']; ?>">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-8">
	                	<div class="portfolio-title anim2">
	                    	<h3><?php echo $title; ?></h3>
	                        <span class="portfolio_subtitle"><?php echo $sub_title; ?></span>
	                        <p><?php echo $content_text; ?></p>
	                    </div>
	                    <a href="<?php echo $button_link; ?>" class="btn btn-light color-black anim2" data-toggle="modal" data-target="#getquote-popup"><?php echo $button_text; ?></a>
	                </div>
				</div>
			</div>
		</section>
    	<?php
    	elseif( get_row_layout() == 'details_section' ): 
    		
    		$image = get_sub_field('image');
    		$title = get_sub_field('title');
    		// $sub_title = get_sub_field('sub_title');
    		$content_text = get_sub_field('content_text');

    		
    	?>
	    <section class="section">
	    	<div class="container">	
	        	<div class="row align-items-center">
	            	<div class="col-md-6 mb-3 mb-md-0 anim2">
	                	<img src="<?php echo $image['url']; ?>" alt="Android-right-small"/>
	                </div>
	            	<div class="col-md-6 anim1">
	                	<div class="heading">
	            			<h2><?php echo $title; ?></h2>
	                    </div>
	                    <?php echo $content_text; ?>
	                </div>
	            </div>
	        </div>
	    </section>

    	<?php
    		
    	elseif( get_row_layout() == 'service_section' ): 
    		$service_section = get_sub_field('service_section');
    		$title = get_sub_field('title');
    		$display_content_or_icon = get_sub_field('display_content_or_icon');
    		$service_title = get_sub_field('service_title');
    		$service_block = get_sub_field('service_block');
    		$service_content_text = get_sub_field('service_content_text');
    		
    	?>
    	<section class="section services-bg pt-0">
	    	<div class="container">
	        	<div class="row">
	            	<div class="col-lg-8">
	                	<div class="heading anim4">
	                    	<h2><?php echo $title; ?></h2>
						</div>
						<ul class="arrow_list list_full">
							<?php if( have_rows('content_list') ):
								while ( have_rows('content_list') ) : the_row(); 
									$text = get_sub_field('text');
									?>
							<li class="anim2"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-grey.png" alt="arrow"><span><?php echo $text; ?></span></li>
							<?php endwhile;
								endif;
							 ?>
						</ul>
					</div>

					<?php if($display_content_or_icon == "Content"): ?>
					<div class="col-lg-4">
						<div class="bg-orange cta_small_section">
							<div class="heading anim4">
								<h3 class="text-white"><?php echo $service_content_text; ?></h3>
							</div>
						</div>
					</div>
					<?php elseif($display_content_or_icon == "Icon"): ?>
					<div class="col-xl-4">
						<div class="heading anim4">
							<h3><?php echo $service_title; ?></h3>
						</div>
						<div class="row">
							<?php if( have_rows('service_block') ):
								while ( have_rows('service_block') ) : the_row(); 
									$title = get_sub_field('title');
									$icon = get_sub_field('icon');
									?>
							<div class="col-sm-4 col-6 anim4">
								<div class="languages_box">
									<div class="languages_logo">
										<img src="<?php echo $icon['url']; ?>" alt="<?php echo $title; ?>">
									</div>
									<h6><?php echo $title; ?></h6>
								</div>
							</div>
							<?php endwhile;
								endif;
							 ?>
						</div>
					</div>

					<?php endif; ?>

	            </div>
	        </div>
		</section>    	
		<?php
    	elseif( get_row_layout() == 'development_section' ): 
    		$title = get_sub_field('title');
    		$content_text = get_sub_field('content_text');

    		$middle_image = get_sub_field('middle_image');
    		$left_block = get_sub_field('left_block');
    		$right_block = get_sub_field('right_block');
    		$button_text = get_sub_field('button_text');
    		$button_link = get_sub_field('button_link');

    		
    	?>
    	<section class="section development-serices pt-0 ">
        <div class="container ">
            <div class="row justify-content-center ">
                <div class="col-md-9 ">
                    <div class="heading text-center anim4 ">
                        <h2><?php echo $title; ?></h2>
                        <p><?php echo $content_text; ?></p>
                    </div>
                </div>
            </div>
            <div class="row align-items-sm-center ">
                <div class="col-sm-4 text-center order-sm-2 anim4 ">
                    <div class="mt-sm-5 mt-3 bounceimg ">
                        <img src="<?php echo $middle_image['url'] ?> " alt="mobile " />
                    </div>
                </div>
                <div class="col-sm-4 col-6 mt-4 pt-2 order-sm-1 ">
                    <?php if( have_rows('left_block') ):
						while ( have_rows('left_block') ) : the_row();
								$icon = get_sub_field('icon');
								$title = get_sub_field('title');
						 ?>
                    <div class="tm-icon_box anim2 ">
                        <div class="icon-wrap ">
                            <img src="<?php echo $icon['url']; ?>" alt="messaging " />
                        </div>
                        <div class="content-wrap ">
                            <h4><?php echo $title; ?></h4>
                        </div>
                    </div>
                    <?php 
                    	endwhile;
                    endif; 
    				
                    ?>
                </div>
                <div class="col-sm-4 col-6 mt-4 pt-2 order-sm-3 ">
                	<?php if( have_rows('right_block') ):
						while ( have_rows('right_block') ) : the_row();
								$icon = get_sub_field('icon');
								$title = get_sub_field('title');
						 ?>
                    <div class="tm-icon_box anim1 ">
                        <div class="icon-wrap ">
                            <img src="<?php echo $icon['url']; ?>" alt="messaging " />
                        </div>
                        <div class="content-wrap ">
                            <h4><?php echo $title; ?></h4>
                        </div>
                    </div>
                    <?php 
                    	endwhile;
                    endif; 
    				
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php if($button_text!=''){ ?>
    <section class="section pt-0 ">
        <div class="container ">
            <div class="row justify-content-center ">
                <div class="col-md-6 text-center ">
                    <a href="<?php echo $button_link; ?>" class="btn btn-info color-black anim2 " data-toggle="modal " data-target="#getquote-popup "><?php echo $button_text; ?> </a>
                </div>
            </div>
        </div>
    </section>
	<?php } ?>

    	<?php
    		
    	elseif( get_row_layout() == 'work_section' ): 
    		
    		$title = get_sub_field('title');
    
    		
    	?>
    	<section class="section pt-0 ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="heading text-center anim4 ">
                        <h2><?php echo $title; ?></h2>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 ">
                    <div id="portfolio " class="portfolio-work owl-carousel ">
                        <?php if( have_rows('gallery') ):
						while ( have_rows('gallery') ) : the_row();
								$title = get_sub_field('title');
								$image = get_sub_field('image');
								$link = get_sub_field('link');
						 ?>

                        <div class="item ">
                            <div class="work_item text-center ">
                                <a href="<?php echo $link; ?> " class="anim4 ">
                                    <img src="<?php echo $image['url']; ?> " alt="<?php echo $title; ?>">
                                </a>
                                <h4><?php echo $title; ?></h4>
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