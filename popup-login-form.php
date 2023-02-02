
<?php
/*
Plugin Name: Popup Login Form
Plugin URI: http://example.com/popup-login-form
Description: A simple Wordpress plugin to display a login form in a popup window.
Version: 1.0
Author: Your Name
Author URI: http://example.com
*/

add_action('wp_footer', 'popup_login_form_scripts');

function popup_login_form_scripts() {
  ?>
  <script>
    jQuery(document).ready(function($) {
      $('#show-popup-login-form').click(function(e) {
        e.preventDefault();
        $('#popup-login-form').show();
      });
    });
  </script>
  <?php
}


function $show_popup_login_form() {
  if (!$is_user_logged_in()) {
    ?>
    // HTML code for the login form
    <div id="popup-login-form" style="display:none;">
  <?php wp_login_form(); ?>
</div>
<?php

  } 

}


  