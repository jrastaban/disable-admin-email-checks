<?php
/**
 * Plugin Name: Disable admin email checks
 * Plugin URI: https://github.com/jrastaban/disable-admin-email-checks/
 * Description: A plugin to disable the admin email checks in WordPress
 * Version: 0.1
 * Author: John Richards II
 * Author URI: https://www.linkedin.com/in/johnrichardsii/
 */

add_filter( 'admin_email_check_interval', '__return_false' );
