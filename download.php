<?php

// Mengecek apakah parameter 'key' ada di URL (misalnya download.php?key=rahasia)
// dan apakah nilainya sama dengan 'rahasia'
if (isset($_GET['key']) && $_GET['key'] == 'rahasia') {

    // Memberi tahu browser bahwa respons ini adalah file yang akan di-*download*
    // 'attachment' berarti browser akan menawarkan unduhan (bukan ditampilkan langsung di tab)
    // 'filename="profile.jpg"' menentukan nama file saat diunduh
    header('Content-Disposition: attachment; filename="profile.jpg"');

    // Memberi tahu browser tipe konten dari file ini (dalam kasus ini: gambar JPEG)
    header('Content-Type: image/jpeg');

    // Membaca isi file 'profile.jpg' dari folder "file" dan langsung mengirimkannya ke output (browser)
    readfile(__DIR__ . '/file/profile.jpg');

    // Menghentikan eksekusi script agar tidak ada output tambahan yang ikut terkirim
    exit();
} else {
    // Jika parameter 'key' tidak ada atau salah, tampilkan pesan error
    echo "Invalid Key";
}
