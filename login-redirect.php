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

    add_filter('wpuf_login_redirect' , 'login_redirect');

        function login_redirect($redirect){
                $redirect = home_url( '/get_option( 'menu_option' );' );
                return $redirect;
        }

    add_filter( 'wpuf_options_others', 'menu_option');

    function menu_option( $settings_fields ){

    	 $settings_fields =  array(
                'name'    => 'page_url',
                'label'   => __( 'Insert your URL ', 'wpuf' ),
                'desc'    => __( 'Insert your URL to redirect user after login', 'wpuf' ),
                'type'    => 'checkbox',
                'default' => 'on'
            ),

   }


?>
