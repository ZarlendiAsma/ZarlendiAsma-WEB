<?php 
$host = "localhost";
$username = "root";
$password = "";
$nm_dtb = "pegawai";
$db = mysqli_connect($host,$username,$password,$nm_dtb);
    
function query($query) {
    global $db;
    $result = mysqli_query($db,$query);
    $rows = []; 
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[]= $row;
    }
    return $rows;
}

?>