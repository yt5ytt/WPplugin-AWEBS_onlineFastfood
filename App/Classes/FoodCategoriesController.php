<?php

/**
 * @package AWEBS online FastFood
 * Creates foodcategories DB table, sets data in it and updates data in it
 * @method are setTableName(), createDBtable(), defaultCategories() and updateWorkingTime($openTime, $closeTime)
 */

 namespace App\Classes;

class FoodCategoriesController extends FoodCategories
{

  /**
   * Create workingtime DB table on initialistion and
   * inputs default working time
   */
  public function __construct(){
    $this->setTableName();
    $this->createDBtable();
    $this->defaultCategories();
  }

  /**
   * Updates data in workingtime DB table
   */
  // public function updateWT(){
  //
  //   if(isset($_POST['submitWT']) && $_POST['action'] == 'awebs_working_time'){
  //
  //     $openHour = $_POST['openHour'];
  //     $openMinute = $_POST['openMinute'];
  //     $closeHour = $_POST['closeHour'];
  //     $closeMinute = $_POST['closeMinute'];
  //
  //     $openTime = $openHour . ':' . $openMinute . ':00';
  //     $closeTime = $closeHour . ':' . $closeMinute . ':00';
  //
  //   }
  //
  //   $this->updateWorkingTime($openTime, $closeTime);
  //
  //   wp_redirect(admin_url('admin.php?page=working-time'));
  // }
}
