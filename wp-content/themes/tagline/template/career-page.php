<?php
/**
* Template Name: Career
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
    		$image = get_sub_field('image');
	        $title = get_sub_field('title');
    	?>
    	<section class="bg_banner career-banner background_bg overlay_bg d-flex align-items-center" data-img-src="<?php echo $image['url'] ?>">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="content text-center">
							<h1 class="anim2 text-white text-uppercase"><?php echo $title; ?></h1>
						</div>
					</div>
				</div>
			</div>
		</section>
    <?php
    	elseif( get_row_layout() == 'gallery_section' ): 
    		$content_text = get_sub_field('content_text');
    ?>
    <section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 text-center anim4">
					<p><?php echo $content_text; ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="career-slider owl-carousel pt-4 anim4">
						<?php 
						if( have_rows('gallery') ): 
							while( have_rows('gallery') ): the_row();

								$image  = get_sub_field('image');
						?>
						<div class="item">
							<div class="gallery_img">
								<img src="<?php echo $image['url']; ?>" alt="career-slider-img"/>
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
    ?>
    <section class="about-bg career-bg pt-0 pb-lg-0">
		<div class="container">
			<?php 
			if( get_row_layout() == 'about_section' ): 
	    		$title = get_sub_field('title');
	    		$sub_title = get_sub_field('sub_title');
	    		$content_text = get_sub_field('content_text');
	    		$image = get_sub_field('image');
	    		$button_text = get_sub_field('button_text');
	    		$button_link = get_sub_field('button_link');
			?>
			<div class="row flex-row-reverse">
				<div class="col-12 col-lg-6">
					<div class="career-img anim1 mb-4 mb-lg-0">
						<img src="<?php echo $image['url']; ?>" alt="career-img">
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<h4 class="anim2 text-default"><?php echo $title; ?></h4>
					<h6 class="anim2 mb-3"><?php echo $sub_title; ?></h6>
					<?php echo $content_text; ?>
					<a href="<?php echo $button_link; ?>" class="btn btn-info anim2"><?php echo $button_text; ?></a>
				</div>
			</div>
			<?php 
			elseif( get_row_layout() == 'openings_section' ): 
	    		$title = get_sub_field('title');
	    		$sub_title = get_sub_field('sub_title');
	    
			?>
			<div class="row">
				<div class="col-12">
					<div class="career-services">
						<h2 class="anim2 text-default"><?php echo $title; ?></h2>
						<p class="anim1"><?php echo $sub_title; ?></p>
					</div>
				</div>
			</div>
			<?php 

			if( have_rows('openings_for') ):
			?>
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div id="accordion">
						<?php
							$i=0;
							while ( have_rows('openings_for') ) : the_row();
								$is_display = get_sub_field('is_display');
								$title = get_sub_field('title');
								$content_text = get_sub_field('content_text');

								if($is_display == "Yes"):
			    		?>
						<div class="card anim4">
							<div class="card-header" id="heading1" data-toggle="collapse" role="button" data-target="#collapse<?php echo $i; ?>" aria-expanded="true"><?php echo $title; ?></div>
							<div id="collapse<?php echo $i; ?>" class="collapse <?php echo $i ==0 ? "show":""; ?>" aria-labelledby="heading1" data-parent="#accordion">
								<div class="card-body anim6">
									<p><?php echo $content_text; ?></p>

									<?php 
									if( have_rows('body_content') ):
										while ( have_rows('body_content') ) : the_row();
											$list_title = get_sub_field('list_title');
											$display_parts = get_sub_field('display_parts');

											$parts = $display_parts == 2 ? "half_list" : "col3_list";

									?>
									<h4><?php echo $list_title; ?></h4>
									<?php

									if( have_rows('list') ):
										
									?>
									<ul class="dot_list <?php echo $parts; ?> mb-3">
										<?php 
											while ( have_rows('list') ) : the_row();
												$title = get_sub_field('title');
										?>
										<li><?php echo $title; ?></li>
										<?php 
										endwhile;
										?>
									</ul>
									<?php 
									endif;
										endwhile;
									endif;
									?>
								</div>
							</div>
						</div>

						<?php
								endif;
								$i++;
							endwhile;
			    		?>

					</div>
				</div>
			</div>
			<?php 
				endif;
			?>
			<?php 
			elseif( get_row_layout() == 'opportunity_section' ): 
	    		$title = get_sub_field('title');
	    		$sub_title = get_sub_field('sub_title');
	    		$content_title = get_sub_field('content_title');
	    		$content_text = get_sub_field('content_text');
	    		$image = get_sub_field('image');
	    
			?>
			<div class="row">
				<div class="col-12">
					<div class="career-services">
						<h2 class="anim2 text-default"><?php echo $title; ?></h2>
						<p class="anim1">Dont&#39;t worry, <a href="#" data-toggle="modal" data-target="#career-popup">Build your career with us!</a> we will help you to build it.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-lg-5">
					<div class="img anim2">
						<img src="<?php echo $image['url'] ?>" alt="opportunity finder">
					</div>
				</div>
				<div class="col-12 col-lg-7">
					<h4 class="anim1 text-default"><?php echo $content_title; ?></h4>
					<?php echo $content_text; ?>

					<a href="<?php echo $button_link; ?>" class="btn btn-info anim1"><?php echo $button_text; ?></a>
				</div>
			</div>
			<?php 
				endif;
			?>
		</div>
	</section>


    <?php
   		

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

<div class="modal fade" id="career-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">DROP US YOUR RESUME</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
                </div>
                <?php echo do_shortcode( '[contact-form-7 id="1187" title="Career Modal Form"]' ); ?>
            </div>
        </div>
    </div>

<?php
get_footer();
 ?>