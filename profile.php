<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - MyProject</title>

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
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:85vh;
        }

        /* Card Profile */
        .card{
            background:#1e293b;
            width:400px;
            padding:30px;
            border-radius:15px;
            text-align:center;
            box-shadow:0 0 20px rgba(0,0,0,0.3);
        }

        .card img{
            width:150px;
            height:150px;
            border-radius:50%;
            object-fit:cover;
            border:4px solid #38bdf8;
            margin-bottom:15px;
        }

        .card h2{
            margin-bottom:10px;
        }

        .jabatan{
            color:#38bdf8;
            font-weight:bold;
            margin-bottom:20px;
        }

        .info{
            text-align:left;
            margin-top:15px;
        }

        .info p{
            margin:10px 0;
            color:#cbd5e1;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="profile.php" class="active">Profile</a>
        <a href="contact.php">Contact</a>
        <a href="Mahasiswa.php">Data Mahasiswa</a>
        <a href="Latihan.php">Latihan</a>
    </div>

    <!-- Profile -->
    <div class="container">
        <div class="card">

            <img src="asset/images/Profile.jpeg" alt="Foto Profile">

            <h2>Alif Tsaqif</h2>

            <p class="jabatan">Frontend Developer</p>

            <div class="info">
                <p><strong>Email :</strong> aliftsaqif17@email.com</p>
                <p><strong>No HP :</strong> 085262850505</p>
                <p><strong>NIM :</strong> 13182420101</p>
                <p><strong>Jurusan :</strong> Informatika</p>
            </div>

        </div>
    </div>

</body>
</html>