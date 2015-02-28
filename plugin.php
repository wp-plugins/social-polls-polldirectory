<?php
/*
Plugin Name: Social Polls - polldirectory
Plugin URI:  http://free.polldirectory.net/
Description: Easily add polls to any post/page or to your sites .
Version:     1.0
Author:      Ioannis Knithou
Author URI:  http://free.polldirectory.net/
Licence:     GPLv2 or later
*/


add_action( 'admin_menu', 'feedAdminMenu' );
function feedAdminMenu() 
{
add_menu_page( 'Social Polls', 'Social Polls','manage_options', 'Social_Polls', 'Social_Polls');
}

function Social_Polls()
{
	include('admin_menu.php');
}

function socialpoll_fun( $atts ) {
   $pollid =  $atts['id'];
    include_once "script.php";
}

add_shortcode( 'socialpoll', 'socialpoll_fun' );


?>