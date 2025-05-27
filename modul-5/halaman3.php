<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog Reflektif</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 800px;
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
            color: #000;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: none;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .artikel-list {
            margin-bottom: 30px;
        }
        .artikel-list li {
            margin-bottom: 10px;
        }
        img {
            max-width: 100%;
            border-radius: 6px;
            margin-top: 10px;
        }
        blockquote {
            font-style: italic;
            color: #555;
            border-left: 4px solid #007bff;
            padding-left: 10px;
            margin: 20px 0;
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

        
    <h1>Blog Reflektif</h1>

    <?php
    // DATA ARTIKEL
    $artikel = [
    1 => [
        'judul' => 'Mengenal Diri Sendiri di Tengah Kesibukan',
        'tanggal' => '2024-09-12',
        'refleksi' => 'Di tengah jadwal yang padat dan tuntutan tugas kuliah, aku belajar pentingnya meluangkan waktu untuk merenung. Mengenal diri sendiri membantuku memahami apa yang benar-benar aku butuhkan.',
        'gambar' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=80',
        'kutipan' => [
            'Kenali dirimu, maka kau akan tahu arah hidupmu.',
            'Waktu untuk diri sendiri bukan kemewahan, tapi kebutuhan.',
            'Kadang kita perlu berhenti sejenak untuk melihat seberapa jauh kita sudah berjalan.'
        ],
        'referensi' => 'https://kumparan.com/pengertian-dan-istilah/arti-refleksi-diri-manfaat-cara-menerapkan-dan-contohnya-24EPZJgUrpA/full'
    ],
    2 => [
        'judul' => 'Belajar Mengatur Waktu',
        'tanggal' => '2024-10-05',
        'refleksi' => 'Beberapa kali aku merasa kewalahan karena tugas menumpuk. Dari situ aku sadar pentingnya mengatur waktu dan membuat jadwal. Hal kecil seperti mencatat to-do list ternyata sangat membantu.',
        'gambar' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80',
        'kutipan' => [
            'Waktu yang dikelola dengan baik membawa ketenangan.',
            'Sedikit perencanaan bisa mencegah banyak kekacauan.',
            'Menghargai waktu berarti menghargai diri sendiri.'
        ],
        'referensi' => 'https://www.kutipkata.com/waktu'
    ],
];


    function tampilkan_kutipan($kutipan_array) {
        $index = rand(0, count($kutipan_array) - 1);
        return $kutipan_array[$index];
    }


    if (isset($_GET['id']) && isset($artikel[$_GET['id']])) {
        $id = $_GET['id'];
        $data = $artikel[$id];
        echo "<h2>{$data['judul']}</h2>";
        echo "<small><em>{$data['tanggal']}</em></small>";
        echo "<p style='text-align:justify;'>{$data['refleksi']}</p>";
        echo "<img src='{$data['gambar']}' alt='Gambar Artikel'>";
        echo "<blockquote>" . tampilkan_kutipan($data['kutipan']) . "</blockquote>";
        if (!empty($data['referensi'])) {
            echo "<p>Referensi: <a href='{$data['referensi']}' target='_blank'>{$data['referensi']}</a></p>";
        }
        echo "<p><a href='halaman3.php' style='color:#007bff;'>&larr; Kembali ke daftar artikel</a></p>";
    } else {
        echo "<ul class='artikel-list'>";
        foreach ($artikel as $id => $data) {
            echo "<li><a href='halaman3.php?id=$id'>{$data['judul']} ({$data['tanggal']})</a></li>";
        }
        echo "</ul>";
    }
    ?>
</div>
</body>
</html>
