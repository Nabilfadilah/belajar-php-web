<html>

<body>
    <!-- $_SERVER = mengambil data dari server web -->

    <h1>$_SERVER</h1>

    <table border="1">
        <!-- ambil variabel server, kemudian extract key dan value -->
        <?php foreach ($_SERVER as $key => $value) { ?>
            <tr>
                <!-- ambil key dan value servernya -->
                <td><?= $key ?></td>
                <td><?= $value ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>