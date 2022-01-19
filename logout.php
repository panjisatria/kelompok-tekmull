<?php
session_start();
unset($_SESSION["user_username"]);
header("Location:index.php");
?>