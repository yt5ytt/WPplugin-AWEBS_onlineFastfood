<?php

/**
 * @package AWEBS online Fastfood plugin
 */

 namespace App\Init;

class SubmenuFoodCategories
{

  public function register(){
    add_action('admin_menu', array($this, 'awebs_submenu_food_categories'));
  }

  //admin submenu for working tim adjusment
  public function awebs_submenu_food_categories(){
    add_submenu_page(
      'awebs_fastfood',
      'AWEBS FastFood - Food Categories',
      'Food Categories',
      'manage_options',
      'food_categories',
      array($this, 'AWEBS_Fastfood_foodCategories'),
      2
    );
  }

  public function AWEBS_Fastfood_foodCategories(){
    require_once( AWEBS__PLUGIN_ROOT . 'includes' . DIRECTORY_SEPARATOR . 'adminPages' . DIRECTORY_SEPARATOR . 'AWEBS_Fastfood_foodCategories.php');
  }

}
