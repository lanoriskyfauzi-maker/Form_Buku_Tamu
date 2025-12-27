<?php 
include 'proses.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu - Form Kontak</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1>📝 Buku Tamu</h1>
    <p class="subtitle">Silakan isi form di bawah ini untuk meninggalkan pesan</p>
    
    <form action="proses.php" method="post">
        <div class="form-group">
            <label for="nama">Nama Lengkap <span class="required">*</span></label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap Anda">
        </div>

        <div class="form-group">
            <label for="email">Email <span class="required">*</span></label>
            <input type="email" id="email" name="email" placeholder="contoh@email.com">
        </div>

        <div class="form-group">
            <label for="pesan">Pesan <span class="required">*</span></label>
            <textarea id="pesan" name="pesan" placeholder="Tulis pesan Anda di sini..."></textarea>
        </div>

        <button type="submit" class="btn-submit">Kirim Pesan</button>
    </form>
    </div>
</body>
</html>