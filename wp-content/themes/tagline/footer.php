<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tagline
 */

?>
<footer>
		<div class="container">

			<div class="row pt-5">
				<?php if( have_rows('footer_block_1', 'option') ): ?>
				<div class="col-sm-6 col-lg-3 border-right">
					<div class="menu-list services-box ">
						<h3 class="anim2">Services</h3>
						<ul class="anim2">
					    <?php while( have_rows('footer_block_1', 'option') ): the_row(); ?>
					    <?php echo get_sub_field('content'); 
					    	 endwhile; 
					   	?>
					    </ul>
					</div>
				</div>
				<?php endif; ?>	

				<?php if( have_rows('footer_block_2', 'option') ): ?>
				<div class="col-sm-6 col-lg-3 border-right">
					<div class="menu-list help-box">
						<h3 class="anim2">Help & Advice</h3>
						<ul class="anim2 mb-2">
						<?php while( have_rows('footer_block_2', 'option') ): the_row(); ?>
					    <?php echo get_sub_field('content'); 
					    	 endwhile; 
					   	?>
						</ul>
					</div>
				</div>
				<?php endif; ?>	

				<div class="col-sm-6 col-lg-3  border-right">
					<div class="menu-list help-box">
						<h3 class="anim2">Reviews of success</h3>
						<?php while( have_rows('footer_block_3', 'option') ): the_row(); ?>
					    <?php echo get_sub_field('content'); 
					    	 endwhile; 
					   	?>

					

					</div>
				</div>

				<?php if( have_rows('footer_block_4', 'option') ): ?>
				<div class="col-sm-6 col-lg-3">
					<div class="menu-list gettouch-box">
						<?php while( have_rows('footer_block_4', 'option') ): the_row(); ?>
				        <h3 class="anim2"><?php the_sub_field('title'); ?></h3>
						<p class="anim2"><?php the_sub_field('content_text'); ?></p>
						<a href="mailto:<?php the_sub_field('email_id'); ?>" class="btn btn-link mb-2 mb-lg-4 anim2">
							<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="svg-inline--fa fa-envelope fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg> 
							<span><?php the_sub_field('email_id'); ?></span>
						</a>
						<a href="tel:<?php the_sub_field('contact_number'); ?>" class="btn btn-link anim2">
							<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile" class="svg-inline--fa fa-mobile fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"></path></svg> 
							<span><?php the_sub_field('contact_number'); ?></span>
						</a>

				    <?php endwhile; ?>
					</div>
				</div>
				<?php endif; ?>	
			</div>



			<div class="row">
				<div class="col-12 col-sm-6">
					<div class="d-flex flex-wrap align-items-center footer-details">
						<?php 

						$footerLogo = get_field('footer_small_logo','option')['url']; 
						$title = get_field('title','option');

						if(empty($footerLogo))
						{
							$footerLogo = get_template_directory_uri()."/images/footer-logo.png";
							$title = '';
						}
						?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
							<img src="<?php echo $footerLogo; ?>" alt="<?php echo $title ?>">
						</a>
						<div class="follow-boxs">
							<h5>Follow us</h5>

							
							<?php if( have_rows('social_icons', 'option') ): ?>

						    <ul>

						    <?php while( have_rows('social_icons', 'option') ): the_row(); ?>

						        <li>
						        	<a target="_blank" href="<?php echo get_sub_field('link'); ?>">
						        		<?php echo file_get_contents( get_sub_field('icon')['url'] ) ?>
						        	</a>
						        </li>

						    <?php endwhile; ?>

						    </ul>

							<?php endif; ?>

						</div>
					</div>
				</div>
				<div class="col-12 col-sm-auto ml-auto">
					<?php $title = the_field('copyright_text','option'); ?>
				</div>					
			</div>
		</div>
	</footer>


	<div class="modal fade" id="getquote-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Request for Quote</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<?php echo do_shortcode('[contact-form-7 id="947" title="Modal Form"]'); ?>
	      </div>
	    </div>
	  </div>
	</div>

	<a href="#" class="scrollup" style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-up.png" alt="arrow-up"></a> 

	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mixitup.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/stickybits.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/skroll.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
	<script>
    $('#customers-testimonials').owlCarousel({
        loop: true,
        center: true,
        items: 3,
        margin: 0,
        autoplay: true,
        dots:true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 2
          },
          1170: {
            items: 3
          }
        }
    });
	</script>
	<?php wp_footer(); ?>
</body>
</html>
