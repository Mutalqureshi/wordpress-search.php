<?php echo get_header(); ?>
         
<div id="primary" class="content-area">
    <main id="main" class="site-main container-fluid p-none">
        <div class="col-background blog-content">
    
            <h3 class="page-title">Search Results for &ldquo;<?=get_search_query()?>&rdquo;</h3>
                    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                    <div class="blogBox clearfix">
                        <h6><strong><a href="<?php the_permalink(); ?>"><?php the_title();?></a></strong></h6>
                                             
                         <div class="blogDesc">
                            <p>
                                <?php the_excerpt() ?>
                            </p>
                        </div>    
                                                
                        <!-- ( BLOG DESCRIPTION END ) -->
                    </div><!-- ( BLOG BOX END ) -->
                    <?php endwhile; ?>
            
                    <?php else: ?>
                        <?php echo "No result found."; //get_template_part( 'content', 'none' ); ?>
                    <?php endif; ?>


<!-- pagination -->
        <?php if ( have_posts() ) : ?>
        <!-- Add the pagination functions here. -->
        <!-- Start of the main loop. -->
        <?php while ( have_posts() ) : the_post();  ?>
        <!-- the rest of your theme's main loop -->
        <?php endwhile; ?>
        <!-- End of the main loop -->
        <!-- Add the pagination functions here. -->
        <div class="nav-previous"><?php previous_posts_link( '< Previous Page' ); ?></div>
        <div class="nav-next"><?php next_posts_link( 'Next Page >' ); ?></div>

        
        <?php endif; ?>
<!-- pagination -->
<br>
        </div><!--col-back ground-->
    </main><!-- #main -->
</div>

<?php echo get_footer(); ?>
