<?php

session_start();

// unset($_SESSION['Uname']);
session_destroy();
header('location:index.php');

?>