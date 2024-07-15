<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
      <?php bloginfo('name'); ?> 
    </title>
   
    <?php wp_head(); ?>
  </head>
  <body>
    
  <div id="main-container">
        
            <div class="h-padding" id="main-nav">
                <div id="logo-area">
                    <div id="logo-img">
                        <img src="<?php echo get_template_directory_uri().'/images/logo.jpg'?>" alt="">
                    </div>
                    <div id="logo-text">
                       <p> Ceylon  </p> 
                        
                        <p>  Multi-Service Agency  </p>
                       
                        
                        <p> Monza </p> 
                    </div>
                </div>
                <div id="nav-menus">
                    <div id="m-logo-area">
                        <div id="m-logo-img">
                            <img src="<?php echo get_template_directory_uri().'/images/logo.jpg'?>" alt="">
                        </div>
                        <div id="m-logo-text">
                                <p> Ceylon  </p> 
                                
                                <p>  Multi-Service Agency  </p>
                            
                                
                                <p> Monza </p> 
                        </div>
                    </div>
                    <i class="bi bi-x-square closebutton"></i>
                    <ul id="nav-ul">

                        <li class="nav-li">
                            <a href="<?php echo home_url();?>" class="nav-a">Home</a>
                        </li>
                        <li class="nav-li">
                            <a href="<?php echo home_url();?>#our-team" class="nav-a">About</a>
                        </li>
                        <li class="nav-li">
                            <a href="<?php echo get_permalink(get_page_by_path('our-manager')->ID); ?>" class="nav-a">Contact</a>
                        </li>
                        <li class="nav-li">
                            <a href="<?php echo get_permalink(get_page_by_path('blog')->ID); ?>" class="nav-a">Blog</a>
                        </li>
                        <li class="nav-li">
                            <a href="<?php echo get_permalink(get_page_by_path('impressa')->ID); ?>" class="nav-a impressa">Impressa</a>
                        </li>

                    </ul>

                </div>
                <div class="overlay-div"></div>
                <i class="bi bi-list active"></i>

            </div>