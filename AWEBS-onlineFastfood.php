<?php
/**
* @package Online FastFood
*/

/*
  Plugin Name: AlexWEBSoft Online FastFood
  Author: AlexWEBSoft
  Author URI: http://www.alexwebsoft.net
  Version: 1.0.0 Beta
  Description: This is online fastfood plugin. This plugin has DataBase connection and tables for all aspects for online fastfood functioning, adding and removing categories of food, adding and removing ingrediens, seting working time. Suitable for all kinds of online restaurants.
*/

if(!defined('ABSPATH')):
  die("This is AWEBS online FastFood plugin for wordpress sites!!! Don't mess with me...");
endif;

//define PLUGIN root directory
define('AWEBS__PLUGIN_ROOT', ABSPATH . 'wp-content/plugins/AWEBS-onlineFastfood/');
define('AWEBS__PLUGIN_URL', plugins_url(DIRECTORY_SEPARATOR, __FILE__));

require_once(AWEBS__PLUGIN_ROOT . 'vendor'. DIRECTORY_SEPARATOR . 'autoload.php');

if (class_exists( 'App\\Init')){
  App\Init::register_services();
}
