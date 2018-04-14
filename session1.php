<?php
// Start the session
session_start();

if (isset($_POST['submitName']) && !empty($_POST['name'])) {
	$_SESSION['name'] = $_POST['name'];
}
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Read the sessions
if ($_SESSION["username"] != "") {
	echo "<br>Hello ";
    echo $_SESSION["username"];
?>

<h1>Valid User</h1>
You are a valid user. Here is your reward!!!<br />

<form class = "form-name" role = "form"
	 action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
	 ?>" method = "post">
	 <h2>Please submit a name</h2>
	 <input type = "text" name = "name" required autofocus></br>
	 <button class = "btn btn-lg btn-primary btn-block" type = "submit"
			name = "submitName">
			Submit
		</button>
</form>

<img src="https://az616578.vo.msecnd.net/files/2015/09/27/635789781274697208191557841_tumblr_lxcavjCQC81qcj7k0o5_r1_250-1.gif">


<br /><br />
<a href="clearsessions.php">Clear Sessions</a>


<br />
<a href="session2.php">Another page</a>



<?php
}else{
?>

<h1>You are not a valid user</h1>
Police are coming
<img src="http://66.media.tumblr.com/tumblr_lne9okrwkN1qdvbl3o1_500.jpg"> <br />

<?php
}
?>

</body>
</html>
