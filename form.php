<html>

<body>
    <h1>Register</h1>
    <!-- method post -->
    <!-- aksinya pindah ke file post.php -->
    <form action="post.php" method="post">
        <label> First Name :
            <!-- name, data yang akan dikirim ke php  -->
            <!-- value name harus sama juga dengan di post.php  -->
            <input type="text" name="first_name">
        </label>
        <br />
        <label> Last Name :
            <input type="text" name="last_name">
        </label>
        <br />
        <input type="submit" value="Register">
    </form>
</body>

</html>