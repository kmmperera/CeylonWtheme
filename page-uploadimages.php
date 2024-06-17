<?php  /* Template Name: Upload Payments */  ?>


<?php get_header(); ?>


    <div class="mainbody h-padding">


       
            <form id="featured_upload" method="post" action="#" enctype="multipart/form-data">
            
                <input type="text" name="post_id" id="post_id" value="" /> 
                <input type="file" name="my_image_upload" id="my_image_upload"  multiple="false" />
            

                <?php wp_nonce_field( 'my_image_upload', 'my_image_upload_nonce' ); ?>

                <input id="submit_my_image_upload" name="submit_my_image_upload" type="submit" value="Upload" />
            </form>

                <?php if (isset($_GET['message'])) echo '<p>' . esc_html($_GET['message']) . '</p>'; ?>


    </div>



<?php get_footer(); ?>