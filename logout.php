<?php
session_start();
session_unset();  // Menghapus semua data session
session_destroy(); // Menghancurkan session

// Redirect ke halaman login
header("Location: login.php");
exit();
