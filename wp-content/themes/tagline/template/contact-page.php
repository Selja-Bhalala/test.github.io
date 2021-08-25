<?php
/**
* Template Name: Contact Us
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

$contact_form_code  = get_field('contact_form_code');
$map  = get_field('map');
$email_id  = get_field('email_id');
$email_id_2  = get_field('email_id_2');

$contact_number  = get_field('contact_number');
$address  = get_field('address');


?>
<section class="contact-bg">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6">

					<?php echo do_shortcode($contact_form_code); ?>
					<!-- <form id="contact-form" method="post" action="contact.php">
						<div class="messages"></div>
						<div class="contact-from">
							<div class="form-group anim2">
		      		            <label>Name</label>
		      		            <input type="text" name="name" placeholder="Admin name" required="required" class="form-control">
		      		            <div class="help-block with-errors"></div>
		      		        </div>
		      		        <div class="form-group anim2">
		      		        	<label>Email</label>
		      		        	<input type="email" name="email" placeholder="Admin@support.com" required="required" class="form-control">
		      		        	<div class="help-block with-errors"></div>
		      		        </div>
		      		        <div class="form-group anim2">
		      		        	<label>Subject</label>
		      		        	<input type="text" name="subject" placeholder="subject" required="required" class="form-control">
		      		        	<div class="help-block with-errors"></div>
		      		        </div>
		      		        <div class="form-group anim2">
		      		        	<label>Phone Number</label>
		      		        	<input type="text" name="phone" placeholder="+91 254 (5121) 001" required="required" class="form-control">
		      		        	<div class="help-block with-errors"></div>
		      		        </div>
		      		        <div class="form-group anim2">
		      		        	<label>Comments</label>
		      		        	<textarea name="message" placeholder="Comments..." required="required" class="form-control"></textarea>
		      		        	<div class="help-block with-errors"></div>
		      		        </div>
		      		        <button type="submit" class="btn btn-info anim6">Submit</button>
						</div>
					</form> -->
				</div>
				<div class="col-12 col-lg-6">
					<?php echo $map; ?>
					<ul class="details">
						<li class="anim1">
							<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>
							<span><?php echo $address; ?></span></li>
						<li class="anim1">
							<a href="mailto:<?php echo $email_id; ?>"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="svg-inline--fa fa-envelope fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg> 
							<span><?php echo $email_id; ?></span></a></li>
						<li class="anim1">
							<a href="mailto:<?php echo $email_id_2; ?>"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="svg-inline--fa fa-envelope fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg> 
							<span><?php echo $email_id_2; ?></span></a></li>
						<li class="anim1">
							<a href="tel:<?php echo $contact_number; ?>"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile" class="svg-inline--fa fa-mobile fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"></path></svg> 
								<span><?php echo $contact_number; ?></span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<?php 

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