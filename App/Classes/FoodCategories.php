<?php

/**
 * @package Working Time
 */

namespace App\Classes;

class FoodCategories
{

  private $tableName;
  private $orderNumber;

  /**
   * Sets $tableName
   * @param TableName     Table Name: foodcategories
   */
  protected function setTableName(){
    global $wpdb;
    $this->tableName = $wpdb->prefix . 'foodcategories';
  }


  /**
   * Creation of DB table which handles food categories data
   * @return
   */
  protected function createDBtable(){
    global $wpdb;

    $sql = "CREATE TABLE IF NOT EXISTS $this->tableName(
      id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
      order_number INT(5) NOT NULL,
      category VARCHAR(50) NOT NULL,
      status VARCHAR(20) NOT NULL DEFAULT 'open'
    ) Engine=InnoDB collate utf8mb4_general_ci";

    include_once(ABSPATH . 'wp-admin' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'upgrade.php');
    dbDelta($sql);
  }


  /**
   * Insert 2 default food Categories
   * @return
   */
   protected function defaultCategories(){

     global $wpdb;
     $sql = "SELECT COUNT(*) FROM $this->tableName";
     $result = $wpdb->get_var($sql);

     if($result == 0):

       $categories = array('Pizzas', 'Drinks');
       foreach($categories as $category):
         $this->orderNumber ++;
         $data = array(
           'category' => $category,
           'order_number' => $this->orderNumber
         );
         $wpdb->insert($this->tableName, $data);
       endforeach;

     endif;

   }

}
