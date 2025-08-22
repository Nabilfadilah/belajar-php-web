<?php
// Mengecek apakah request method yang digunakan adalah POST (artinya form upload dikirim)
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Mengambil informasi file yang diupload dari superglobal $_FILES
    $file_name = $_FILES['upload_file']['name'];       // Nama asli file
    $file_type = $_FILES['upload_file']['type'];       // Tipe MIME file (misal: image/png, application/pdf)
    $file_size = $_FILES['upload_file']['size'];       // Ukuran file dalam byte
    $file_tmp_name = $_FILES['upload_file']['tmp_name']; // Lokasi sementara file di server
    $file_error = $_FILES['upload_file']['error'];     // Kode error jika ada masalah saat upload

    // Memindahkan file dari folder temporary ke folder tujuan (dalam hal ini: folder "file" di direktori yang sama dengan upload.php)
    move_uploaded_file($file_tmp_name, __DIR__ . '/file/' . $file_name);
}
?>

<html>

<body>

    <!-- Jika halaman dibuka biasa lewat browser (tanpa submit form), maka method-nya GET.
    Jika user mengisi form dan klik tombol Upload, maka form akan mengirim data ke upload.php dengan method POST -->
    <?php if ($_SERVER['REQUEST_METHOD'] == "POST") { ?>
        <!-- Menampilkan detail file yang sudah diupload -->
        <h1>Upload File</h1>
        <table>
            <tr>
                <td>File Name</td>
                <td><?= $file_name ?></td> <!-- Menampilkan nama file -->
            </tr>
            <tr>
                <td>File Type</td>
                <td><?= $file_type ?></td> <!-- Menampilkan tipe file -->
            </tr>
            <tr>
                <td>File Size</td>
                <td><?= $file_size ?></td> <!-- Menampilkan ukuran file -->
            </tr>
            <tr>
                <td>File Tmp Name</td>
                <td><?= $file_tmp_name ?></td> <!-- Lokasi sementara file sebelum dipindah -->
            </tr>
            <tr>
                <td>File Error</td>
                <td><?= $file_error ?></td> <!-- Kode error (0 jika sukses) -->
            </tr>
        </table>
    <?php } ?>

    <!-- Form untuk upload file -->
    <h1>Form Upload</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <!-- input type="file" agar user bisa pilih file dari komputer -->
        <label> File :
            <input type="file" name="upload_file">
        </label>
        <!-- tombol untuk submit form -->
        <input type="submit" value="Upload">
    </form>
</body>

</html>