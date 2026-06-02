<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan - MyProject</title>

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
            max-width:900px;
            margin:40px auto;
        }

        /* Card */
        .card{
            background:#1e293b;
            padding:30px;
            border-radius:15px;
            box-shadow:0 0 20px rgba(0,0,0,0.3);
        }

        h1{
            text-align:center;
            margin-bottom:25px;
            color:#38bdf8;
        }

        /* Table */
        table{
            width:100%;
            border-collapse:collapse;
            background:white;
            color:black;
        }

        td{
            border:1px solid #ccc;
            padding:40px;
            text-align:center;
            font-weight:bold;
        }

        tr:hover{
            background:#dbeafe;
        }

        .center{
            background:#38bdf8;
            color:white;
            font-size:24px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="contact.php">Contact</a>
        <a href="Mahasiswa.php">Data Mahasiswa</a>
        <a href="Latihan.php" class="active">Latihan</a>
    </div>

    <!-- Konten -->
    <div class="container">
        <div class="card">

            <h1>Latihan Tabel</h1>

            <table>
                <tr>
                    <td>1,1</td>
                    <td>1,2</td>
                    <td>1,3</td>
                    <td>1,4</td>
                </tr>

                <tr>
                    <td>2,1</td>
                    <td colspan="2" rowspan="2" class="center">?</td>
                    <td>2,4</td>
                </tr>

                <tr>
                    <td>3,1</td>
                    <td>3,4</td>
                </tr>

                <tr>
                    <td>4,1</td>
                    <td>4,2</td>
                    <td>4,3</td>
                    <td>4,4</td>
                </tr>
            </table>

        </div>
    </div>

</body>
</html>