<?php

/**
 * @package Working Time
 */

namespace App\Classes;

class WorkingTime
{

  private $tableName;
  private $id = 1;


  /**
   * Sets $tableName
   * @param TableName     Table Name: workingtime
   */
  protected function setTableName(){
    global $wpdb;
    $this->tableName = $wpdb->prefix . 'workingtime';
  }


  /**
   * Creation of DB table which handles working time data
   * @return
   */
  protected function createDBtable(){
    global $wpdb;
    $sql = "CREATE TABLE IF NOT EXISTS $this->tableName(
      id INT(1) NOT NULL AUTO_INCREMENT PRIMARY KEY,
      open_time TIME,
      close_time TIME,
      status VARCHAR(20) NOT NULL DEFAULT 'close'
    )";

    include_once(ABSPATH . 'wp-admin' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'upgrade.php');
    dbDelta($sql);
  }


  /**
   * Sets default working time in workingtime DB table
   * @param Data        Default working time
   */
  protected function setWorkingTime(){
    global $wpdb;
    $sql = "SELECT COUNT(*) FROM $this->tableName";
    $numRows = $wpdb->get_var($sql);

    if($numRows == 0):

      //insert default working time
      $data = array('open_time' => '06:00:00', 'close_time' => '23:00:00');
      $wpdb->insert($this->tableName, $data);

    endif;
  }


  /**
   *Gets working time data from workingtime DB table
   * @return Object      Object of working time data
   */
   protected function getWorkingTime(){
     global $wpdb;
     $sql = "SELECT * FROM $this->tableName WHERE id=$this->id";
     $results = $wpdb->get_row($sql);
     return $results;
   }


   /**
    * Update working time on request
    * @return
    */
    protected function updateWorkingTime($openTime, $closeTime){
      global $wpdb;
      $data = array(
        'open_time' => $openTime,
        'close_time' => $closeTime
      );

      $wpdb->update($this->tableName, $data, $this->id);
    }

}
