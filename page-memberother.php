<?php  /* Template Name: Member Other  Template */  ?>

<?php get_header(); ?>


            <div id="member-details-area">
           
           <div id="member-middle">
               <div id="member-page-pic">
                   <img src="<?php echo get_template_directory_uri().'/images/face3.jpg'?>"  alt="">
               </div>
               
           </div>
           <div id="member-middle-details">
               <div id="member-page-name">
                   Name Surname
               </div>
               <div id="member-page-role">
                    Administrator at Office

               </div>
           </div>
       </div>

       <div class="staff-accordion">
      

                    <div id="airtickets" class="member-page-service accordion-item">
                        <div class="member-page-service-title accordion-header">
                            Buy Air Tickets
                        </div>
                        <div class="accordion-content">
                                <div id="member-page-service-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, dui id volutpat vestibulum, orci ipsum pharetra
                                    nunc, ac gravida quam ligula vel est. In consectetur ultricies sem, in bibendum enim dignissim et. Vestibulum
                                    dictum venenatis est non placerat. Maecenas rutrum nisi a fringilla viverra.
                                </div>
                                <div  id="member-page-service-input-form">

                                    <?php echo do_shortcode('[scforjobform staff="supul" operation="airticket"]'); ?>

                                    
                                </div>
                        </div>

                    </div>


                   <div id="delivery" class="member-page-service accordion-item">
                        <div class="member-page-service-title accordion-header">
                            Deliveries
                        </div>
                        <div class="accordion-content">
                                <div id="member-page-service-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, dui id volutpat vestibulum, orci ipsum pharetra
                                    nunc, ac gravida quam ligula vel est. In consectetur ultricies sem, in bibendum enim dignissim et. Vestibulum
                                    dictum venenatis est non placerat. Maecenas rutrum nisi a fringilla viverra.
                                </div>
                                <div  id="member-page-service-input-form">

                                    <?php echo do_shortcode('[scforjobform staff="supul" operation="deliveries"]'); ?>

                                    
                                </div>
                        </div>

                    </div>

                     <div id="office" class="member-page-service accordion-item">
                        <div class="member-page-service-title accordion-header">
                            Office Work
                        </div>
                        <div class="accordion-content">
                                <div id="member-page-service-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, dui id volutpat vestibulum, orci ipsum pharetra
                                    nunc, ac gravida quam ligula vel est. In consectetur ultricies sem, in bibendum enim dignissim et. Vestibulum
                                    dictum venenatis est non placerat. Maecenas rutrum nisi a fringilla viverra.
                                </div>
                                <div  id="member-page-service-input-form">

                                    <?php echo do_shortcode('[scforjobform staff="supul" operation="office work"]'); ?>

                                    
                                </div>
                        </div>

                    </div>


        </div>


<?php get_footer(); ?>
