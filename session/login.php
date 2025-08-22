<?php
session_start();
// Memulai session, ini wajib ditaruh di awal sebelum ada output HTML.
// Session digunakan untuk menyimpan data login agar bisa diakses di halaman lain.

// -----------------------------------------------------------
// Cek apakah user sudah login sebelumnya
// -----------------------------------------------------------
if ($_SESSION['login'] == true) {
    // Jika sudah login, langsung redirect ke halaman member
    header('Location: /session/member.php');
    exit(); // Hentikan eksekusi agar kode di bawah tidak jalan
}

// Variabel untuk menampung pesan error login
$error = "";

// -----------------------------------------------------------
// Cek apakah form sudah dikirim dengan metode POST
// -----------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Validasi username dan password (hardcoded: eko/eko)
    if ($_POST['username'] == "eko" && $_POST['password'] == 'eko') {
        // Jika benar, set session login dan username
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'eko';

        // Redirect ke halaman member setelah login sukses
        header('Location: /session/member.php');
        exit();
    } else {
        // Jika salah, simpan pesan error
        $error = "Login Gagal";
    }
}

?>

<html>

<body>
    <?php if ($error != "") { ?>
        <!-- Jika ada error, tampilkan pesan error di halaman -->
        <h2><?= $error ?></h2>
    <?php } ?>

    <h1>Login</h1>

    <!-- Form login -->
    <form action="/session/login.php" method="post">
        <!-- Input username -->
        <label>Username :
            <input type="text" name="username">
        </label>
        <br />

        <!-- Input password -->
        <label>Password :
            <input type="password" name="password">
        </label>
        <br />

        <!-- Tombol submit untuk kirim data -->
        <input type="submit" value="Login">
    </form>
</body>

</html>