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
                $redirect = home_url( '/dashboard' );
                return $redirect;
        }



?>
