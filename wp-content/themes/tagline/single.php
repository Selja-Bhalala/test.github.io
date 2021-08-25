<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tagline
 */

get_header();
?>

    <section class="section_portfolio_detail background_bg overlay_bg custom-blog-bg" ></section>

	<?php
	while ( have_posts() ) :
		the_post();
        gt_set_post_view();
		get_template_part( 'template-parts/content', get_post_type() );
        ?>

        

        <?php

	endwhile; 
	?>

	


<?php

get_footer();
