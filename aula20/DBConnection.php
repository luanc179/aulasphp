<?php

class DB{
    public static function getConnection()
    {
        if(isset(DB::$connection)){
            DB::$connection = new PDO('mysql:host=database;dsname=docker;port=3308','docker','docker');
        }

        return DB::$connection;
    }
}

?>