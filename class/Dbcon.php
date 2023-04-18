<?php

class DB{
    public static function con(){

        $db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        return $db;
  
    }
    
    public static function query($q){
        $result = self::con()->query($q);
        return $result;
    }
}
?>
