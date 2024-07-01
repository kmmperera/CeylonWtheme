

<?php 
add_theme_support('post-thumbnails');


													//enqueue styles 

function ceyms_enqueue_scripts() {	
	
	//wp_enqueue_style( 'dummycss', get_stylesheet_directory_uri() . '/css/styles.css', '', '1.0.99', 'all' );
	//wp_enqueue_script( 'dummyjs', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.8', true );
	wp_enqueue_style( 'footercss', get_stylesheet_directory_uri() . '/css/sass/footer.css', '', '1.0.99', 'all' );
	wp_enqueue_style( 'impressacss', get_stylesheet_directory_uri() . '/css/sass/newimpressa.css', '', '1.0.99', 'all' );

	wp_enqueue_style( 'robotoserif', 'https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap', '', '1.0.99', 'all' );
	wp_enqueue_style( 'robotoori', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', '', '1.0.99', 'all' );
	wp_enqueue_style( 'playfairdisplay', 'https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap', '', '1.0.99', 'all' );


	wp_enqueue_style( 'boostrapicons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', '', '1.0.99', 'all' );

	


    wp_localize_script( 'mainjs', 'ajax_object', [ 'ajax_url' => admin_url('admin-ajax.php') ] );

	

}
function overidewoocomstyles(){
	$num1=rand(1,999);
	$num2=rand(1,999);
	$num3=($num1+$num2)/2;
	//wp_enqueue_style("mywoostyles",get_stylesheet_directory_uri().'/css/mywoo.css',array('woocommerce-general','woocommerce-layout','woocommerce-smallscreen'),$num3,'all');

	wp_enqueue_style("poststyles",get_stylesheet_directory_uri().'/css/sass/poststyle.css','',$num3,'all');

	wp_enqueue_style("searchliststyles",get_stylesheet_directory_uri().'/css/sass/searchlist.css','',$num3,'all');

	wp_enqueue_style( 'blogcss', get_stylesheet_directory_uri() . '/css/sass/newblog.css', '', $num3, 'all' );

	wp_enqueue_style( 'frontpagecss', get_stylesheet_directory_uri() . '/css/sass/newceylon.css', '',  $num3, 'all' );

	wp_enqueue_style( 'paymentformcss', get_stylesheet_directory_uri() . '/css/sass/paymentform.css', '',  $num3, 'all' );

	wp_enqueue_style( 'membercss', get_stylesheet_directory_uri() . '/css/sass/styleremem.css', '',  $num3, 'all' );

	wp_enqueue_style( 'headercss', get_stylesheet_directory_uri() . '/css/sass/header.css', '', $num3, 'all' );

	wp_enqueue_style( 'commoncss', get_stylesheet_directory_uri() . '/css/sass/common.css', '', $num3, 'all' );

	wp_enqueue_style( 'swiperjscss', 'https://unpkg.com/swiper/swiper-bundle.min.css', '', $num3, 'all' );


	wp_register_script('mainjs',get_template_directory_uri().'/js/main.js',array('jquery'),$num3,true);
	wp_enqueue_script('mainjs');

	wp_register_script('secondaryjs',get_template_directory_uri().'/js/secondaryjs.js','',$num3,true);
	wp_enqueue_script('secondaryjs');

	wp_register_script('swiperjscdn','https://unpkg.com/swiper/swiper-bundle.min.js','',$num3,true);
	wp_enqueue_script('swiperjscdn');





}
add_action('wp_enqueue_scripts','ceyms_enqueue_scripts',2000);


add_action('wp_enqueue_scripts','overidewoocomstyles');



								// excerpt length 


function custom_excerpt_length( $length ) {
	return 80;
	}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	

								// custom post type :jobs 


function ceyms_process_post_type() {

			$args = array(


			'labels' => array(

						'name' => 'Jobs',
						'singular_name' => 'job',
			),
			'hierarchical' => true,
			'public' => true,
			'has_archive' => true,
			
			'menu_icon' => 'dashicons-images-alt2',
			'supports' => array('title', 'editor', 'thumbnail','custom-fields', 'excerpt', 'comments'),

			);


	register_post_type('jobs', $args);


}
add_action('init', 'ceyms_process_post_type',0);


								// wp mail set up

function my_phpmailer_smtp( $phpmailer ) {
									$phpmailer->isSMTP();     
									$phpmailer->Host = SMTP_server;  
									$phpmailer->SMTPAuth = SMTP_AUTH;
									$phpmailer->Port = SMTP_PORT;
									$phpmailer->Username = SMTP_username;
									$phpmailer->Password = SMTP_password;
									$phpmailer->SMTPSecure = SMTP_SECURE;
									$phpmailer->From = SMTP_FROM;
									$phpmailer->FromName = SMTP_NAME;
								}
								
add_action( 'phpmailer_init', 'my_phpmailer_smtp' );

								//wp mail error messages

// add_action( 'wp_mail_failed', 'onMailError', 10, 1 );

// 	function onMailError( $wp_error ) {
// 									echo "<pre>";
// 									print_r($wp_error);
// 									echo "</pre>";
// 		}       


								//get product by id 


	
	function get_add_to_cart_button_by_id($product_id) {
		$product = wc_get_product($product_id);
		if ($product) {
			echo apply_filters('woocommerce_loop_add_to_cart_link',
				sprintf('<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
					esc_url($product->add_to_cart_url()),
					esc_attr(isset($quantity) ? $quantity : 1),
					esc_attr(isset($class) ? $class : 'button'),
					isset($attributes) ? wc_implode_html_attributes($attributes) : '',
					esc_html($product->add_to_cart_text())
				),
				$product
			);
		} else {
			echo 'Product not found.';
		}
	}
			
							// replace add to cart

							function change_add_to_cart_text($text, $product) {
								// Replace "Add to Cart" text for variable products
								if ($product->is_type('variable')) {
									return __('Select options', 'woocommerce');
								}
							
								// Replace "Add to Cart" text for other product types
								return __('Pay Now', 'woocommerce');
							}
							add_filter('woocommerce_product_add_to_cart_text', 'change_add_to_cart_text', 10, 2);
							
													

							
								// short codes for user input forms 


function shortcodeforjobform(){   

	?>
			<form id="member-page-service-input-form">
			<input id="name" class="member-page-input-text" type="text" placeholder="Name">
			<input id="surname" class="member-page-input-text" type="text" placeholder="Surname">
			<input id="address" class="member-page-input-text" type="text" placeholder="Address">
			<input id="telnum" class="member-page-input-text" type="text" placeholder="Tel Number">

			<input class="memeber-page-service-submit-btn" type="submit" value="Send now">
			</form>
			<div class="response-results">
			
				<div id="member-modal" class="modal">
					<div class="modal-content">
						<span class="member-modal-close">X</span>
						<p class="submit-results-member-jobs"></p>
						<a class="modal-pay-btn" href="<?php echo get_permalink(get_page_by_path('upload-payments')->ID); ?>" id="backBtn">Upload Pay Slip</a>
						
						<span class="modal-pay-btn"><?php get_add_to_cart_button_by_id(221); ?>    </span>
					</div>
				</div>
			
			</div>

	<?php
}


add_shortcode("scforjobform","shortcodeforjobform");



								// user input forms submission to custom post type




add_action( 'wp_ajax_ceylonms_jobs_add', 'ceymsjobsaddfunc' );
add_action( 'wp_ajax_nopriv_ceylonms_jobs_add', 'ceymsjobsaddfunc' );

function ceymsjobsaddfunc(){

		
			$name = $_POST['name'];
			$surname = $_POST['surname'];
			$address = $_POST['address'];
			$telnum = $_POST['telnum'];
			
			$full_name=$name." ".$surname;
			$final_content="Full Name: ".$name." ".$surname."\n";
			$final_content .="Address: ".$address."\n";
			$final_content .="Telephone Number: ".$telnum."\n";
		
			$post = array(
				'post_title'    => $full_name,
				'post_content' =>  $final_content,
				'post_status'   => 'draft',   
				'post_type'     => 'jobs'
			);

			$post_id = wp_insert_post($post);

		//	wp_send_json($product_id);

		//send mail

		   $from = 'contact@newelegantthemes.com';
		 	 $to = $address;
		   $message=$final_content." \n This is your code:".$post_id;
		   $subject="Testing mails from Monza";
		 //  $headers[] = 'From: '.get_bloginfo('name').' <'.$from.'>'; // 'From: Alex <me@alecaddd.com>'
		 //  $headers[] = 'Reply-To: '.$name.' <'.$address.'>';
			 $headers = array('Content-Type: text/html; charset=UTF-8');
 
		  if(  wp_mail($to, $subject, $message, $headers)){

			echo 'You have submitted details successfully.This is your code:'.$post_id;

		  }
		  else{
			echo 'Failed.Something went wrong.Try again after a while';
		  }


			
			wp_die();


}

								// update user inputs with paid reciepts


function imguplodfunc(){ 
if (
	isset( $_POST['my_image_upload_nonce'], $_POST['post_id'] )
	&& wp_verify_nonce( $_POST['my_image_upload_nonce'], 'my_image_upload' )
    && current_user_can( 'edit_post', $_POST['post_id'] )
    //&&  is_single()
) {
	// all ok! Moving on.
	// These files must be connected in the front end (front-end).
	require_once ABSPATH . 'wp-admin/includes/image.php';
	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/media.php';

	// Catch the download using WordPress native function.
	// Don't forget to specify the name attribute of the input field - 'my_image_upload'
	$attachment_id = media_handle_upload( 'my_image_upload', $_POST['post_id'] );

	if ( is_wp_error( $attachment_id ) ) {
		//$_POST = array();
		//echo "<script>document.querySelector('#featured_upload').reset();console.log('image attach failed !!!');</script>";
		wp_redirect(add_query_arg('message','failed', wp_get_referer()));
		exit;

	} else {
		//echo 'The media file was successfully uploaded!';
		//$_POST = array();
	//	echo "<script>document.querySelector('#featured_upload')[0].reset();console.log('image attached !!!');</script>";
	wp_redirect(add_query_arg('message', 'succeded', wp_get_referer()));
	exit;

	}

} 

}

add_action('init', 'imguplodfunc',10);




								// short codes for direct checkout 


function shortcodeforcheckout(){   
	//$checkoutlink=wc_get_checkout_url().'?add-to-cart=221';
	$checkoutlink='?add-to-cart=221&quantity=1';

	?>
	<a class="directcheckoutlink" href="<?php echo $checkoutlink ?>" >Pay now</a>

	<?php
}

add_shortcode("scforcheckout","shortcodeforcheckout");

								// woocommerce filter to direct checkout


add_filter ('woocommerce_add_to_cart_redirect', function( $url, $adding_to_cart ) {
    return wc_get_checkout_url();
}, 10, 2 ); 


								// woocommerce empty cart before add new item 


add_filter( 'woocommerce_add_to_cart_validation', 'remove_cart_item_before_add_to_cart', 20, 3 );
function remove_cart_item_before_add_to_cart( $passed, $product_id, $quantity ) {
   // if( ! WC()->cart->is_empty() )
      //  WC()->cart->empty_cart();
    return $passed;
}



?>