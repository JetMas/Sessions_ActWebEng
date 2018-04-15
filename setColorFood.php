<?php
session_start();

$_SESSION['color'] = $_POST['color'];
$_SESSION['food'] = $_POST['food'];


echo "success";
?>
