<?php
// membuat cookie dengan, nama cookie "X-BELAJAR-COOKIE" dan value "Nabil Fadilah"
setcookie("X-BELAJAR-COOKIE", "Nabil Fadilah");

// headernya dari file show-cookie
header('Location: /show-cookie.php');
