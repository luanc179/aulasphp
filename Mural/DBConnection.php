<?php


class DBConnection{
    public static $db = null;

    public static function getDB()
    {
        if(self::$db == null){
            self::$db = new mysqli('database','docker','docker','docker',3306);

            if (self::$db->connect_errno > 0){
                die(self::$db->connect_error);
            }
        }

        return self::$db;

    }
}


