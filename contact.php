<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - MyProject</title>

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
            width:80%;
            max-width:700px;
            margin:50px auto;
        }

        h1{
            text-align:center;
            margin-bottom:30px;
        }

        /* Form */
        form{
            background:#1e293b;
            padding:30px;
            border-radius:15px;
            box-shadow:0 0 20px rgba(0,0,0,0.3);
        }

        label{
            display:block;
            margin-top:15px;
            margin-bottom:5px;
            font-weight:bold;
        }

        input,
        textarea{
            width:100%;
            padding:12px;
            border:none;
            border-radius:8px;
            outline:none;
        }

        textarea{
            resize:none;
        }

        button{
            background:#38bdf8;
            border:none;
            padding:12px;
            width:100%;
            border-radius:8px;
            color:white;
            font-weight:bold;
            font-size:16px;
            cursor:pointer;
            margin-top:20px;
            transition:0.3s;
        }

        button:hover{
            background:#0ea5e9;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="contact.php" class="active">Contact</a>
        <a href="Mahasiswa.php">Data Mahasiswa</a>
        <a href="Latihan.php">Latihan</a>
    </div>

    <!-- Contact Form -->
    <div class="container">

        <h1>Hubungi Kami</h1>

        <form action="" method="post">

            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan nama">

            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan email">

            <label>Pesan</label>
            <textarea name="pesan" rows="5" placeholder="Tulis pesan..."></textarea>

            <button type="submit">Kirim</button>

        </form>

    </div>

</body>
</html>