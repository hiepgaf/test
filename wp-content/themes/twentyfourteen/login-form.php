<?php
/*
 Template Name: Login Page
 */
 ?>
 <div class="login-area">
	<div class="login-text">
		<h3>Đăng nhập</h3>
		<p> S </p>
	</div> 	
 </div>i
<?php
$args = array(
'redirect' => site_url( $_SERVER['REQUEST_URI'] ),
'form_id' => 'dangnhap', //Để dành viết CSS
'label_username' => __( 'Tên tài khoản' ),
'label_password' => __( 'Mật khẩu' ),
'label_remember' => __( 'Ghi nhớ' ),
'label_log_in' => __( 'Đăng nhập' ),
);
//get_header();
wp_login_form($args);
//get_footer();
?>
