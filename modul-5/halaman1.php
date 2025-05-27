<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        td, th {
            padding: 12px 15px;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:first-child td {
            background-color: #e9e9e9;
            font-weight: bold;
        }
        nav {
            background-color: #fafafa;
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            text-align: center;
        }
        nav a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            margin: 0 15px;
            transition: color 0.3s ease;
        }
        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        h3 {
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="container">
    <nav>
        <a href="halaman1.php">Beranda</a>
        <a href="halaman2.php">Pengalaman</a>
        <a href="halaman3.php">Blog</a>
    </nav>

    <h1>Profil Pribadi</h1>
    <table>
        <tr><td>Nama</td><td>Septiana Naibaho</td></tr>
        <tr><td>Alamat</td><td>Hutanamora</td></tr>
        <tr><td>Tempat, Tanggal Lahir</td><td>Sei putih, 13 September 2006</td></tr>
        <tr><td>Nomor HP</td><td>082167202393</td></tr>
        <tr><td>Email</td><td>septiananaibaho13@gmail.com</td></tr>
    </table>
</div>

<div class="container">
    <form method="POST">
        <div class="form-group">
            <p><strong>Bahasa Pemrograman yang Dikuasai:</strong><br>
                <input type="text" name="bahasa[]">
                <input type="text" name="bahasa[]">
                <input type="text" name="bahasa[]">
            </p>
        </div>

        <div class="form-group">
            <p><strong>Pengalaman Membuat Proyek:</strong><br>
                <textarea name="pengalaman" rows="4" cols="50"></textarea>
            </p>
        </div>

        <div class="form-group">
            <p><strong>Software yang Sering Digunakan:</strong><br>
                <input type="checkbox" name="software[]" value="VS Code"> VS Code
                <input type="checkbox" name="software[]" value="XAMPP"> XAMPP
                <input type="checkbox" name="software[]" value="Git"> Git
            </p>
        </div>

        <div class="form-group">
            <p><strong>Sistem Operasi:</strong><br>
                <input type="radio" name="os" value="Windows"> Windows
                <input type="radio" name="os" value="Linux"> Linux
                <input type="radio" name="os" value="Mac"> Mac
            </p>
        </div>

        <div class="form-group">
            <p><strong>Tingkat Penguasaan PHP:</strong><br>
                <select name="tingkat">
                    <option value="">--Pilih--</option>
                    <option value="Pemula">Pemula</option>
                    <option value="Menengah">Menengah</option>
                    <option value="Mahir">Mahir</option>
                </select>
            </p>
        </div>

        <input type="submit" name="submit" value="Kirim">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $bahasa = array_filter($_POST['bahasa']);
        $pengalaman = $_POST['pengalaman'];
        $software = $_POST['software'] ?? [];
        $os = $_POST['os'] ?? '';
        $tingkat = $_POST['tingkat'];

        if (count($bahasa) < 1 || empty($pengalaman) || empty($software) || empty($os) || empty($tingkat)) {
            echo "<p style='color:red;'>Semua input wajib diisi!</p>";
        } else {
            echo "<h3>Hasil Input:</h3>";
            echo "<table>
                    <tr><th>Bahasa</th><td>" . implode(", ", $bahasa) . "</td></tr>
                    <tr><th>Pengalaman</th><td>$pengalaman</td></tr>
                    <tr><th>Software</th><td>" . implode(", ", $software) . "</td></tr>
                    <tr><th>Sistem Operasi</th><td>$os</td></tr>
                    <tr><th>Tingkat PHP</th><td>$tingkat</td></tr>
                  </table>";

            echo "<p><strong>Ringkasan:</strong> Saya menggunakan $os dan cukup nyaman menggunakan " . implode(", ", $software) . ". ";
            echo "Saya pernah membuat proyek: \"$pengalaman\".</p>";

            if (count($bahasa) > 2) {
                echo "<p><strong>Anda cukup berpengalaman dalam pemrograman!</strong></p>";
            }
        }
    }
    ?>
</div>

</body>
</html>
