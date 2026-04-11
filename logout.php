<?php
session_start();
session_destroy();
header('location:index.php');
?>

<?php
error_reporting(E_ERROR | E_PARSE);
?>