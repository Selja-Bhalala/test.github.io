<?php
   /**
    * The main template file
    *
    * This is the most generic template file in a WordPress theme
    * and one of the two required files for a theme (the other being style.css).
    * It is used to display a page when nothing more specific matches a query.
    * E.g., it puts together the home page when no home.php file exists.
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    *
    * @package Tagline
    */
   
   get_header();
   ?>
	<section class="section_portfolio_detail background_bg overlay_bg blog-section" data-img-src="<?php //echo get_template_directory_uri(); ?>/images/blog-slider-1.jpg">
	   <div class="container">
	      <div class="">
	         <div class="row">
	            <?php
	               $args = array(
	                         'post_type' => 'post' ,
	                         'orderby' => 'rand' ,
	                         'posts_per_page' => 3,
	                         'cat' => 12,
	                         
	                    );
	               
	               query_posts($args);
	               
	               if ( have_posts() ) :
	               
	               /* Start the Loop */
	               $count = 1;
	               while ( have_posts() ) :
	               the_post();
	               
	               if($count == 1){
	               ?>
		            <div class="col-md-8 mb-4 mb-md-0">
		               <div class="blog-box slider-blog-box"  id="post-<?php the_ID(); ?>">
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
									the_title( '<h3 class="entry-title">', '</h3>' );
								else :
									the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
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
		            <div class="col-md-4">
		               <?php
		                  }else
		                  {
		                  
		                  	$class = $count == 3 ? 'mb-0' : '';
		                   ?>
		               <div class="blog-box <?php echo $class; ?>"  id="post-<?php the_ID(); ?>">
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
		               <?php if($count == 1){ ?>
		            </div>
	            <?php
	               }
	               }
	               $count++;
	               endwhile;
	               
	               
	               
	               else :
	               get_template_part( 'template-parts/content', 'none' );
	               endif;
	               ?>		
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

                    		wp_reset_query();

                    		$args = array(
		                         'category__not_in' => array('12')
		                         
		                    );
		                    query_posts($args);
							if ( have_posts() ) :

								/* Start the Loop */
								$count = 1;
								while ( have_posts() ) :
									the_post();

									if($count % 5 == 0){
									?>

									<div class="col-md-12">
									<?php }else{ ?>
									<div class="col-md-6">


									<?php } ?>
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

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif;
							?>

                       

                    </div>

                    <!-- <div class="list-nav text-center">
                        <a href="javascript:void(0);" class="btn btn-default color-black anim2">Load More</a>
                    </div> -->

                  
                </div>

                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
<?php
get_footer();