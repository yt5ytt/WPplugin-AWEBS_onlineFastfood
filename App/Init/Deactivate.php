<?php

/**
 * @package AWEBS online Fastfood plugin
 */

 namespace App\Init;

class Deactivate
{

  public function register(){
    flush_rewrite_rules();
  }
  
}
