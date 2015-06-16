<?php
/*
Plugin Name: LearnPress Prerequisite Courses
Plugin URI: http://thimpress.com/learnpress
Description: Course you have to finish before you can enroll to this course
Author: thimpress
Version: beta
Author URI: http://thimpress.com
Tags: learnpress
*/

if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

define( 'LPR_PREREQUISITES_PLUGIN_PATH', dirname( __FILE__ ) );
/**
 * Register prerequisite course addon
 */
function learn_press_register_prerequisites() {

    require_once( LPR_PREREQUISITES_PLUGIN_PATH . '/init.php' );
}
add_action( 'learn_press_register_add_ons', 'learn_press_register_prerequisites' );