<?php
// Start the session
session_start();

if(!empty($_POST['color']) && !empty($_POST['food'])){
  var color = $_POST['color'];
  var food = $_POST['food'];

  $_SESSION['color'] = color;
  $_SESSION['food'] = food;
}
?>
<!DOCTYPE html>
<html>
<head>
  <script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous">
  </script>
  <script>
  $(document).ready(function(){
    $('#submit').click(function() {
      var c = $('#color').val();
      var f = $('#food').val();
      if(c != '' && f != ''){
        var info = 'action=submitColorFood&color='+c+'&food='+f;
        $.ajax({
          type:'POST',
          data: info,
          url: 'session3.php',
          success: function(){
          }
        });
      }
    });
  });
  </script>
</head>
<body>

<?php
// Read the sessions
if ($_SESSION["username"] != "") {
	echo "<h1>Hello ";
  echo "{$_SESSION['name']} ({$_SESSION['username']})";
  echo "<h2> ";
?>
<h1>You're a valid user!</h1>
<img src='https://i.imgur.com/9umnm.gif'>

<br>
<label>
  Color:
  <input type="text" name="color" id="color" required/>
</label>
<br>
<label>
  Food:
  <input type="text" name="food" id="food" required/>
</label>
<button id="submit">Submit</button>

<?php
  if ($_SESSION["color"] != "" && $_SESSION['food']){
    echo "{$_SESSION['color']} {$_SESSION['food']}";
  }
}
else{
?>
	You are not a valid user
  <a href="index.html">Please login here</a>
<?php
}
?>

</body>
</html>
