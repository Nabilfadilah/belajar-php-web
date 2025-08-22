<?php

// header response
// Application = key, Belajar PHP Web = value
header('Application: Belajar PHP Web');
header('Author: Eko Kurniawan');

// tangkap sebuah HEADER namanya HTTP_CLIENT_NAME
$client = $_SERVER['HTTP_CLIENT_NAME'];
// jadi kita perlu mengirim sebuah HEADER dengan nama 'CLIENT_NAME/CLIENT-NAME/client-name'

echo "Hello $client"; // tampilkan
