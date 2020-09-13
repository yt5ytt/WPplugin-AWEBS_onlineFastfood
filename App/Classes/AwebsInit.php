<?php

/**
 * This is non-functional class file which contains some previous work
 */

namespace Classes;

  class AwebsInit{

    public function __construct(){
      add_shortcode('menuPage' , array($this, 'frontMenuPage'));
    }

    public function frontMenuPage(){
      require_once (AWEBS__PLUGIN_ROOT . 'includes' . DIRECTORY_SEPARATOR . 'frontendPages' . DIRECTORY_SEPARATOR . 'frontMenuPage.php');
    }

  }
