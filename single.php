

<?php get_header(); ?>

<div class="post-wrapper h-padding">

       

                 <?php if ( has_post_thumbnail() ) :
                    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ); ?>
                     <div class="post-thumb-wrapper ">
                              <img class="post-featured-img" src="<?php echo $featured_image[0]; ?>" alt="" />
                    </div>
                 <?php endif; ?>
        
       

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
                                            <div class="single-post-author">
                                                 <span class="search-post-author-propic">

                                                    <?php  
                                                                    if( get_avatar(get_the_author_meta('ID')) !== "" ){

                                                                        $avatar=get_avatar(get_the_author_meta('ID'));
                                                                        echo $avatar;
                                                                        ?>
                                                                    
                                                                    <?php  }
                                                                    else{
                                                                        
                                                                        $dummyimg=get_template_directory_uri().'/images/nopic.jpg';
                                                                        ?>
                                                                        <img src="<?php echo $dummyimg ?>" > 
                                                                        
                                                                    <?php  }
                                                            
                                                    ?>

                                                </span>

                                                <span class="search-post-date">

                                                   <b class="underline-span"> <?php the_author_posts_link(); ?> </b>  <span class="grey-span">on <?php the_time( 'F jS, Y' ); ?> </span>
                                                </span>

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
