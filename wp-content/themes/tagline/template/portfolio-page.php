<?php
/**
* Template Name: Portfolio
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


<section class="portfolio-bg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul id="filter-list">
					<li class="filter anim5" data-filter="all">See All</li>
				<?php
					$custom_terms = get_terms('portfolio_category');
					foreach($custom_terms as $custom_term) {
					    wp_reset_query();
					    $args = array('post_type' => 'portfolio_list',
					        'tax_query' => array(
					            array(
					                'taxonomy' => 'portfolio_category',
					                'field' => 'slug',
					                'terms' => $custom_term->slug,
					            ),
					        ),
					     );
					     $loop = new WP_Query($args);
					     if($loop->have_posts()) {
					     	?>
					     		<li class="filter anim5" data-filter="<?php echo $custom_term->slug; ?>"><?php echo $custom_term->name; ?></li>
					     	<?php
					     }
					}
				?>
			      
			    </ul>
			    
			    <ul id="portfolio">
			    	<?php

			    	foreach($custom_terms as $custom_term) 
			    	{
					    wp_reset_query();
					    $args = array('post_type' => 'portfolio_list',
					        'tax_query' => array(
					            array(
					                'taxonomy' => 'portfolio_category',
					                'field' => 'slug',
					                'terms' => $custom_term->slug,
					            ),
					        ),
					     );

					     $loop = new WP_Query($args);
					     if($loop->have_posts()) :

					     	while($loop->have_posts()) : $loop->the_post();
					     	?>

					     	<li class="item <?php echo $custom_term->slug; ?> col-md-4 col-sm-6">
						      	<a href="<?php echo get_permalink(); ?>" class="anim4">
						      		<?php the_post_thumbnail('full'); ?>
						      		<div class="content">
						      			<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/add.png" alt="add"></div>
						      			<div class="title">
							      			<h5><?php echo get_the_title(); ?></h5>
						      			</div>
						      		</div>
						      	</a>
						      </li>
					     		
					     	<?php
					        endwhile;
					        wp_reset_postdata();
					     endif;
					}
			    	?>
			      
			      
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