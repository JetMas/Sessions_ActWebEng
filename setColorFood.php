<?php
session_start();

if (isset($_POST['action']) && $_POST['action'] == 'submitColorFood')) {
  var color = $_POST['color'];
  var food = $_POST['food'];

  $_SESSION['color'] = color;
  $_SESSION['food'] = food;
  }
  else {
  }
}

?>
