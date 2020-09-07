<?php

/**
 * @package AWEBS online FastFood
 * @return Array      Gets data from workingtime DB table and returns array
 */

 namespace App\Classes;

class WorkingTimeView extends WorkingTime
{
  public $openHour;
  public $openMinute;
  public $closeHour;
  public $closeMinute;

  public function __construct(){
    $this->setTableName();

    $results = $this->getWorkingTime();
    $openTime = $results->open_time;
    $temp = explode(':', $openTime);
    $this->openHour = $temp[0];
    $this->openMinute = $temp[1];

    $closeTime = $results->close_time;
    $temp = explode(':', $closeTime);
    $this->closeHour = $temp[0];
    $this->closeMinute = $temp[1];
  }
}
