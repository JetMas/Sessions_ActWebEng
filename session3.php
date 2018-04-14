<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Read the sessions
if ($_SESSION["username"] != "") {
  echo "<h1>You're a valid user!</h1>";
  echo "<img src='i.imgur.com/9umnm.gif'";
	echo "<h1>Hello ";
  echo "{$_SESSION['name']} ({$_SESSION['username']})";
  echo "<h2> ";
}else{
?>
	You are not a valid user
  <a href="index.html">Please login here</a>
<?php
}
?>

</body>
</html>
