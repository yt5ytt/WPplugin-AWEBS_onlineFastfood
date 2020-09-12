<?php

/**
 * @package AWEBS online Fastfood plugin
 */

 namespace App\Init;

class SubmenuWorkingTime
{

  public function register(){
    add_action('admin_menu', array($this, 'awebs_submenu_working_time'));
  }

  //admin submenu for working tim adjusment
  public function awebs_submenu_working_time(){
    add_submenu_page(
      'awebs_fastfood',
      'AWEBS FastFood - Working Time',
      'Working Time',
      'manage_options',
      'working_time',
      array($this, 'AWEBS_Fastfood_workingTime'),
      50
    );
  }

  public function AWEBS_Fastfood_workingTime(){
    require_once( AWEBS__PLUGIN_ROOT . 'includes' . DIRECTORY_SEPARATOR . 'adminPages' . DIRECTORY_SEPARATOR . 'AWEBS_Fastfood_workingTime.php');
  }

}
