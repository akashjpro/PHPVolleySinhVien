<?php

/**
 * @author GallerySoft.info
 * @copyright 2016
 */

    //$con = mysqli_connect("localhost","root","","phimanh");
    
   // $con = mysqli_connect("mysql.hostinger.vn","u413200587_adroi","123456789","u413200587_phim");
   // mysqli_query($con, "SET NAMES 'UTF8'");// ÐAT TIENG VIET
   require "conectDB.php";
    
    $query = "SELECT * FROM hocsinh";
    $data = mysqli_query($connect, $query);
    
    $mangHS = array();  
    
    while($row = mysqli_fetch_array($data, MYSQLI_ASSOC)){
        array_push($mangHS, new HocSinh($row['id'], $row['ten'], $row['namsinh'], $row['diachi'] ));
    }
    
    echo json_encode($mangHS);
    


class HocSinh{
    function HocSinh($id, $ten, $namsinh, $diachi){
        $this->id = $id;
        $this->ten = $ten;
        $this->namsinh = $namsinh;
        $this->diachi = $diachi;
    }
}
    

?>