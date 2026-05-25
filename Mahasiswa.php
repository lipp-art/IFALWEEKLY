<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa-MyProject</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: white;
            margin: 0;
        }
        .container {
            text-align: center;
            padding: 50px;
        }
        .card {
            background: #1e293b;
            padding: 30px;
            border-radius: 12px;
            display: inline-block;
            widtd: 300px;
        }
        img {
            widtd: 120px;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        h2 {
            margin: 10px 0;
        }
        p {
            color: #cbd5f5;
        }
    </style>
</head>
<table border="1" spacing="0" cellpadding="10" bgcolor="white">
    <tr>
        <td>
            <a href="index.php">Home</a>
        </td>
        <td>
            <a href="profile.php">Profile</a>
        </td>
        <td>
            <a href="contact.php">Contact</a>
        </td>
        <td>
            <a href="Mahasiswa.php">Data Mahasiswa</a>
        </td>
        <td>
            <a href="Latihan.php">Latihan</a>
    </tr>

</table>

<table border="1" cellpadding="10">
    <h1>Data Mahasiswa</h1>
    <a href="inputdata.php">
    <button>Tambah Data</button> 
    </a>
    <br>
    <br>
    <tr align="center"> 
        <td>No</td>
        <td>Nama</td>
        <td>Jurusan</td>
        <td>Email</td>
        <td>No HP</td>
        <td>Foto</td>
        <td>Aksi</td>
    </tr>


    <tr align="center">
        <td>1</td>
        <td>Alif Tsaqif</td>
        <td>Informatika</td>
        <td>anomali@gmail.com</td>
        <td>085262850505</td>
        <td><img src="asset/images/Profile.jpeg" width="70px"></td>
        <td>
            <a href="editdata.php?id=1">Edit</a> |
            <a href="deletedata.php?id=1" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
        </td>
    </tr>

    <tr align="center">
        <td>2</td>
        <td>Nuwafa Sabilla</td>
        <td> Manajemen</td>
        <td>nuwafa@gmail.com</td>
        <td>085262850506</td>
        <td><img src="asset/images/koceng.jpg" width="70px"></td>
    </tr>
</table>
