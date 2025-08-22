<?php
session_start(); // mulai session
session_destroy(); // hapus session

header('Location: /session/login.php');
exit();
