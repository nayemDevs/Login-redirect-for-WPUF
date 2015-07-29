<?php
/*
Plugin Name: Login redirect for Wp user fronted
Plugin URI: https://github.com/nayemDevs/Login-redirect-for-WPUF
Description: WPUF login redirect
Version: 1.0
Author: Nayem
Author URI: 
License: none
*/

add_filter('wpuf_login_redirect' , 'wlr_login_redirect');

function wlr_login_redirect($redirect){
        $redirect = home_url( '/' . wpuf_get_option( 'page_url', 'wpuf_general' ) );
        return $redirect;
}

add_filter( 'wpuf_options_others', 'wlr_menu_option');

function wlr_menu_option( $settings_fields ){

	 $settings_fields =  array(
            'name'    => 'page_url',
            'label'   => __( 'Insert your URL ', 'wpuf' ),
            'desc'    => __( 'Insert your URL to redirect user after login', 'wpuf' ),
            'type'    => 'text',
            'default' => 'dashboard'
        ),

}


?>

