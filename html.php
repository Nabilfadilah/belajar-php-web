<?php
// buat variabel
$title = "Hello PHP dan HTML";
$body = "Ini Adalah Body";
?>

<html>

<head>
    <title><?= $title ?></title>
</head>

<body>
    <!-- bisa di sortcut -->
    <h1><?= $body ?></h1>
    <h3><?= $title ?></h3>
</body>

</html>