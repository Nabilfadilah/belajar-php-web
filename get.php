<?php

// variabel say
// htmlspecialchars, mengubah karakter khusus dalam sebuah string menjadi entitas HTM
$say = "Hello " . htmlspecialchars($_GET['name']); // $_GET = query parameter
?>
<html>

<body>
    <!-- panggil variabel say -->
    <h1><?= $say ?></h1>

    <!-- path -->
    <!-- ?nabil -->
</body>

</html>