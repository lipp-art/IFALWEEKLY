<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - MyProject</title>

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
            margin:0 25px;
            font-weight:bold;
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

        /* Hero Section */
        .hero{
            min-height:85vh;
            display:flex;
            justify-content:center;
            align-items:center;
            text-align:center;
            padding:20px;
        }

        .hero-content{
            max-width:800px;
        }

        .hero h1{
            font-size:48px;
            color:#38bdf8;
            margin-bottom:20px;
        }

        .hero p{
            font-size:18px;
            color:#cbd5e1;
            line-height:1.8;
            margin-bottom:30px;
        }

        .btn{
            display:inline-block;
            padding:12px 25px;
            background:#38bdf8;
            color:white;
            text-decoration:none;
            border-radius:8px;
            font-weight:bold;
            transition:0.3s;
        }

        .btn:hover{
            background:#0ea5e9;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="index.php" class="active">Home</a>
        <a href="profile.php">Profile</a>
        <a href="contact.php">Contact</a>
        <a href="Mahasiswa.php">Data Mahasiswa</a>
        <a href="Latihan.php">Latihan</a>
    </div>

    <!-- Home Content -->
    <div class="hero">
        <div class="hero-content">
            <h1>Selamat Datang di MyProject</h1>

            <p>
                Website ini dibuat sebagai media pembelajaran dan pengembangan
                kemampuan dalam bidang pemrograman web. Di dalam website ini
                terdapat halaman profil, kontak, data mahasiswa, serta berbagai
                latihan yang berkaitan dengan pengembangan website menggunakan
                HTML, CSS, PHP, dan MySQL.
            </p>

            <a href="profile.php" class="btn">
                Lihat Profil Saya
            </a>
        </div>
    </div>

</body>
</html>