<?php /* Template Name: Blog Template */ ?>

<?php get_header(); ?>

                <div class="h-padding" id="hero-title">
                <div>
                Read How We Make It and Know
                <br/>
                <span id="lower-hero-title">It Better</span>
                </div>
            </div>
            <div class="h-margin" id="hero-details-one-wrapper">
                <div id="hero-details-one">
                    <div id="clients-num">
                        <span id="clients-num-one">
                            1000
                        </span>
                        <span id="clients-num-two">
                            0f clients
                        </span>

                    </div>
                    <div id="expierience-yr">

                        <span id="expierience-yr-one">
                            03+
                        </span>
                        <span id="expierience-yr-two">
                            Years Expirience
                        </span>
                    </div>
                </div>
            </div>
            <div class="h-padding" id="hero-pics">
                <div class="hero-img-container">
                    <img class="hero-img"  src="<?php echo get_template_directory_uri().'/images/hero-one.png'?>"  alt="">
                </div>
                <div class="hero-img-container">
                    <img class="hero-img" src="<?php echo get_template_directory_uri().'/images/hero-two.png'?>" alt="">
                </div>
                <div class="hero-img-container">
                    <img class="hero-img" src="<?php echo get_template_directory_uri().'/images/hero-three.png'?>" alt="">
                </div>
                <div class="hero-img-container">
                    <img class="hero-img" src="<?php echo get_template_directory_uri().'/images/hero-four.png'?>" alt="">
                </div>

            </div>
            <div class="h-padding" id="hero-details-mobile-wrapper">
                <div id="hero-details-one">
                    <div id="clients-num">
                        <span id="clients-num-one">
                            1000
                        </span>
                        <span id="clients-num-two">
                            0f clients
                        </span>

                    </div>
                    <div id="expierience-yr">

                        <span id="expierience-yr-one">
                            03+
                        </span>
                        <span id="expierience-yr-two">
                            Years Expirience
                        </span>
                    </div>
                </div>
            </div>
            <div class="h-padding" id="hero-details-two">
                <div id="sec-details-left">
                    Read more about these processes which are written by our experts.Watch YouTube videos on processes which are written by our
                    experts.
                </div>
                <div id="sec-details-middle">
                    <img class="hero-pro-pic" src="<?php echo get_template_directory_uri().'/images/face1.jpg'?>"  alt="">
                    <img class="hero-pro-pic" src="<?php echo get_template_directory_uri().'/images/face2.jpg'?>" alt="">
                    <img class="hero-pro-pic" src="<?php echo get_template_directory_uri().'/images/face3.jpg'?>" alt="">
                </div>
                <div id="sec-details-right">
                    <i class="bi bi-play-fill"></i>
                    Watch our videos
                </div>
            </div>
            <div class="h-margin" id="main-area">
                <div id="search-area">
                    <div id="search-left">
                        Browse through our blog
                    </div>
                    <div id="search-right">
                        <!-- <i class="bi bi-search"></i>
                        <input class="searchinput" type="text" placeholder="Search anything...">
                        <input class="searchbtn" type="submit" value="Search"> -->

                          <?php get_search_form(); ?>
                    </div>
                </div>
                <div id="articles-area">
                    <div class="section-title">
                        Top Articles
                    </div>
                    <div id="top-article-container">


                        <div id="article-area-left">


                            <?php 

                                    $featuredmain= new WP_Query(
                                        array(
                                            'post_type' => 'post',
                                            "posts_per_page" => 1,
                                            
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'category',
                                                    'terms' => 'books',
                                                    'field' => 'slug',
                                                )
                                            )
                                        )   
                                        );

                            ?>
                             <?php if($featuredmain->have_posts() ): while( $featuredmain->have_posts() ): $featuredmain->the_post();?>           
                            <div class="article-pic">
                                    <?php if ( has_post_thumbnail() ) :
                                                    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ); ?>
                                                    <img   class="" src="<?php echo $featured_image[0]; ?>" alt="" />
                                    <?php else: ?>

                                        <?php  $featured_image=  get_template_directory_uri().'/images/logo.jpg'; ?>
                                        <img   class="" src="<?php echo $featured_image; ?>" alt="" />

                                    <?php  endif; ?>

                            </div>
                            <div class="article-date">
                                    <?php the_time( 'F jS, Y' ); ?> 
                            </div>
                            <div class="article-title">
                                    <?php the_title(); ?>
                            </div>
                            <div class="article-description">
                                    <?php echo wp_trim_words(get_the_excerpt(),64); ?> 

                            </div>
                            <div class="article-author-details">
                                <div class="autor-pic">
                                    
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

                                </div>
                                <div class="author-right">
                                    <div class="author-written-by">
                                        Written by
                                    </div>
                                    <div class="author-name">
                                         <?php the_author_posts_link(); ?>
                                    </div>

                                </div>
                            </div>
                            <a class="top-left-article-post-link-a" href="<?php the_permalink(); ?>"></a>                              
                             <?php endwhile; else: endif;?>
                             <?php wp_reset_postdata(); ?>
                        </div>
                        <div id="article-area-right">

                          <?php 

                                $featuredright= new WP_Query(
                                    array(
                                        'post_type' => 'post',
                                        "posts_per_page" => 2,
                                        
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'category',
                                                'terms' => 'books',
                                                'field' => 'slug',
                                            )
                                        )
                                    )   
                                    );

                         ?>
                        <?php if($featuredright->have_posts() ): while( $featuredright->have_posts() ): $featuredright->the_post();?>           

                            <div class="right-article-conatiner">


                                <div class="article-pic">
                                        <?php if ( has_post_thumbnail() ) :
                                                            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ); ?>
                                                            <img   class="" src="<?php echo $featured_image[0]; ?>" alt="" />
                                            <?php else: ?>

                                                <?php  $featured_image=  get_template_directory_uri().'/images/logo.jpg'; ?>
                                                <img   class="" src="<?php echo $featured_image; ?>" alt="" />

                                        <?php  endif; ?>
                                </div>
                                <div class="right-article-details">
                                    <div class="article-date">
                                            <?php the_time( 'F jS, Y' ); ?> 
                                    </div>
                                    <div class="article-title">
                                            <?php the_title(); ?>
                                    </div>
                                    <div class="article-description">
                                             <?php echo wp_trim_words(get_the_excerpt(),26); ?>                                     </div>
                                    <div class="article-author-details">
                                        <div class="autor-pic">


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
                                       
                                       
                                        </div>
                                        <div class="author-right">
                                            <div class="author-written-by">
                                                Written by
                                            </div>
                                            <div class="author-name">
                                                    <?php the_author_posts_link(); ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <a class="right-article-post-link-a" href="<?php the_permalink(); ?>"></a>                            
                            </div>
                        <?php endwhile; else: endif;?>
                        <?php wp_reset_postdata(); ?>  
                        </div>
                    </div>

                </div>
                <div id="latest-articles">
                    <div class="section-title">
                        Latest Articles
                    </div>
                    <div id="latest-articles-container">

                   
                                 
                         <?php 
                                 $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $latestposts= new WP_Query(
                                    array(
                                        'post_type' => 'post',
                                        "posts_per_page" => 6,
                                        "paged"  => $current_page ,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'category',
                                                'terms' => 'teachers',
                                                'field' => 'slug',
                                            )
                                        )
                                    )   
                                    );
                                    

                        ?>

                         <?php if($latestposts->have_posts() ): while( $latestposts->have_posts() ): $latestposts->the_post();?>           

                        <div class="latest-article">


                            <div class="article-pic">
                                    <?php if ( has_post_thumbnail() ) :
                                                                    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ); ?>
                                                                    <img   class="" src="<?php echo $featured_image[0]; ?>" alt="" />
                                                    <?php else: ?>

                                                        <?php  $featured_image=  get_template_directory_uri().'/images/logo.jpg'; ?>
                                                        <img   class="" src="<?php echo $featured_image; ?>" alt="" />

                                     <?php  endif; ?>

                            </div>
                            <div class="right-article-details">
                                <div class="article-date">
                                         <?php the_time( 'F jS, Y' ); ?> 
                                </div>
                                <div class="article-title">
                                        <?php the_title(); ?>
                                </div>
                                <div class="article-description">
                                     <?php echo wp_trim_words(get_the_excerpt(),26); ?> 
                                </div>
                                <div class="article-author-details">
                                    <div class="autor-pic">
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
                                   
                                     </div>

                                    <div class="author-right">
                                        <div class="author-written-by">
                                            Written by
                                        </div>
                                        <div class="author-name">
                                                 <?php the_author_posts_link(); ?>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <a class="latest-post-link-a" href="<?php the_permalink(); ?>"></a>                            
                        </div>
                       
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>  


                    </div>



                </div>






                <div id="pagination-area">
                        <?php 
                     
                      echo paginate_links(array(
                          'total'=> $latestposts->max_num_pages,
                          'next_text'=>'Next',
                          'prev_text'=>'Prev',
                      ));
                        ?>
                </div>
                <?php  else: endif; ?>
            </div>
            <div class="h-padding" id="subscribe-area">
                <div id="subscribe-icon">
                    <i class="bi bi-envelope-open-fill"></i>
                </div>
                <div id="subscribe-title">
                    Subscribe Newsletter
                </div>
                <div id="subscribe-details">
                    Never miss the opportunity to get news and latest updates from Italian goverment
                </div>
                <div id="subscribe-input">
                    <input class="txtinput" type="text" placeholder="Send your email">
                    <input class="subsbtn" type="submit" value="Subscribe">

                </div>
                <div id="subscribe-sub-text">
                    We promise you not to spam
                </div>
            </div>


				
<?php get_footer(); ?>
