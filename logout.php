<?php
session_start();
session_destroy();
unset($_SESSION['is_admin']);
header("Location: index.php");
?>
