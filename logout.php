<?php 
session_start();
session_destroy();
header("Location:partage.php");
?>