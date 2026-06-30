<?php
include 'koneksi.php';

$id = $_GET['id'];

/* Ambil data berdasarkan ID */
$data = mysqli_query($conn, 
"SELECT * FROM buku1 WHERE id='$id'");

$row = mysqli_fetch_assoc($data);

/* Proses update */
if(isset($_POST['update'])){

    $kode_buku  = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang  = $_POST['pengarang'];

    mysqli_query($conn, "UPDATE buku1 SET
        kode_buku  = '$kode_buku',
        judul_buku = '$judul_buku',
        pengarang  = '$pengarang'
        WHERE id='$id'
    ");

    header("Location: data_buku.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Buku</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body{
            min-height: 100vh;
            background: linear-gradient(to right, #007bff, #00c6ff);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container{
            width: 100%;
            max-width: 500px;
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            animation: muncul 0.7s ease;
        }

        @keyframes muncul{
            from{
                opacity: 0;
                transform: translateY(30px);
            }
            to{
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo{
            text-align: center;
            font-size: 55px;
            margin-bottom: 10px;
        }

        h2{
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .form-group{
            margin-bottom: 20px;
        }

        label{
            display: block;
            margin-bottom: 8px;
            color: #444;
            font-weight: bold;
        }

        input{
            width: 100%;
            padding: 14px;
            border: 1px solid #ddd;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            transition: 0.3s;
        }

        input:focus{
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0,123,255,0.3);
        }

        .button-group{
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .btn{
            flex: 1;
            padding: 14px;
            border: none;
            border-radius: 50px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
            text-align: center;
        }

        .btn-update{
            background: linear-gradient(to right, #007bff, #00c6ff);
            color: white;
        }

        .btn-update:hover{
            transform: scale(1.03);
        }

        .btn-kembali{
            background: #6c757d;
            color: white;
        }

        .btn-kembali:hover{
            background: #565e64;
        }

        .footer{
            text-align: center;
            margin-top: 20px;
            color: #777;
            font-size: 14px;
        }

    </style>

</head>
<body>

    <div class="container">

        <div class="logo">
            ✏️
        </div>

        <h2>Edit Data Buku</h2>

        <form method="POST">

            <div class="form-group">
                <label>Kode Buku</label>
                <input type="text" 
                name="kode_buku"
                value="<?= $row['kode_buku'] ?>"
                required>
            </div>

            <div class="form-group">
                <label>Judul Buku</label>
                <input type="text" 
                name="judul_buku"
                value="<?= $row['judul_buku'] ?>"
                required>
            </div>

            <div class="form-group">
                <label>Pengarang</label>
                <input type="text" 
                name="pengarang"
                value="<?= $row['pengarang'] ?>"
                required>
            </div>

            <div class="button-group">

                <button type="submit" 
                name="update" 
                class="btn btn-update">
                    💾 Update
                </button>

                <a href="data_buku.php" 
                class="btn btn-kembali">
                    ⬅ Kembali
                </a>

            </div>

        </form>

        <div class="footer">
            PerpusApp • Sistem Perpustakaan Modern
        </div>

    </div>

</body>
</html>