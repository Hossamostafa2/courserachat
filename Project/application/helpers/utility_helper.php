<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (! function_exists('check_user_login')) {
   function check_user_login(){
     $CI = & get_instance();
     $CI->load->helper('cookie');
     return get_cookie('user_data');
   }
}

if (! function_exists('add_user_login')) {
   function add_user_login($userData){
     $CI = & get_instance();
     $CI->load->helper('cookie');
     $userCookie = $userData;
     set_cookie('user_data',$userCookie,'3600');
   }
}

if (! function_exists('add_temp_user_login')) {
   function add_temp_user_login($userData){
     $CI = & get_instance();
     $CI->load->helper('cookie');
     $userCookie = $userData;
     set_cookie('user_data',$userCookie, '0');
   }
}

if (! function_exists('delete_user_login')) {
   function delete_user_login(){
     $CI = & get_instance();
     $CI->load->helper('cookie');
     delete_cookie('user_data');
   }
}

?>
