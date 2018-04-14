<?php
session_start();

var color = $_POST['color'];
var food = $_POST['food'];

$_SESSION['color'] = color;
$_SESSION['food'] = food;

?>
