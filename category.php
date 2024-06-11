<?php get_header();?>

    <div class="search-list-results-wrapper h-padding">
    
    

        <div class="search-list-title ">
                Posts for Category : <?php single_cat_title(); ?>
        </div>

        <div class="search-list-description ">
                <?php  
                        global $wp_query; 
                        echo $wp_query->found_posts;
                ?>
                
                results for “<?php single_cat_title(); ?>”
        </div>
        <div class="search-list-posts ">

            <?php if( have_posts() ): while( have_posts() ): the_post();?>

            
                <div class="search-post-wrapper">
                    <div class="search-post-left">
                        <?php if ( has_post_thumbnail() ) :
                                            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ); ?>
                                            <img   class="" src="<?php echo $featured_image[0]; ?>" alt="" />
                        <?php else: ?>

                                <?php  $featured_image=  get_template_directory_uri().'/images/logo.jpg'; ?>
                                <img   class="" src="<?php echo $featured_image; ?>" alt="" />

                       <?php  endif; ?>
                    </div>
                    <div class="search-post-right">
                        <div class="search-post-title">
                                <?php the_title(); ?>
                        </div>
                        <div class="search-post-excerpt">
                                <?php the_excerpt(); ?>   
                        </div>
                        <div class="search-post-author">
                            <span class="search-post-author-name">
                            </span>
                            <span class="search-post-date">
                            
                            <?php the_author_posts_link(); ?> on  <?php the_time( 'F jS, Y' ); ?> 
                            </span>
                        </div>
                    
                    </div>
                    <a class="post-link-a"  href="<?php the_permalink(); ?>" >  </a>
                </div>

            
            <div class="search-post-divider">
                    
            </div>

            <?php endwhile; else: endif;?>
            <?php wp_reset_postdata(); ?>


            <div class="search-post-pagination">
                
                    <?php the_posts_pagination(); ?>
            </div>
        </div>

    </div>                   


				
<?php get_footer();?>