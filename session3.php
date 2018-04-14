<?php
// Start the session
session_start();
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
      console.log("Clicked");
      var c = $('#color').val();
      var f = $('#food').val();
      if(c.val() != '' && f.val() != ''){
        var info = 'action=submitColorFood&color='+c.val()+'&food='+f.val();
        $.ajax({
          type:'POST',
          data: info,
          url: 'setColorFood.php',
          success: function(){
            $('#info').innerhtml = `Color: ${c.val()}, Food: ${f.val()}`;
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

<form>
  <label>
    Color:
    <input type="text" name="color" id="color" required/>
  </label>
  <br>
  <label>
    Food:
    <input type="text" name="food" id="food" required/>
  </label>
  <button type="submit" id="submit">Submit</button>
</form>

<div name="info" id="info"></div>
<?php
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
