

<?php get_header(); ?>

<div class="post-wrapper h-padding">

        <div class="post-thumb-wrapper ">

                 <?php if ( has_post_thumbnail() ) :
                    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ); ?>
                    <img class="post-featured-img" src="<?php echo $featured_image[0]; ?>" alt="" />
                 <?php endif; ?>
        
        </div>

        <div class="post-content-wrapper">
                        
                                <div class="post-social-m-box">

                                    <div class="post-yt-sec">
                                        <p class="yt-para">
                                            We are in youtube too
                                        </p>
                                        <div class="watch-now-btn-div">
                                            <button class="watch-now-btn">
                                                Watch now
                                            </button>
                                        </div>

                                    </div>
                                    <div class="post-social-bx-divider">

                                    </div>
                                    <div class="post-social-box-icons">
                                        <span class="social-icons">
                                            <a href="#"><i class="bi bi-facebook"></i></a>
                                        </span>
                                        <span class="social-icons">
                                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                                        </span>
                                        <span class="social-icons">
                                            <a href="#"><i class="bi bi-instagram"></i></a>
                                        </span>
                                    </div>
                                
                                </div>

                                <div class="post-article">
                               
                                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                            <div class="post-title">
                                                <?php the_title(); ?>
                                            </div>
                                            <div class="author-details">
                                                <div class="author-pic">
                                                    <img src="<?php echo get_template_directory_uri().'/images/face5.png'?>" alt="">
                                                </div>
                                                <div class="author-name">
                                                    Author Name
                                                </div>
                                                <div class="written-date">
                                                    Jan 20,2024
                                                </div>
                                            </div>
                                            <div class="post-para">
                                                <?php the_content(); ?>
                                            </div>
                                        <div class="post-cetegories">
                                                <?php 
                                                    $category_detail=get_the_category($post->ID); 
                                                    foreach($category_detail as $cd){
                                                    ?>
                                                                <a href=" <?php echo  esc_url( get_category_link( $cd->term_id ) ) ?> "> <?php echo $cd->name; ?>  </a> 
                                                        <?php
                                                    }
                                                ?>
                                        </div>

                                        <?php 
                                                endwhile;
                                                
                                                else : endif; 
                                        ?>
                                 </div>
                
        </div>

</div>

        
<?php get_footer(); ?>
