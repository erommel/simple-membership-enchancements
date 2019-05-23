<?php

/*
  Plugin Name: Simple Membership Enchancements
  Version: 0.0.1
  Plugin URI: https://simple-membership-plugin.com/
  Author: alexanderfoxc
  Author URI: https://simple-membership-plugin.com/
  Description: Adds some enchaments to Simple Membership plugin.
 */

class SwpmEnchancements {

    function __construct() {
	add_action( 'swpm_email_activation_data', array( $this, 'handle_email_activation_data' ) );
    }

    function handle_email_activation_data( $user_data ) {
	$user_data[ 'plain_password' ] = '';
	return $user_data;
    }

}

new SwpmEnchancements();
