<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "ifalweekly";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    function tampildata($query){
        $result = mysqli_query($GLOBALS['conn'], $query);

        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambahdata($data){
        global $conn;

        $nama = htmlspecialchars($data["nama"]);
        $Nim = htmlspecialchars($data["nim"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $email = htmlspecialchars($data["email"]);
        $no_hp = htmlspecialchars($data["no_hp"]);
        $photo = $data["foto"];

        $query = "INSERT INTO mahasiswa (nama, nim, jurusan, email, no_hp, foto)
        VALUES ('$nama', '$Nim', '$jurusan', '$email', '$no_hp', '$photo')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapusdata($id){
        global $conn;

        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubahdata($data,$photo,$id){
        global $conn;

        $nama = htmlspecialchars($data["nama"]);
        $Nim = htmlspecialchars($data["nim"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $email = htmlspecialchars($data["email"]);
        $no_hp = htmlspecialchars($data["no_hp"]);
        $photoname = $photo['name'];
        $tmpname = $photo['tmp_name'];

        $upload_dir = 'asset/images/'.$photoname;

        if (move_uploaded_file($tmpname, $upload_dir)) {
            $query = "UPDATE mahasiswa SET
            nama = '$nama',
            nim = '$Nim',
            jurusan = '$jurusan',
            email = '$email',
            no_hp = '$no_hp',
            foto = '$photoname'
            WHERE id = $id";
        mysqli_query($conn, $query);    
        } 

        return mysqli_affected_rows($conn);

    }
?>