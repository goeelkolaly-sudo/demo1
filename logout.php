<?php
///===step 7

session_start();
session_destroy();
header("location: login.php");
exit;

?>