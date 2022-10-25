<?php
    //membuat sambungan ke database
    $conn = new mysqli('localhost','root','','latihanweb');
    
    //jika ggal sambungan
    if($conn->connect_error){
        die("sambungan gagal : ".$conn->connect_error);
    }
    
?>