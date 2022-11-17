<?php 
// mengaktifkan session
session_start();
unset($_SESSION['username']);
unset($_SESSION['pesan']);
unset($_SESSION['logged']);
// menghapus semua session
session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
header("location: login.php?pesan=logout");
?>