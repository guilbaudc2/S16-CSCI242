<?php

class DatabaseManager {
     private static $db = NULL;

     public function __construct() {
          $conn = "My Connection";
          //imagine $conn contains a real db connection
          self::$db = $conn;
      }

      public function getDb()
      {
           if (self::$db == null)
        {
            self::$db = new DatabaseManager();
        }     
           return self::$db;
      }

      public function query($query) {
          //I would normally do something with db
          return $query;
      }

}

$db = DatabaseManager::getDb();
$db->getDb();
echo $db->query("Some SQL");

