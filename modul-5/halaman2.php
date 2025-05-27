<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengalaman Kuliah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            padding: 20px;
        }
        .container {
            max-width: 700px;
            margin: auto;
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        nav {
            text-align: center;
            margin-bottom: 20px;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        h1 {
            text-align: center;
            color: #333;
        }
    
        .event {
            margin-bottom: 20px;
        }
        .event h3 {
            margin-bottom: 5px;
            color: #000;
        }
        .event small {
            color: #333;
            font-size: 0.9em;
        }
        .event p {
            margin: 10px 0 0 0;
            line-height: 1.5;
            text-align: justify;
        }
        .nav-buttons {
            text-align: center;
            margin-top: 30px;
        }
         nav {
            background-color: #fafafa;
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            text-align: center;
        }
        
        .nav-buttons a {
            display: inline-block;
            padding: 10px 18px;
            margin: 5px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }


        .timeline {
            position: relative;
            margin: 0;
            padding: 20px 0 20px 40px;
            border-left: 3px solid #007bff;
        }

        .event {
            position: relative;
            margin-bottom: 30px;
            padding-left: 20px;
        }

        .event::before {
            content: "";
            position: absolute;
            left: -11px;
            top: 5px;
            width: 16px;
            height: 16px;
            background-color:rgb(92, 157, 226);
            border-radius: 50%;
            border: 2px solid white;
            box-shadow: 0 0 0 3px #007bff33;
        }

        .event h3 {
            margin-bottom: 5px;
            color: #000;
        }

        .event small {
            color: #666;
            font-size: 0.9em;
        }

        .event p {
            margin-top: 10px;
            line-height: 1.6;
            text-align: justify;
        }

    </style>
</head>
<body>
<div class="container">
    <h1>Timeline Pengalaman Kuliah</h1>
    <div class="timeline">
        <?php
        $pengalaman = [
            [
                "judul" => "Kesan Pertama Kuliah",
                "tanggal" => "2023-08-21",
                "cerita" => "Hallo aku Septi, aku mau menceritakan pengalamanku selama kuliah. Awalnya aku merasa senang jadi seorang mahasiswa karena aku bakal dapat teman-teman baru. Aku pernah mikir kalau kuliah itu enak karena bebas memakai pakaian, tetapi ternyata tidak. Kuliah itu tidak semenyenangkan di pikiranku karena aku dituntut harus mandiri, memiliki mental yang kuat bahkan harus berpikir kritis. Aku dapat banyak teman dari berbagai latar belakang, sekarang aku memiliki 2 teman yang selalu sama. Nama mereka adalah Isti dan Nia."
            ],
            [
                "judul" => "Suka Duka Menjadi Mahasiswa",
                "tanggal" => "2023-09-05",
                "cerita" => "Banyak suka dan duka sebagai seorang mahasiswa. Sukanya aku bahagia jauh dari rumah, karena bisa bebas mau ngapain aja di kost. Memiliki banyak teman yang beda daerah yang menjadi sebuah kesenangan sendiri bagiku. Belajar budaya baru dan mendengarkan cerita baru. Bebas mau kemana aja, karena ketika di rumah aku sering tidak dibolehi keluar rumah. Duka sebagai mahasiswa adalah saat menemui dosen yang killer. Menghadapi tugas-tugas yang menumpuk bahkan sampai mengejar deadline yang membuatku tidak dapat tidur."
            ],
            [
                "judul" => "Tantangan yang Dihadapi",
                "tanggal" => "2024-01-15",
                "cerita" => "Tantangan yang aku hadapi selama kuliah adalah beradaptasi dengan metode pembelajaran yang jauh berbeda dengan SMA. Asistensi dengan asprak yang membuatku pusing karena harus menjelaskan codingan dengan baik. Kewalahan dengan jumlah tugas, presentasi, dan proyek akhir. Kebingungan mau memperdalam di bagian apa. Bahkan bingung ketika lulus kuliah mau jadi apa. Merasa homesick, aku juga terkadang merasa homesick karena yang biasanya hanya menyapu rumah di kost menjadi mencuci piring, mencuci baju, dan memasak."
            ]
        ];

        foreach ($pengalaman as $event) {
            echo "<div class='event'>";
            echo "<h3>{$event['judul']}</h3>";
            echo "<small>{$event['tanggal']}</small>";
            echo "<p>{$event['cerita']}</p>";
            echo "</div>";
        }
        ?>
    </div>

    <div class="nav-buttons">
        <a href="halaman1.php">Kembali ke Profil</a>
        <a href="halaman3.php">Menuju Blog</a>
    </div>
</div>
</body>
</html>
