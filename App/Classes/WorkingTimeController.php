<?php

/**
 * @package AWEBS online FastFood
 * Creates workingtime DB table, sets data in it and updates data in it
 * @method are setTableName(), createDBtable(), setWorkingTime() and updateWorkingTime($openTime, $closeTime)
 */

 namespace App\Classes;

class WorkingTimeController extends WorkingTime
{

  /**
   * Create workingtime DB table on initialistion and
   * inputs default working time
   */
  public function __construct(){
    $this->setTableName();
    $this->createDBtable();
    $this->setWorkingTime();
  }

  /**
   * Updates data in workingtime DB table
   */
  public function updateWT($openTime, $closeTime){
    $this->updateWorkingTime($openTime, $closeTime);
  }
}
