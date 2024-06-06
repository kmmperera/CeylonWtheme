

<?php 

function ceyms_enqueue_scripts() {	
	
	wp_enqueue_style( 'dummycss', get_stylesheet_directory_uri() . '/css/styles.css', '', '1.0.99', 'all' );
	//wp_enqueue_script( 'dummyjs', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.8', true );
	wp_enqueue_style( 'headercss', get_stylesheet_directory_uri() . '/css/sass/header.css', '', '1.0.99', 'all' );
	wp_enqueue_style( 'footercss', get_stylesheet_directory_uri() . '/css/sass/footer.css', '', '1.0.99', 'all' );
	wp_enqueue_style( 'frontpagecss', get_stylesheet_directory_uri() . '/css/sass/newceylon.css', '', '1.0.99', 'all' );
	wp_enqueue_style( 'membercss', get_stylesheet_directory_uri() . '/css/sass/styleremem.css', '', '1.0.99', 'all' );
	wp_enqueue_style( 'impressacss', get_stylesheet_directory_uri() . '/css/sass/newimpressa.css', '', '1.0.99', 'all' );
	wp_enqueue_style( 'blogcss', get_stylesheet_directory_uri() . '/css/sass/newblog.css', '', '1.0.99', 'all' );

	wp_enqueue_style( 'robotoserif', 'https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap', '', '1.0.99', 'all' );


	wp_enqueue_style( 'boostrapicons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', '', '1.0.99', 'all' );

	wp_register_script('mainjs',get_template_directory_uri().'/js/main.js',array('jquery'),'1.0.16',true);
	wp_enqueue_script('mainjs');


    wp_localize_script( 'mainjs', 'ajax_object', [ 'ajax_url' => admin_url('admin-ajax.php') ] );

	

}
function overidewoocomstyles(){
	$num1=rand(1,999);
	$num2=rand(1,999);
	$num3=($num1+$num2)/2;
	wp_enqueue_style("mywoostyles",get_stylesheet_directory_uri().'/css/mywoo.css',array('woocommerce-general','woocommerce-layout','woocommerce-smallscreen'),$num3,'all');

	wp_enqueue_style("poststyles",get_stylesheet_directory_uri().'/css/sass/poststyle.css','',$num3,'all');

	wp_enqueue_style("searchliststyles",get_stylesheet_directory_uri().'/css/sass/searchlist.css','',$num3,'all');

}
add_action('wp_enqueue_scripts','ceyms_enqueue_scripts',2000);


add_action('wp_enqueue_scripts','overidewoocomstyles');

function custom_excerpt_length( $length ) {
	return 20;
	}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	


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




function shortcodeforjobform(){   

			return ' <form id="member-page-service-input-form">
			<input id="name" class="member-page-input-text" type="text" placeholder="Name">
			<input id="surname" class="member-page-input-text" type="text" placeholder="Surname">
			<input id="address" class="member-page-input-text" type="text" placeholder="Address">
			<input id="telnum" class="member-page-input-text" type="text" placeholder="Tel Number">

			<input class="memeber-page-service-submit-btn" type="submit" value="Send now">
			</form>';
}


add_shortcode("scforjobform","shortcodeforjobform");


function shortcodeforcheckout(){   
	//$checkoutlink=wc_get_checkout_url().'?add-to-cart=221';
	$checkoutlink='?add-to-cart=221&quantity=1';

	?>
	<a class="directcheckoutlink" href="<?php echo $checkoutlink ?>" >Pay now</a>

	<?php
}


add_shortcode("scforcheckout","shortcodeforcheckout");

add_action( 'wp_ajax_ceylonms_jobs_add', 'ceymsjobsaddfunc' );
add_action( 'wp_ajax_nopriv_ceylonms_jobs_add', 'ceymsjobsaddfunc' );

function ceymsjobsaddfunc(){

		
			$name = $_POST['name'];
			$surname = $_POST['surname'];
			$address = $_POST['address'];
			$telnum = $_POST['telnum'];
			
		
			$post = array(
				'post_title'    => $_POST['name'],
				'post_content' =>  $_POST['address'],
				'post_status'   => 'draft',   
				'post_type'     => 'jobs'
			);

			$post_id = wp_insert_post($post);

		//	wp_send_json($product_id);
			echo $post_id;
			wp_die();


}



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
		echo 'Error loading media file';
	} else {
		echo 'The media file was successfully uploaded!';
	}

} 

}

add_action('init', 'imguplodfunc',10);



add_filter ('woocommerce_add_to_cart_redirect', function( $url, $adding_to_cart ) {
    return wc_get_checkout_url();
}, 10, 2 ); 

add_filter( 'woocommerce_add_to_cart_validation', 'remove_cart_item_before_add_to_cart', 20, 3 );
function remove_cart_item_before_add_to_cart( $passed, $product_id, $quantity ) {
   // if( ! WC()->cart->is_empty() )
      //  WC()->cart->empty_cart();
    return $passed;
}



?>