
<?php

session_start();
session_destroy();

//  header("Location: index.php");
echo "<script>confirm('Yakin ingin logout?.');window.location='index.php';</script>";

?>