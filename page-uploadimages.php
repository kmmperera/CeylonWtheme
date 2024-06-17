<?php  /* Template Name: Upload Payments */  ?>


<?php get_header(); ?>


    <div class="mainbody h-padding">

            <div class="payslip-page-title">
                Upload your Pay Slip
            </div>
       
            <form id="featured_upload" method="post" action="#" enctype="multipart/form-data">

                    <table class="input-table">
                            <tr>
                                <td> <label for="post_id">User Code:</label></td>
                                <td> <input type="number" name="post_id" id="post_id" value="" placeholder="Enter your code" /></td>

                            </tr>
                            <tr>
                                <td><label for="my_image_upload">Pay Slip:</label></td>
                                <td>  <input type="file" name="my_image_upload" id="my_image_upload"  multiple="false" /> </td>
                            
                            </tr>

                    </table>
                <!-- <div class="input-container">
                    <label for="post_id">User Code:</label>
                    <input type="text" name="post_id" id="post_id" value="" /> <br>
                </div>
                
                <div class="input-container">
                    <label for="my_image_upload">Pay Slip:</label>
                    <input type="file" name="my_image_upload" id="my_image_upload"  multiple="false" /> <br>
                </div> -->

                <?php wp_nonce_field( 'my_image_upload', 'my_image_upload_nonce' ); ?>

                <input id="submit_my_image_upload" name="submit_my_image_upload" type="submit" value="Upload" />
            </form>

                <?php if (isset($_GET['message'])) echo '<p>' . esc_html($_GET['message']) . '</p>'; ?>


    </div>



<?php get_footer(); ?>