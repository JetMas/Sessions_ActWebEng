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
	echo "<h1>Hello ";
	echo "{$_SESSION['name']} ({$_SESSION['username']})";
  echo "<h2> ";
?>

<a href='session3.php'>Another page</a>


<?php
}
else{
?>

	You are not a valid user
	<?php
}


?>

</body>
</html>
