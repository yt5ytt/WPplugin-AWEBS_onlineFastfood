<?php

/**
 * This is non-functional class file which contains some previous work
 */

namespace Classes;

  class AwebsInit{

    public function __construct(){
      add_shortcode('menuPage' , array($this, 'frontMenuPage'));
      add_action('init', array($this, 'tableFoodCat'));
      add_action('init', array($this, 'workingTime'));
    }

    public function frontMenuPage(){
      require_once (AWEBS__PLUGIN_ROOT . 'includes' . DIRECTORY_SEPARATOR . 'frontendPages' . DIRECTORY_SEPARATOR . 'frontMenuPage.php');
    }

    //Creating DB table for food categories
    public function tableFoodCat(){

      //creation of 'foodcat' DB table
      global $wpdb;
      $tableName = $wpdb->prefix . 'foodcat';

      $sql = "CREATE TABLE IF NOT EXISTS $tableName(
        id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        category VARCHAR(50) NOT NULL
      ) Engine=InnoDB collate utf8mb4_general_ci";

      include_once(ABSPATH . 'wp-admin' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'upgrade.php');
      dbDelta($sql);

      //insert 2 default categores
      $sql = "SELECT COUNT(*) FROM $tableName";
      $result = $wpdb->get_var($sql);

      if($result == 0):

        $categories = array('Pizzas', 'Drinks');
        foreach($categories as $category):
          $data = array('category' => $category);
          $wpdb->insert($tableName, $data);
        endforeach;

      else:

        $categories = array('Pizzas', 'Drinks', 'Pastas');
        foreach($categories as $category):
          $sql = "SELECT COUNT(*) FROM $tableName WHERE category='$category'";
          $result = $wpdb->get_var($sql);
          if($result == 0):
            $data = array('category' => $category);
            $wpdb->insert($tableName, $data);
          endif;
        endforeach;

      endif;

      //Flush the rewrite rules
      flush_rewrite_rules();

    }

  }
