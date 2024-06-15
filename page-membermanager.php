<?php  /* Template Name: Member Manager  Template */  ?>

<?php get_header(); ?>


            <div id="member-details-area">
           
           <div id="member-middle">
               <div id="member-page-pic">
                   <img src="<?php echo get_template_directory_uri().'/images/face5.png'?>"  alt="">
               </div>
               
           </div>
           <div id="member-middle-details">
               <div id="member-page-name">
                   Name Surname
               </div>
               <div id="member-page-role">
                   Our team leader
               </div>
           </div>
       </div>
       <div class="member-page-service">
           <div class="member-page-service-title">
              Contact Us
           </div>
           <div id="member-page-service-description">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, dui id volutpat vestibulum, orci ipsum pharetra
               nunc, ac gravida quam ligula vel est. In consectetur ultricies sem, in bibendum enim dignissim et. Vestibulum
               dictum venenatis est non placerat. Maecenas rutrum nisi a fringilla viverra.
           </div>
           <div id="member-page-service-input-form">
               <!-- <input class="member-page-input-text" type="text" placeholder="Name">
               <input class="member-page-input-text" type="text" placeholder="Surname">
               <input class="member-page-input-text" type="text" placeholder="Address">
               <input class="member-page-input-text" type="text" placeholder="Tel Number">
               <input class="memeber-page-service-submit-btn" type="submit" value="Send now">  -->

               <?php echo do_shortcode("[scforjobform]"); ?>

               
           </div>
       </div>
       <div class="member-page-service">
           <div class="member-page-service-title">
               Send your CV
           </div>
           <div id="member-page-service-description">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, dui id volutpat vestibulum, orci ipsum pharetra
               nunc, ac gravida quam ligula vel est. In consectetur ultricies sem, in bibendum enim dignissim et. Vestibulum
               dictum venenatis est non placerat. Maecenas rutrum nisi a fringilla viverra.
           </div>
           <div id="member-page-service-input-form">
               <input class="member-page-input-text" type="text" placeholder="Name">
               <input class="member-page-input-text" type="text" placeholder="Surname">
               <input class="member-page-input-text" type="text" placeholder="Address">
               <input class="member-page-input-text" type="text" placeholder="Tel Number">

               <input class="memeber-page-service-submit-btn" type="submit" value="Send now">
           </div>
       </div>


<?php get_footer(); ?>
