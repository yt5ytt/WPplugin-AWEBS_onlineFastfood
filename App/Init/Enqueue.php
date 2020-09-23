<?php

/**
 * @package AWEBS online Fastfood plugin
 */

 namespace App\Init;

class Enqueue
{

  public function register(){
    add_action('admin_enqueue_scripts', array($this, 'load_awebs_admin_plugin_scripts'));
    add_action('wp_enqueue_scripts' , array($this, 'load_awebs_wp_plugin_scripts'));
  }

  //load plugin admin styles and scripts
  public function load_awebs_admin_plugin_scripts(){
    wp_enqueue_style('awebs_admin_styles', AWEBS__PLUGIN_URL . 'includes/css/awebsAdmin.css', array(), '', 'all');
    wp_enqueue_script('awebs_admin_script', AWEBS__PLUGIN_URL . 'includes/js/awebsAdmin.js');
  }

  //load plugin wp styles and scripts
  public function load_awebs_wp_plugin_scripts(){
    wp_enqueue_style('awebs_frontend_styles', AWEBS__PLUGIN_URL . 'includes/css/awebsFrontend.css', array(), '', 'all');
    wp_enqueue_script('awebs_frontend_script', AWEBS__PLUGIN_URL . 'includes/js/awebsFrontend.js', '', '', true);
  }

}
