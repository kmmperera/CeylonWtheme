

<?php 
add_theme_support('post-thumbnails');

register_nav_menus(

    array(

        'lang-switer' => 'Language switer menu',


    )

);
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

function ceyms_supul_post_type() {

	$args = array(


	'labels' => array(

				'name' => 'SupulMails',
				'singular_name' => 'SupulMail',
	),
	'hierarchical' => true,
	'public' => true,
	'has_archive' => true,
	
	'menu_icon' => 'dashicons-images-alt2',
	'supports' => array('title', 'editor', 'thumbnail','custom-fields', 'excerpt', 'comments'),

	);


register_post_type('supul', $args);


}
add_action('init', 'ceyms_supul_post_type',0);


function ceyms_arun_post_type() {

	$args = array(


	'labels' => array(

				'name' => 'ArunMails',
				'singular_name' => 'ArunMail',
	),
	'hierarchical' => true,
	'public' => true,
	'has_archive' => true,
	
	'menu_icon' => 'dashicons-images-alt2',
	'supports' => array('title', 'editor', 'thumbnail','custom-fields', 'excerpt', 'comments'),

	);


register_post_type('arun', $args);


}
add_action('init', 'ceyms_arun_post_type',0);



function ceyms_loans_post_type() {

	$args = array(


	'labels' => array(

				'name' => 'LoanMails',
				'singular_name' => 'LoanMail',
	),
	'hierarchical' => true,
	'public' => true,
	'has_archive' => true,
	
	'menu_icon' => 'dashicons-images-alt2',
	'supports' => array('title', 'editor', 'thumbnail','custom-fields', 'excerpt', 'comments'),

	);


register_post_type('loan', $args);


}
add_action('init', 'ceyms_loans_post_type',0);

function ceyms_docs_post_type() {

	$args = array(


	'labels' => array(

				'name' => 'DocsMails',
				'singular_name' => 'DocsMail',
	),
	'hierarchical' => true,
	'public' => true,
	'has_archive' => true,
	
	'menu_icon' => 'dashicons-images-alt2',
	'supports' => array('title', 'editor', 'thumbnail','custom-fields', 'excerpt', 'comments'),

	);


register_post_type('docs', $args);


}
add_action('init', 'ceyms_docs_post_type',0);

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


function shortcodeforjobform($atts){   

	$atts = shortcode_atts(
        array(
            'staff' => 'Staff member ',
            'operation' => 'Operation  to be done',
           
        ),
        $atts,
        'scforjobform'
    );
    $staff = esc_html($atts['staff']);
    $operation = esc_html($atts['operation']);

	?>
			<form class="member-page-service-input-form"> 
			<input class="staff" type="hidden" name="staff" value="<?php echo $staff; ?>">
			<input class="operation" type="hidden" name="operation" value="<?php echo $operation; ?>">

			<input  class="member-page-input-text name" type="text" placeholder="Name" required>
			<input  class="member-page-input-text surname" type="text" placeholder="Surname" required>
			<input  class="member-page-input-text address" type="email" placeholder="Email Address" required>
			<input  class="member-page-input-text telnum" type="text" placeholder="Tel Number" required>

			<input class="memeber-page-service-submit-btn" type="submit" value="Send now">
			</form>
			<div class="response-results">
			
				<div  class="modal member-modal">
					<div class="modal-content">
						<span class="member-modal-close"><i class="bi bi-x-square"></i></span>
						<p class="submit-results-member-jobs"></p>
						<a class="modal-pay-btn btn-opacity-change:hover" href="<?php echo get_permalink(get_page_by_path('upload-payments')->ID); ?>" id="backBtn">Upload Slip</a>
						
						<span class="modal-pay-btn btn-opacity-change:hover"><?php get_add_to_cart_button_by_id(78); ?>    </span>
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
			$staff = $_POST['staff'];
			$operation = $_POST['operation'];

			
			$full_name=$name." ".$surname;
			$cms_post_heading=$full_name." - ".$operation;
			$final_content="Job: ".$operation."\n";

			$final_content.="Full Name: ".$name." ".$surname."\n";
			$final_content .="Address: ".$address."\n";
			$final_content .="Telephone Number: ".$telnum."\n";
		
			$post = array(
				'post_title'    => $cms_post_heading,
				'post_content' =>  $final_content,
				'post_status'   => 'draft',   
				'post_type'     => $staff
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

						// side bars

function my_sidebars()
{
    

    register_sidebar(

        array(

            'name' => 'Euro rate widget Container',
            'id' => 'cms-euro-rate-sidebar-widget',




        )

    );

}
						// widget class for euro rate 




	class cms_Euro_Rate_Widget extends WP_Widget
			{
						
				function __construct()
					{
								parent::__construct(
								 
								// Base ID of your widget
									'cms_euro_widget', 
								 
								// Widget name will appear in UI
									__('Euro Rate Widget', 'ceylonmultiservices'), 
								 
								// Widget description
									array('description' => __('Widget for display Euro rate', 'ceylonmultiservices'), )
								);
					}
								 
								// Creating widget front-end
						
				public function widget($args, $instance)
					{
								$euro_rate = apply_filters('widget_title', $instance['euro_rate']);
							 
							  
									$args['before_widget'] = '<div class="euro-rate-wrapper h-padding" >';
								   $args['after_widget'] = '</div>';

								   $getPathIt=get_template_directory_uri().'/images/it-flag.png';
									$itflag='<img src=" '.$getPathIt .' " alt="">';

									$getPathSl=get_template_directory_uri().'/images/sl-flag.png';
									$slflag='<img src=" '.$getPathSl .' " alt="">';

								// before and after widget arguments are defined by themes
								echo $args['before_widget'];

									echo $itflag;
									echo '1 Euro = ';
									if (!empty($euro_rate)){
										echo $euro_rate.' LKR';
									}
									echo $slflag;		
										
							
								// This is where you run the code and display the output
						
							   echo $args['after_widget'];
					}
								 
								// Widget Backend
				public function form($instance)
					{
								if (isset($instance['euro_rate'])) {
									$euro_rate = $instance['euro_rate'];
								} else {
									$euro_rate = __('Enter the rate', 'ceylonmultiservices');
								}
							 
							
								// Widget admin form
								?>
								<p>
								<label for="<?php echo $this->get_field_id('euro_rate'); ?>"><?php _e('Euro Rate :'); ?></label>
								<input class="widefat" id="<?php echo $this->get_field_id('euro_rate'); ?>" name="<?php echo $this->get_field_name('euro_rate'); ?>" type="text" value="<?php echo esc_attr($euro_rate); ?>" />
								</p>
							
							 
							
							
							   
							
								<?php
						
					}
								 
								// Updating widget replacing old instances with new
				public function update($new_instance, $old_instance)
					{
								$instance = array();
								$instance['euro_rate'] = (!empty($new_instance['euro_rate'])) ? strip_tags($new_instance['euro_rate']) : '';
						
						
								return $instance;
					}
								 
								// Class wpb_widget ends here
	} 
						
						
						

								// Register and load the widget
	function cms__euro_widget()
			{
				register_widget('cms_Euro_Rate_Widget');
			}
	add_action('widgets_init', 'cms__euro_widget');

add_action('widgets_init', 'my_sidebars');




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