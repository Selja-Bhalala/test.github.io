<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tagline
 */

?>

<section class="blog-section">
        <div class="container">
            <div class="blog-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h2 class="entry-title">', '</h2>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
            </div>

            <?php if ( 'post' === get_post_type() ) : ?>
            <div class="blog-view-section">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="meta-wrapper blog-detail-wrapper">
                            <span class="author_post">
                                <?php tagline_posted_by(); ?>
                            </span>
                            <span class="date_post blog-detail-post"><i class="far fa-calendar-alt"></i> <?php tagline_posted_on(); ?></span>
                            <span class="comments_post"><a href="javascript:void(0);"><i class="far fa-comments"></i> <?php echo get_comments_number(); ?> Comments</a></span>
                            
                        </div>
                    </div>
                   
                </div>
            </div>
            <?php endif; ?>

            <div class="row mb-5 blog-row">
                <div class="col-lg-9">
                    <div class="single_post">
                        
                        <div class="blog_content">
                            <div class="blog_text">
                            	<?php //the_post_thumbnail('full');

                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0];
                                 ?>
                                <img src="<?php echo $image ?>" alt="<?php echo get_the_title(); ?>" />
                            	<ul class="nav mb-4 mt-4">
                                    <?php echo sharethis_inline_buttons(); ?>
                                </ul>
                            	<?php
								the_content(
									sprintf(
										wp_kses(
											/* translators: %s: Name of current post. Only visible to screen readers */
											__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'tagline' ),
											array(
												'span' => array(
													'class' => array(),
												),
											)
										),
										wp_kses_post( get_the_title() )
									)
								);

								wp_link_pages(
									array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tagline' ),
										'after'  => '</div>',
									)
								);
								?>
                            </div>

                            
                        </div>
                    </div>

                    <!-- Post Navigation Section -->
                       <?php

                        $previous_post = get_previous_post();
                        $id = $prev_post->ID ;
                        $prev_permalink = get_permalink( $id );
                        $prevcategories = get_the_category($id);

                        $next_post = get_next_post();
                        $nid = $next_post->ID ;
                        $next_permalink = get_permalink($nid);
                        $nextcategories = get_the_category($id);

                        the_post_navigation(
                            array(
                                'prev_text' => '<div class="col-md-6">
                                            <div class="blog-box">
                                                <a href="'.$prev_permalink.'" class="blog-img-overlay">
                                                '.get_the_post_thumbnail($previous_post->ID,'full').'
                                                </a>

                                                <div class="blog-caption blog-slider-caption">
                                                    <a href="' . esc_url( get_category_link( $prevcategories[0]->term_id ) ) . '" class="slider-tag">'.$prevcategories[0]->name.'</a>
                                                    <h6>%title</h6>
                                                    <div class="meta-wrapper slider-caption-bloghome">
                                                       
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>',
                                'next_text' => '<div class="col-md-6">
                                            <div class="blog-box">
                                                <a href="'.$next_permalink.'" class="blog-img-overlay">
                                                '.get_the_post_thumbnail($next_post->ID,'full').'
                                                </a>

                                                <div class="blog-caption blog-slider-caption">
                                                    <a href="' . esc_url( get_category_link( $nextcategories[0]->term_id ) ) . '" class="slider-tag">'.$nextcategories[0]->name.'</a>
                                                    <h6>%title</h6>
                                                    <div class="meta-wrapper slider-caption-bloghome">
                                                    
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>',
                            )
                        );
                        ?>

                        <!-- Comment Section -->
                        <?php
                        
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>

