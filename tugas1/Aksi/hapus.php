<?php
include_once("../function/koneksi.php");
 
$nip = $_GET['nip'];
 
$result = mysqli_query($db, "DELETE FROM `pegawai` WHERE nip='$nip'");
 
header("Location:../index.php");
?>