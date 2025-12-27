<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php
// Memeriksa apakah data dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form dan melakukan sanitasi
    $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $pesan = htmlspecialchars($_POST['pesan'], ENT_QUOTES, 'UTF-8');
    
    // Validasi tambahan - memastikan data tidak kosong
    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        // Menampilkan data yang telah dikirim
        echo "<h1>Terima Kasih!</h1>";
        echo "<p>Data Anda telah berhasil dikirim.</p>";
        echo "<hr>";
        echo "<h2>Data yang Anda Kirimkan:</h2>";
        echo "<p><strong>Nama:</strong> " . $nama . "</p>";
        echo "<p><strong>Email:</strong> " . $email . "</p>";
        echo "<p><strong>Pesan:</strong><br>" . nl2br($pesan) . "</p>";
        echo "<hr>";
        echo "<p><a href='index.php'>Kembali ke Form</a></p>";
    } else {
        // Jika ada field yang kosong
        echo "<h1>Error!</h1>";
        echo "<p>Semua field harus diisi.</p>";
        echo "<p><a href='index.php'>Kembali ke Form</a></p>";
    }
} 
?>
</div>
</body>
</html>



