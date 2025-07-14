<?php
ini_set ('display_errors' , '1');
session_start();
function dbconnect()
{
    static $connect = null;
    if ($connect == null) {
        $connect = mysqli_connect('localhost', 'ETU004317', 'eFR4GqMz', '');
        if (!$connect){
            die(''. mysqli_connect_error());
        }
    }
    return $connect;
}
