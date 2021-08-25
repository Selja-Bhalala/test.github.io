<?php
/**
* Template Name: General
*
* @package Tagline
*/
get_header();

$content_text  = get_field('content_text');
?>
<section class="subpage-banner">
    <div class="container">
        <div class="row flex-row-reverse align-items-center">
        	<div class="col-12 col-lg-12">
                	 <div class="content mt-5">
						<h1><?php echo get_the_title(); ?></h1>
					</div>
                </div>
        </div>
    </div>
</section>
<section class="about-bg career-bg pt-0 pb-lg-0 mb-5">
        <div class="container">
            <div class="row flex-row-reverse">

                
                <div class="col-12 col-lg-12">
                   

                    <?php echo $content_text; ?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
 ?>
