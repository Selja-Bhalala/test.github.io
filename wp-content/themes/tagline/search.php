<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Tagline
 */

get_header();
?>

	<?php if ( have_posts() ) : ?>
	<section class="section_portfolio_detail background_bg overlay_bg custom-blog-bg" data-img-src="<?php echo get_template_directory_uri(); ?>/images/blog-bg.png ">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 mt-4">
                    <div class="portfolio-title anim2 ">
                        <h3><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'tagline' ), '<span>' . get_search_query() . '</span>' );
					?></h3>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

	<section class="blog-section">
        <div class="container blog-home-container">
            <div class="row blog-row">
                <div class="col-lg-9">
                    <div class="row">

                    	<?php
						
								/* Start the Loop */
								$count = 1;
								while ( have_posts() ) :
									the_post();

									?>

									
									<div class="col-md-6">

			                            <div class="blog-box" id="post-<?php the_ID(); ?>">
			                                
			                                <?php tagline_post_thumbnail(); ?>

			                                <div class="blog-caption blog-slider-caption">
			                                	<?php 
			                                	$categories = get_the_category();
												if ( ! empty( $categories ) ) {
						                        	foreach($categories as $category) {
													    echo '<a class="slider-tag" href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
													}
												}
			                                	?>

			                                    <?php
			                                    if ( is_singular() ) :
													the_title( '<h6 class="entry-title">', '</h6>' );
												else :
													the_title( '<h6 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h6>' );
												endif;
			                                     ?>
			                                   
			                                    <div class="meta-wrapper slider-caption-bloghome">
			                                        <span class="author_post">
			                                            <?php tagline_posted_by(); ?>
			                                        </span>
			                                        <span class="date_post blog-detail-post"><i class="far fa-calendar-alt"></i> <?php tagline_posted_on(); ?></span>
			                                    </div>
			                                </div>
			                                
			                            </div>
			                        </div>
									<?php
									// get_template_part( 'template-parts/content', get_post_type() );
									$count++;
								endwhile;
								the_posts_navigation();
							
							?>

                    </div>

                    <!-- <div class="list-nav text-center">
                        <a href="javascript:void(0);" class="btn btn-default color-black anim2">Load More</a>
                    </div> -->
                </div>
               <?php 
               get_sidebar();
               ?>
            </div>
        </div>
    </section>
    <?php 
    else :

    ?>

	

    <section class="section mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5">
                    <div class="career-services">
                        <?php get_template_part( 'template-parts/content', 'none' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<?php
	endif;
		
	?>


<?php

get_footer();
