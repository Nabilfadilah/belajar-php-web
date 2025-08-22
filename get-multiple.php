<?php
// variabel say
// $_GET, tambah parameter 
$say = "Hello " . $_GET['first_name'] . " " . $_GET['last_name'];

?>
<html>

<body>
    <h1><?= $say ?></h1>

    <!-- path -->
    <!-- ?first_name=abil&last_name=eldo -->
</body>

</html>