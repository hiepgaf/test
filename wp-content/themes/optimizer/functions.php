<?php
/**
 * The MAIN FUNCTIONS FILE for OPTIMIZER
 *
 * Stores all the Function of the template.
 *
 * @package Optimizer
 * 
 * @since Optimizer 1.0
 */

//**************Optimizer Golbal******************//
/*CHECK IF optimizer row exist in the wp_options table. Needed for Redux Conversion process*/ 
$optimizerdb = get_option( 'optimizer' );

//**************optimizer SETUP******************//
function optimizer_setup() {
	//add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );			//WP 4.1 Site Title
	add_theme_support( 'woocommerce' );			//Woocommerce Support
	add_theme_support('automatic-feed-links');	//RSS FEED LINK
	add_theme_support( 'post-thumbnails' );		//Post Thumbnail
	//Custom Background	
	add_theme_support( 'custom-background', array( 'default-color' => 'f7f7f7') );	
	//Make theme available for translation
	load_theme_textdomain('optimizer', get_template_directory() . '/languages/');  
	
	//Custom Thumbnail Size	
		add_image_size( 'optimizer_thumb', 400, 270, true ); /*(cropped)*/
   
	//Register Menus
	register_nav_menus( array(
			'primary' => __( 'Header Navigation', 'optimizer' ),
		) );
	}
add_action( 'after_setup_theme', 'optimizer_setup' );

//**************optimizer FUNCTIONS******************//
require(get_template_directory() . '/framework/core-functions.php');			//Include Optimizer Framework Core Functions 
require(get_template_directory() . '/lib/functions/core.php');					//Include Core Functions
require(get_template_directory() . '/lib/functions/enqueue.php');					//Include Enqueue CSS/JS Scripts
require(get_template_directory() . '/lib/functions/admin.php');				//Include Admin Functions (admin)
require(get_template_directory() . '/lib/functions/woocommerce.php');			//Include Woocommerce Functions
require(get_template_directory() . '/lib/functions/defaults.php');
require(get_template_directory() . '/customizer/customizer.php');
require(get_template_directory() . '/lib/functions/converter.php');
require(get_template_directory() . '/lib/includes/google_fonts.php');

//WIDGETS
require(get_template_directory() . '/frontpage/widgets/init.php');
require(get_template_directory() . '/framework/core-posts.php');		
require(get_template_directory() . '/framework/core-pagination.php');
//Xay dung ham chuyen sau khi loging
function redirect_login_page() {
    $login_page  = home_url( '/?page_id=63/' );
    $page_viewed = basename($_SERVER['REQUEST_URI']); 
 
    if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
        wp_redirect($login_page);
        exit;
    }
}
add_action('init','redirect_login_page');
/* Tự động chuyển đến một trang khác sau khi login */
function my_login_redirect( $redirect_to, $request, $user ) {
        //is there a user to check?
        global $user;
        if ( isset( $user->roles ) && is_array( $user->roles ) ) {
                //check for admins
                if ( in_array( 'administrator', $user->roles ) ) {
                        // redirect them to the default place
                        return admin_url();
                } else {
                        return home_url();
                }
        } else {
                return $redirect_to;
        }
}
 
add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );
/* Kiểm tra lỗi đăng nhập */
function login_failed() {
    $login_page  = home_url( '/?page_id=63/' );
    wp_redirect( $login_page . '?login=failed' );
    exit;
}
add_action( 'wp_login_failed', 'login_failed' ); 
 
function verify_username_password( $user, $username, $password ) {
    $login_page  = home_url( '/?page_id=63/' );
    if( $username == "" || $password == "" ) {
        wp_redirect( $login_page . "?login=empty" );
        exit;
    }
}
add_filter( 'authenticate', 'verify_username_password', 1, 3);