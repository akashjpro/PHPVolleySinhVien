<?php

/**
 * @author Thienlong
 * @copyright 2017
 */

require "conectDB.php";

$id = $_POST['id'];

$query = "DELETE FROM hocsinh WHERE id = '$id' ";

if(mysqli_query($connect, $query)){
    echo "ok";
}else{
    echo "no";
}

?>