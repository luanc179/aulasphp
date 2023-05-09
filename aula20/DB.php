<?php

class DB{
    public static function getConnection()
    {
        if(isset(DB::$connection)){
            return DB::$connection;
        }else{
            DB::$connection = new PDO('mysql:host=database:dsname=docker:port=3306','docker','docker');
        }
    }
}

?>