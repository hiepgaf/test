<?php
/*
 Template Name: Login Page
 */
 include 'css/login-style.css';
 ?>
 <div class="login-area">
	<div class="login-text">
		<h3>Đăng nhập</h3>
		<p> Sử dụng tài khoản của bạn để đăng nhập vào website. Nếu chưa có bạn có thể <a href="<?php bloginfo('url'); ?>/wp-login.php?action=register"> đăng kí tại đây.</a> </p>
	</div> 	
<div class="login-form">

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
</div>
<div class="login-error">
	<?php
        $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;
        if ( $login === "failed" ) {
                echo '<p><strong>ERROR:</strong> Sai username hoặc mật khẩu.</p>';
        } elseif ( $login === "empty" ) {
                echo '<p><strong>ERROR:</strong> Username và mật khẩu không thể bỏ trống.</p>';
        } elseif ( $login === "false" ) {
                echo '<p><strong>ERROR:</strong> Bạn đã thoát ra.</p>';
        }
?>
</div>
 </div>


