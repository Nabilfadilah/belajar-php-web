<html>

<!-- aksinya disini, tempat tampilkan input form -->

<body>
    <table>
        <tr>
            <td>First Name</td>
            <!-- $_POST global post variable berisi data array -->
            <td><?= $_POST['first_name'] ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <!-- $_POST global post variable berisi data array -->
            <td><?= $_POST['last_name'] ?></td>
        </tr>
    </table>
</body>

</html>