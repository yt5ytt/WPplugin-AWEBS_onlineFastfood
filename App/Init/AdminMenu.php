<?php

/**
 * @package AWEBS online Fastfood plugin
 */

 namespace App\Init;

class AdminMenu
{

  public function register(){
    add_action('admin_menu', array($this, 'awebs_menu_page'));
  }

  //admin menu initialisation
  public function awebs_menu_page(){
    add_menu_page(
        'AWEBS FastFood - Naslovna',
        'AWEBS FastFood',
        'manage_options',
        'awebs_fastfood',
        array($this, 'AWEBS_Fastfood_index'),
        'dashicons-paperclip',
        3
    );
  }

  public function AWEBS_Fastfood_index(){
    require_once( AWEBS__PLUGIN_ROOT . 'includes' . DIRECTORY_SEPARATOR . 'adminPages' . DIRECTORY_SEPARATOR . 'AWEBS_Fastfood_index.php');
  }

}
