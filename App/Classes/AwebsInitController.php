<?php

/**
 * @package AwebsInitController Class
 */

 namespace Classes;

class AwebsInitController extends AwebsInit{

  public static function setHooksInit(){
    AwebsInit::hooksInit();
    AwebsInit::workingTime();
  }

}
