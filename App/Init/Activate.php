<?php

/**
 * @package AWEBS online Fastfood plugin
 */

 namespace App\Init;

class Activate
{

  public function register(){
    flush_rewrite_rules();
  }

}
