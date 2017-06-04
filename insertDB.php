<?php

/**
 * @author Thienlong
 * @copyright 2017
 */

require "conectDB.php";
 
$hoTen   = $_POST['hoten'];
$namSinh = $_POST['namsinh'];
$diaChi  = $_POST['diachi'];

$query = "INSERT INTO hocsinh VALUES(null, '$hoTen', '$namSinh', '$diaChi')";

if(mysqli_query($connect, $query)){
    echo "1";
}else{
    echo "0";
}


?>