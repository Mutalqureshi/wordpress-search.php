<?php
/*
Template Name: Search Page
*/
get_header(); ?>
	<section id="primary <?php echo "default page-".$post_id = get_the_ID();?>" class="all-pages <?php echo "page-".$post_id = get_the_ID(); wp_title('');?>">
		<div class="other-page-title">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="page-title"></h1>
					</div>
				</div>
			</div>
		</div>
		<section class="search-all">
			<div class="container">
					<?php
					if ( have_posts() ) : ?>
					
			<?php 		
					
					//echo "searching page";
					/*-----this is for pages----------*/
					?>
                    <h1 class="search-head"><?php 	printf( esc_html__( 'Results for: %s', 'storevilla' ), '<span>' . get_search_query() . '</span>' );  //the_title(); ?></h1>
				<!-- row-->	
<section class="all-blog">

                <div class="row">
                    <div class="col-md-8">
                            <?php
                            /* Start the Loop */
                            if(have_posts()){
                                while ( have_posts() ) : the_post();
                            ?>
    
                <div class="blog-detail-content">
                    <div class="blog-img">
                           <div class="zoom">
                               <?php if (has_post_thumbnail($post->ID)) { ?>
                                    <?php $url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'gutsy_blog'); ?>
                                         <a href="<?= the_permalink(); ?>">
                                    <img src="<?php echo $url[0]; ?>" class="img-fluid">
                                         </a>
                                <?php } else { ?>
                                    <img src="http://placehold.it/900x308" width="900" height="308" class="img-fluid">
                                <?php } ?>
                            <div class="date-blog">
                                <?php echo get_the_time('M');?>
                                <hr class="blog-hr"><span class="max-date"><?php echo get_the_time('d');?></span>
                                <hr class="blog-hr"><?php echo get_the_time('Y');?>
                            </div>
                           </div>
                    </div>

                        <h3><a href="<?= the_permalink(); ?>" class="gutsy_blog_title"><?php the_title(); ?> </a></h3>
                                    <div class="main-blogDesc">
                                                    <p><?php echo get_my_excerpt(45) ?></p>
                                                    <div class="more_link">
                                                        <a href="<?= the_permalink() ?>" class="readmore">Read More...</a>
                                                    </div>
                                                    <div class="blogListFooter">
                                                        <p>
                                                            <!-- <span class="listAuthor"><?php echo get_the_date(); ?> By <?php the_author_link(); ?></span> -->
                                                            <span class="listAuthor"><i class="far fa-clock"></i><?php echo get_the_date(); ?> By <?php the_author_link(); ?></span>
                                                            <!-- <span class="listTime">in Our Services</span> -->
                                                            <!-- <span class="listTime">in <?php //the_category(', '); ?></span> -->
                                                        </p>
                                                    </div><!-- ( BLOG LIST FOOTER END ) -->
                                             

                                                <div class="shareField">
                                                        <?php echo do_shortcode('[Social9_Share]'); ?>
                                                </div>

                                    </div><!--blog desc-->
                           


                    </div>    
                            <?php endwhile;

                             ?>
                        <div class="pagination-sec">
                        <?php /*custom added*/
                        wpbeginner_numeric_posts_nav(); 
                          ?>
                        </div> 
                       <?php } ?>
                    </div>
        
        <div class="col-lg-4">
            <?php dynamic_sidebar( 'blog-sidebar' ); ?>
        </div>
                    </div>  
   
        </section>
	
					


					
				<?php	
				/*-----this is for pages-ended---------*/
		
		

?>		


				
				
				
				
				
				
					<?php	
					// the_posts_pagination();
					else :
					//get_template_part( 'template-parts/content', 'none' );
					?>	
					<section class="no-result-post not-found ">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="page-content text-center">
										<p class="not-found-para"><?php _e( 'It looks like nothing was found ? Search an other', '' ); ?></p>
										<?php get_search_form(); ?>
									</div><!-- .page-content -->
								</div>
							</div>
						</div>
					</section>
						<?php	
					endif; ?>
			</div>
		</section>
	</section>
<?php get_footer();