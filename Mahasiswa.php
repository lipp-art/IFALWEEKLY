<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "ifalweekly";

    $conn = new mysqli($host, $username, $password, $database);

    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    //     echo "gagal koneksi";
    // }
    // else {
    //     echo "koneksi berhasil";
    // }

    $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($conn, $query);

    //mysqli_fetch_row
    //mysqli_fetch_assoc
    //mysqli_fetch_object
    //mysqli_fetch_array

    // $getData = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Mahasiswa - MyProject</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, sans-serif;
}

body{
    background:#0f172a;
    color:white;
}

/* Navbar */
.navbar{
    background:#1e293b;
    padding:18px 0;
    text-align:center;
    box-shadow:0 2px 10px rgba(0,0,0,0.2);
}

.navbar a{
    color:white;
    text-decoration:none;
    font-size:16px;
    font-weight:bold;
    margin:0 25px;
    transition:0.3s;
}

.navbar a:hover{
    color:#38bdf8;
}

.navbar a.active{
    color:#38bdf8;
    border-bottom:3px solid #38bdf8;
    padding-bottom:5px;
}

/* Container */
.container{
    width:90%;
    max-width:1200px;
    margin:40px auto;
}

/* Card */
.card{
    background:#1e293b;
    padding:25px;
    border-radius:15px;
    box-shadow:0 0 20px rgba(0,0,0,0.3);
}

h1{
    text-align:center;
    margin-bottom:20px;
}

/* Tombol */
.btn{
    display:inline-block;
    background:#38bdf8;
    color:white;
    padding:10px 20px;
    border-radius:8px;
    text-decoration:none;
    font-weight:bold;
    margin-bottom:20px;
    transition:0.3s;
}

.btn:hover{
    background:#0ea5e9;
}

/* Table */
table{
    width:100%;
    border-collapse:collapse;
    background:white;
    color:black;
    border-radius:10px;
    overflow:hidden;
}

th{
    background:#2563eb;
    color:white;
}

th, td{
    padding:12px;
    text-align:center;
    border:1px solid #ddd;
}

tr:nth-child(even){
    background:#f3f4f6;
}

tr:hover{
    background:#dbeafe;
}

/* Foto */
img{
    width:70px;
    height:70px;
    border-radius:50%;
    object-fit:cover;
}

/* Aksi */
.aksi a{
    text-decoration:none;
    font-weight:bold;
    margin:0 5px;
}

.edit{
    color:green;
}

.hapus{
    color:red;
}
</style>
</head>

<body>

<!-- Navbar -->
<div class="navbar">
    <a href="index.php">Home</a>
    <a href="profile.php">Profile</a>
    <a href="contact.php">Contact</a>
    <a href="Mahasiswa.php" class="active">Data Mahasiswa</a>
    <a href="Latihan.php">Latihan</a>
</div>

<!-- Konten -->
<div class="container">

    <div class="card">

        <h1>Data Mahasiswa</h1>

        <a href="inputdata.php" class="btn">+ Tambah Data</a>

        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        
            <?php
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {

            ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['jurusan']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['no_hp']; ?></td>
                <td><img src="asset/images/<?= $row['foto']; ?>" alt="Foto <?= $row['nama']; ?>"></td>
                <td class="aksi">
                    <a href="ubahdata.php?id=<?= $row['id']; ?>" class="edit">Edit</a>
                    <a href="hapusdata.php?id=<?= $row['id']; ?>" class="hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>