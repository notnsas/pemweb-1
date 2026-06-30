<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background: #f4f7fb;
        }

        /* NAVBAR */

        .navbar{
            width: 100%;
            padding: 18px 8%;
            background: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .logo{
            font-size: 28px;
            font-weight: bold;
            color: #007bff;
        }

        .menu a{
            text-decoration: none;
            margin-left: 20px;
            color: #333;
            font-weight: bold;
            transition: 0.3s;
        }

        .menu a:hover{
            color: #007bff;
        }

        /* CONTAINER */

        .container{
            width: 90%;
            margin: 40px auto;
        }

        .header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .header h2{
            color: #333;
            font-size: 35px;
        }

        .btn{
            padding: 12px 18px;
            border-radius: 50px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-dashboard{
            background: #6c757d;
        }

        .btn-dashboard:hover{
            background: #565e64;
        }

        .btn-tambah{
            background: linear-gradient(to right, #007bff, #00c6ff);
        }

        .btn-tambah:hover{
            transform: scale(1.05);
        }

        .btn-edit{
            background: #ffc107;
            color: black;
            padding: 8px 14px;
            border-radius: 30px;
            text-decoration: none;
            transition: 0.3s;
            margin-right: 5px;
        }

.btn-edit:hover{
    background: #e0a800;
}

        /* TABLE */

        .table-container{
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        table th{
            background: linear-gradient(to right, #007bff, #00c6ff);
            color: white;
            padding: 16px;
            text-align: center;
        }

        table td{
            padding: 15px;
            border-bottom: 1px solid #eee;
            text-align: center;
        }

        table tr:hover{
            background: #f8fbff;
        }

        /* BUTTON HAPUS */

        .btn-hapus{
            background: #dc3545;
            color: white;
            padding: 8px 14px;
            border-radius: 30px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-hapus:hover{
            background: #b02a37;
        }

        /* EMPTY DATA */

        .kosong{
            text-align: center;
            padding: 30px;
            color: #777;
        }

        /* RESPONSIVE */

        @media(max-width: 768px){

            .header{
                flex-direction: column;
                align-items: flex-start;
            }

            .header h2{
                font-size: 28px;
            }

            table{
                font-size: 14px;
            }

            table th,
            table td{
                padding: 10px;
            }

        }

    </style>

</head>
<body>

    <!-- NAVBAR -->

    <div class="navbar">

        <div class="logo">
            📚 PerpusApp
        </div>

        <div class="menu">
            <a href="landingpage.php">Dashboard</a>
            <a href="data_buku.php">Data Buku</a>
        </div>

    </div>

    <!-- CONTENT -->

    <div class="container">

        <div class="header">

            <h2>📖 Data Buku</h2>

            <div>
                <a href="landingpage.php" class="btn btn-dashboard">
                    ⬅ Dashboard
                </a>

                <a href="tambah_buku.php" class="btn btn-tambah">
                    ➕ Tambah Buku
                </a>
            </div>

        </div>

        <div class="table-container">

            <table>

                <tr>
                    <th>No</th>
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Aksi</th>
                </tr>

                <?php
                $no = 1;
                $data = mysqli_query($conn, "SELECT * FROM buku1");

                if(mysqli_num_rows($data) > 0){

                    while($row = mysqli_fetch_assoc($data)) {
                ?>

                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['kode_buku'] ?></td>
                        <td><?= $row['judul_buku'] ?></td>
                        <td><?= $row['pengarang'] ?></td>
                        <td>
                            <a href="hapus.php?id=<?= $row['id'] ?>" 
                            class="btn-hapus"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                                🗑 Hapus
                            </a>
                            <a href="edit.php?id=<?= $row['id'] ?>" class="btn-edit">
                                ✏️ Edit
                            </a>
                        </td>
                    </tr>

                <?php 
                    }

                } else {
                ?>

                    <tr>
                        <td colspan="5" class="kosong">
                            Data buku masih kosong 📚
                        </td>
                    </tr>

                <?php } ?>

            </table>

        </div>

    </div>

</body>
</html>