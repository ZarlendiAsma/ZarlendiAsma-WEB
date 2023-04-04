<?php
include_once("../function/koneksi.php");

$nip = $_GET["nip"];
$data_pegawai = query("SELECT * FROM `pegawai` WHERE nip='$nip'")[0];


 
if(isset($_POST['update']))
{	
    $nip = $_POST['nip'];
    $nama= $_POST['nama'];
    $no_hp=$_POST['no_hp'];
    $email=$_POST['email'];
    $nippp = $_POST['nippp'];
        
    $result = mysqli_query($db, "UPDATE `pegawai` SET `nama` = '$nama', `nip` = '$nip', `no_hp` = '$no_hp', `email` = '$email' WHERE `pegawai`.`nip` = '$nippp';");
    
    header("Location: ../index.php");
}
?>
<html>
<head>	
    <title>Edit Data Pegawai</title>
</head>
 
<body>

        <form action="edit.php"  method="post">
        <input type="hidden" value='<?=$data_pegawai['nip'] ?>' name="nippp" id="nip"> <br>
        <label for="nama">Nama</label> <br>
        <input type="text" value='<?=$data_pegawai['nama'] ?>' name="nama" id="nama"> <br>
        <label for="nip">NIP</label> <br>
        <input type="text" value='<?=$data_pegawai['nip'] ?>' name="nip" id="nip"> <br>
        <label for="no_hp">No. HP</label> <br>
        <input type="text" value='<?=$data_pegawai['no_hp'] ?>' name="no_hp" id="no_hp"> <br>
        <label for="email">E-mail</label> <br>
        <input type="text" value='<?=$data_pegawai['email'] ?>' name="email" id="email"> <br><br>

        <input type="submit" name="update" id="">
    </form>
</body>
</html>