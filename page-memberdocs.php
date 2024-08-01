<?php  /* Template Name: Member Docs  Template */  ?>

<?php get_header(); ?>


            <div id="member-details-area">
           
           <div id="member-middle">
               <div id="member-page-pic">
                   <img src="<?php echo get_template_directory_uri().'/images/face4.png'?>"  alt="">
               </div>
               
           </div>
           <div id="member-middle-details">
               <div id="member-page-name">
                   Name Surname
               </div>
               <div id="member-page-role">
                  Document Work
               </div>
           </div>
       </div>
 <div class="staff-accordion">
      

      <div id="730" class="member-page-service accordion-item">
          <div class="member-page-service-title accordion-header">
              730
          </div>
          <div class="accordion-content">
                  <div id="member-page-service-description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, dui id volutpat vestibulum, orci ipsum pharetra
                      nunc, ac gravida quam ligula vel est. In consectetur ultricies sem, in bibendum enim dignissim et. Vestibulum
                      dictum venenatis est non placerat. Maecenas rutrum nisi a fringilla viverra.
                  </div>
                  <div  id="member-page-service-input-form">

                      <?php echo do_shortcode('[scforjobform staff="docs" operation="730"]'); ?>

                      
                  </div>
          </div>

      </div>


     <div id="sogiorno" class="member-page-service accordion-item">
          <div class="member-page-service-title accordion-header">
              Soggiorno Renewal
          </div>
          <div class="accordion-content">
                  <div id="member-page-service-description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, dui id volutpat vestibulum, orci ipsum pharetra
                      nunc, ac gravida quam ligula vel est. In consectetur ultricies sem, in bibendum enim dignissim et. Vestibulum
                      dictum venenatis est non placerat. Maecenas rutrum nisi a fringilla viverra.
                  </div>
                  <div  id="member-page-service-input-form">

                      <?php echo do_shortcode('[scforjobform staff="docs" operation="soggiorno"]'); ?>

                      
                  </div>
          </div>

      </div>

       <div id="spid" class="member-page-service accordion-item">
          <div class="member-page-service-title accordion-header">
             Spid
          </div>
          <div class="accordion-content">
                  <div id="member-page-service-description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, dui id volutpat vestibulum, orci ipsum pharetra
                      nunc, ac gravida quam ligula vel est. In consectetur ultricies sem, in bibendum enim dignissim et. Vestibulum
                      dictum venenatis est non placerat. Maecenas rutrum nisi a fringilla viverra.
                  </div>
                  <div  id="member-page-service-input-form">

                      <?php echo do_shortcode('[scforjobform staff="docs" operation="spid"]'); ?>

                      
                  </div>
            </div>

        </div>


</div>
      


<?php get_footer(); ?>
