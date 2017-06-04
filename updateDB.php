<?php

/**
 * @author Thienlong
 * @copyright 2017
 */

require "conectDB.php";

$id     = $_POST['id'];
$name   = $_POST['name'];
$birth  = $_POST["birth"];
$place  = $_POST['place'];

$query = "UPDATE hocsinh SET  ten = '$name', namsinh = '$birth', diachi = '$place' 
WHERE id = '$id'";

if(mysqli_query($connect, $query)){
    echo "ok";
}else{
    echo "no";
}

?>