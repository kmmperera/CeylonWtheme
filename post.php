

<?php get_header(); ?>

        <div class="post-wrapper">

                <div class="post-thumb-wrapper">

                         <?php if ( has_post_thumbnail() ) :
                            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ); ?>
                            <img class="post-featured-img" src="<?php echo $featured_image[0]; ?>" alt="" />
                         <?php endif; ?>
                
                </div>

                <div class="post-content-wrapper">
                                
                                        <div class="post-social-m-box">
                                        
                                        </div>
                                         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                        <?php the_content(); ?>

                                        <?php 
                                                endwhile;
                                                
                                                else : endif; 
                                        ?>
                                
                        
                </div>

        </div>

				
<?php get_footer(); ?>
