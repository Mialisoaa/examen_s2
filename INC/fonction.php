<?php
ini_set ('display_errors' , '1');
session_start();
function dbconnect()
{
    static $connect = null;
    if ($connect == null) {
        $connect = mysqli_connect('localhost', 'ETU004317', 'eFR4GqMz', 'db_s2_ETU004317');
        if (!$connect){
            die(''. mysqli_connect_error());
        }
    }
    return $connect;
}
