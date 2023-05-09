<?php


$db = new mysqli('127.0.0.1','docker','docker','docker',3308);

if ($db -> connect_errno > 0){
    die ("Não foi possível conectar: {$db -> connect_error}");
}