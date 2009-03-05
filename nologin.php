<?php
/*
Plugin Name: .No Login !!
Plugin URI: http://planetozh.com/blog/my-projects/wordpress-plugin-no-login/
Description: Never authenticate, you're always the admin. Obviously for test sites!
Author: Ozh
Version: 1.0.1
Author URI: http://planetozh.com/
*/

if (!function_exists('wp_validate_auth_cookie')) {
       function wp_validate_auth_cookie() {
               return 1;
       }
	   wp_enqueue_script('jquery');
	   add_action('admin_notices', 'ozh_nologin_warn');
}

function ozh_nologin_warn() {
	echo '<div class="updated fade" id="ozh_nologin" style="background:#ff0;text-align:center;color: red;"><p><strong>No Login <u>activated</u> - anybody gets admin rights!</strong> <span onclick="javascript:jQuery(this).parent().parent().slideToggle(200)" style="cursor:pointer">[dismiss]</span> </p></div>';
}

?>