<?php

// Cek apakah parameter 'name' ada di URL dan tidak kosong
if (!isset($_GET['name']) || $_GET['name'] == "") {
    // Jika 'name' tidak ada / kosong, kasih HTTP response code 400 (Bad Request)
    http_response_code(400); // response code

    // Tampilkan pesan error ke user
    echo "Name is Required";

    // Hentikan eksekusi script supaya baris bawah tidak dijalankan
    exit();
}

// Jika 'name' ada, maka ambil nilainya dari URL
// htmlspecialchars digunakan untuk mencegah XSS (Cross Site Scripting)
$say = "Hello " . htmlspecialchars($_GET['name']);
?>

<html>

<body>
    <!-- Tampilkan hasilnya ke browser -->
    <h1><?= $say ?></h1>
</body>

</html>