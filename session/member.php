<?php
session_start(); // mulai session

// Cek apakah user sudah login sebelumnya
if ($_SESSION['login'] != true) {
    // Jika sudah login, langsung redirect ke halaman member
    header('Location: /session/login.php');
    exit();
}

// variabel say valu nya hello, global variabel 
$say = "Hello " . $_SESSION['username'];
?>

<html>

<body>
    <h1><?= $say ?></h1>

    <!-- hapus data session -->
    <a href="/session/logout.php">Logout</a>
</body>

</html>