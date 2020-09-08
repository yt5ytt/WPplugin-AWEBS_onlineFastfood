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
  public function updateWT(){

    if(isset( $_POST['awebs_add_user_meta_nonce'] ) && wp_verify_nonce( $_POST['awebs_add_user_meta_nonce'], 'awebs_add_user_meta_form_nonce')){

      foreach($_POST as $data){

        if(is_array($data)){

            $openHour = $data['openHour'];
            $openMinute = $data['openMinute'];
            $closeHour = $data['closeHour'];
            $closeMinute = $data['closeMinute'];

            $openTime = $openHour . ':' . $openMinute . ':00';
            $closeTime = $closeHour . ':' . $closeMinute . ':00';

        }

      }

    }

    $this->updateWorkingTime($openTime, $closeTime);

    wp_redirect(admin_url('admin.php?page=working-time'));
  }
}
