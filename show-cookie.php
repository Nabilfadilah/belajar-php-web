<?php

// $belajarCookie = $_COOKIE['X-BELAJAR-COOKIE'];

// Cek apakah cookie ada dulu
// cek dulu apakah cookie tersedia
if (isset($_COOKIE['X-BELAJAR-COOKIE'])) {
    $belajarCookie = $_COOKIE['X-BELAJAR-COOKIE'];
    echo $belajarCookie;
} else {
    echo "Cookie belum ada, coba refresh halaman ini.";
}

// tampilkan
echo $belajarCookie;
