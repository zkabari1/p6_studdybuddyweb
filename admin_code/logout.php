<?php
session_start();
unset($_SESSION['sessionmail']);
session_destroy();

header("Location: ../index.php");
exit;
?>