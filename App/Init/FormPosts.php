<?php

/**
 * @package AWEBS online Fastfood plugin
 */

 namespace App\Init;

class FormPosts
{

  public function register(){

    $controller = new \App\Classes\WorkingTimeController();

    add_action('admin_post_awebs_working_time', array($controller, 'updateWT'));

  }

}
