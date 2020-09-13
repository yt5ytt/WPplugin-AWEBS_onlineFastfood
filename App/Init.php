<?php

/**
 * @package AWEBS online Fastfood plugin
 * Description: Init class that initialize all
 * services in the application
 */

 namespace App;

 final class Init
 {

   /**
    * Array of all initialistion classes
    * @return array     List of all init classes of the plugin
    */
   public static function getAllClasses(){
     return [
       Init\Activate::class,
       Init\Deactivate::class,
       Init\Enqueue::class,
       Init\AdminMenu::class,
       Init\SubmenuFoodCategories::class,
       Init\FormPosts::class,
       Init\SubmenuWorkingTime::class
     ];
   }

   /**
    * Loop through all init classes, initialize them
    * and call register() method of the particular class
    * @return
    */
   public static function register_services(){

     foreach(self::getAllClasses() as $class){

       $service = self::initiate($class);
       if(method_exists($service, 'register')){
         $service->register();
       }

     }

   }

   /**
    * initialize the class
    * @param class $class       Class from the initiate() method
    * @return class instance    New instance of the class
    */
   private static function initiate($class){

     $service = new $class();
     return $service;

   }

 }
