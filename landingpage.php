<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background: #f4f7fb;
            overflow-x: hidden;
        }

        /* NAVBAR */

        .navbar{
            width: 100%;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .logo{
            font-size: 28px;
            font-weight: bold;
            color: #007bff;
        }

        .menu a{
            text-decoration: none;
            margin-left: 25px;
            color: #333;
            font-weight: bold;
            transition: 0.3s;
        }

        .menu a:hover{
            color: #007bff;
        }

        /* HERO */

        .hero{
            min-height: 100vh;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 120px 8% 50px;
            background: linear-gradient(to right, #007bff, #00c6ff);
            color: white;
        }

        .hero-text{
            width: 50%;
        }

        .hero-text h1{
            font-size: 55px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-text p{
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .hero-btn{
            display: inline-block;
            padding: 15px 30px;
            background: white;
            color: #007bff;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: 0.3s;
        }

        .hero-btn:hover{
            background: #f1f1f1;
            transform: scale(1.05);
        }

        .hero-image{
            width: 45%;
            text-align: center;
        }

        .hero-image img{
            width: 100%;
            max-width: 500px;
            animation: melayang 3s ease-in-out infinite;
        }

        @keyframes melayang{
            0%{
                transform: translateY(0px);
            }
            50%{
                transform: translateY(-15px);
            }
            100%{
                transform: translateY(0px);
            }
        }

        /* FITUR */

        .fitur{
            padding: 80px 8%;
            text-align: center;
        }

        .fitur h2{
            font-size: 40px;
            color: #333;
            margin-bottom: 15px;
        }

        .fitur p{
            color: #777;
            margin-bottom: 50px;
        }

        .fitur-container{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
            gap: 25px;
        }

        .card{
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .card:hover{
            transform: translateY(-10px);
        }

        .card h3{
            margin: 20px 0 10px;
            color: #007bff;
        }

        .card p{
            color: #666;
            line-height: 1.7;
        }

        .icon{
            font-size: 55px;
        }

        /* FOOTER */

        footer{
            background: #007bff;
            color: white;
            text-align: center;
            padding: 25px;
            margin-top: 50px;
        }

        /* RESPONSIVE */

        @media(max-width: 900px){

            .hero{
                flex-direction: column;
                text-align: center;
            }

            .hero-text{
                width: 100%;
                margin-bottom: 50px;
            }

            .hero-text h1{
                font-size: 40px;
            }

            .hero-image{
                width: 100%;
            }

            .menu{
                display: none;
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
            <a href="">Home</a>
            <a href="index2.php">Fitur</a>
            <a href="">Tentang</a>
            <a href="paijo.php">Masuk</a>
        </div>

    </div>

    <!-- HERO -->

    <section class="hero">

        <div class="hero-text">

            <h1>
                Sistem Perpustakaan Modern & Sederhana
            </h1>

            <p>
                Kelola data buku perpustakaan dengan mudah, cepat,
                dan tampilan yang menarik. Cocok untuk sekolah,
                kampus, maupun belajar CRUD PHP MySQL.
            </p>

            <a href="paijo.php" class="hero-btn">
                🚀 Mulai Sekarang
            </a>

        </div>

        <div class="hero-image">

            <img src="https://cdn-icons-png.flaticon.com/512/2702/2702134.png">

        </div>

    </section>

    <!-- FITUR -->

    <section class="fitur">

        <h2>Fitur Aplikasi</h2>

        <p>
            Aplikasi sederhana namun memiliki fitur penting
            untuk pengelolaan perpustakaan.
        </p>

        <div class="fitur-container">

            <div class="card">
                <div class="icon">📖</div>
                <h3><a href="data_buku.php">Data Buku</a></h3>
                <p>
                    Menampilkan seluruh data buku secara rapi
                    dan mudah dibaca.
                </p>
                
            </div>

            <div class="card">
                <div class="icon">➕</div>
                <h3><a href="tambah_buku.php">Tambah Buku</a></h3>
                <p>
                    Menambahkan data buku baru dengan cepat
                    menggunakan form sederhana.
                </p>
            </div>

            <div class="card">
                <div class="icon">✏️</div>
                <h3><a href="data_buku.php">Edit Data</a></h3>
                <p>
                    Mengubah data buku kapan saja sesuai kebutuhan.
                </p>
            </div>

            <div class="card">
                <div class="icon">🗑️</div>
                <h3>Hapus Buku</h3>
                <p>
                    Menghapus data buku dengan konfirmasi aman.
                </p>
            </div>

        </div>

    </section>

    <!-- FOOTER -->

    <footer>
        © 2026 PerpusApp | Aplikasi CRUD PHP MySQL
    </footer>

</body>
</html>