<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
</head>
<body>
    <form action="tambah.php"  method="post">
        <label for="nama">Nama</label> <br>
        <input type="text" name="nama" id="nama"> <br>
        <label for="nip">NIP</label> <br>
        <input type="text" name="nip" id="nip"> <br>
        <label for="no_hp">No. HP</label> <br>
        <input type="text" name="no_hp" id="no_hp"> <br>
        <label for="email">E-mail</label> <br>
        <input type="text" name="email" id="email"> <br><br>

        <input type="submit" name="simpan" id="">
    </form>


    <?php
        if(isset($_POST['simpan'])) {
            $nama = $_POST['nama'];
            $nip = $_POST['nip'];
            $no_hp = $_POST['no_hp'];
            $email = $_POST['email'];
            
            include_once("../function/koneksi.php");
                    
            $result = mysqli_query($db, "INSERT INTO `pegawai` (`nama`, `nip`, `no_hp`, `email`) VALUES ('$nama', '$nip', '$no_hp', '$email')");
            header('Location: ../index.php');
        }
    ?>
</body>
</html>