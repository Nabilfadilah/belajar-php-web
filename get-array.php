<?php

// variabel number dengan parameter
$numbers = $_GET['numbers'];

// variable total, dengan nilai 0
$total = 0;

// ambil variabel number, kemudian extract number -->
foreach ($numbers as $number) {
    $total += $number; // jumlahkan value total += number
}
?>
<html>

<body>
    <h1>Total = <?= $total ?></h1>

    <!-- path -->
    <!-- http://localhost:8080/get-array.php?numbers[]=8&numbers[]2 -->
</body>

</html>