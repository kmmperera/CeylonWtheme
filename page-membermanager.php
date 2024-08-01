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
       <div class="staff-accordion">
      

      <div id="consulting" class="member-page-service accordion-item">
          <div class="member-page-service-title accordion-header">
                 Consulting
          </div>
          <div class="accordion-content">
                  <div id="member-page-service-description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, dui id volutpat vestibulum, orci ipsum pharetra
                      nunc, ac gravida quam ligula vel est. In consectetur ultricies sem, in bibendum enim dignissim et. Vestibulum
                      dictum venenatis est non placerat. Maecenas rutrum nisi a fringilla viverra.
                  </div>
                  <div  id="member-page-service-input-form">

                      <?php echo do_shortcode('[scforjobform staff="arun" operation="consulting"]'); ?>

                      
                  </div>
          </div>

      </div>


     <div id="business" class="member-page-service accordion-item">
          <div class="member-page-service-title accordion-header">
             Business
          </div>
          <div class="accordion-content">
                  <div id="member-page-service-description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, dui id volutpat vestibulum, orci ipsum pharetra
                      nunc, ac gravida quam ligula vel est. In consectetur ultricies sem, in bibendum enim dignissim et. Vestibulum
                      dictum venenatis est non placerat. Maecenas rutrum nisi a fringilla viverra.
                  </div>
                  <div  id="member-page-service-input-form">

                      <?php echo do_shortcode('[scforjobform staff="arun" operation="business"]'); ?>

                      
                  </div>
          </div>

      </div>

       <div id="impresa" class="member-page-service accordion-item">
          <div class="member-page-service-title accordion-header">
             Impresa
          </div>
          <div class="accordion-content">
                  <div id="member-page-service-description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, dui id volutpat vestibulum, orci ipsum pharetra
                      nunc, ac gravida quam ligula vel est. In consectetur ultricies sem, in bibendum enim dignissim et. Vestibulum
                      dictum venenatis est non placerat. Maecenas rutrum nisi a fringilla viverra.
                  </div>
                  <div  id="member-page-service-input-form">

                      <?php echo do_shortcode('[scforjobform staff="arun" operation="impresa"]'); ?>

                      
                  </div>
          </div>

      </div>


</div>
      


<?php get_footer(); ?>
