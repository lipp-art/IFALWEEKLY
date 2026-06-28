<?php

    require 'fungsi.php';

    $id = $_GET["id"];

    $query = "SELECT * FROM mahasiswa WHERE id = $id";
    $mhs = tampildata($query)[0];

    if(isset($_POST["submit"])){

        if (ubahdata($_POST,$_FILES["foto"],$id) > 0){
            echo "
                <script>
                    alert('data berhasil di ubah');
                    document.location.href = 'mahasiswa.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal di ubah');
                    document.location.href = 'mahasiswa.php';
                </script>
            ";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link rel="stylesheet" href="style/inputdata.css">
</head>
<body>
    <nav>
        <ul>
            <ul><a href="index.php">Home</a></ul>
            <ul><a href="profil.php">Profil</a></ul>
            <ul><a href="contact.php">Contact</a></ul>
            <ul><a href="mahasiswa.php">Data</a></ul>
        </ul>
    </nav>
    <h2>Input Data Mahasiswa</h2>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="nama">Nama :</label><br></td>
                <td><input type="text" id="nama" name="nama" value="<?= $mhs["nama"] ?>" required></td>
            </tr>
            <tr>
               <td> <label for="Nim">Nim :</label></td>
               <td><input type="number" id="nim" name="nim" value="<?= $mhs["nim"] ?>" required></td>
            </tr>

            <tr>
                <td><label for="jurusan">jurusan :</label></td>
                <td><input type="text" id="jurusan" name="jurusan" value="<?= $mhs["jurusan"] ?>" required></td>
            </tr>
            <tr>
                <td><label for="email">email :</label></td>
                <td><input type="email" id="email" name="email" value="<?= $mhs["email"] ?>" required></td>
            </tr>
            <tr>
                <td><label for="no_hp">Nomor HP :</label></td>
                <td><input type="text" id="no_hp" name="no_hp" value="<?= $mhs["no_hp"] ?>" required></td>
            </tr>
            <tr>
                <td><label for="foto">Foto :</label></td>
                <td><input type="file" id="foto" name="foto"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
   </body>
</html>