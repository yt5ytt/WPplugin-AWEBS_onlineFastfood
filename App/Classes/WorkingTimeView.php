<?php

/**
 * @package AWEBS online FastFood
 * @return Array      Gets data from workingtime DB table and returns array
 * @method are setTableName(), getWorkingTime()
 */

 namespace App\Classes;

class WorkingTimeView extends WorkingTime
{

  public function __construct(){
    $this->setTableName();
  }

  public function getWP(){
    return $this->getWorkingTime();
  }
}
