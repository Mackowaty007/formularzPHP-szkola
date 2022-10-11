<?php include 'connect.php';?>
<!DOCTYPE HTML>  
<meta charset="utf-8">
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>  

<div class="menuBar">
<h2><a class="startMenu">Start</a></h2>
</div>
<div class="userData">
<h2>Aktualne pozycje z bazy danych</h2>
<?php
echo "<ol>";
  $result = $mysqli->query("SELECT * FROM informacje");

  while ( $wynik = mysqli_fetch_array($result) ) {
  echo "<li>";
    echo $wynik['email'];
    echo "<br>";
    echo $wynik['password'];
    echo "<br>";
    echo $wynik['terms'];
    echo "</li>";
    echo "<br><br>";
}
echo "</ol>";
?>
</div>

<div class="main">
  <h2>Karta ucznia:</h2>
  <form method="post"  action="form.php">
    <div class="dane">
      Email: <br><input type="text" name="email"><br>
      Chaslo: <br><input type="text" name="password"><br>
      Regulamin: <input type="checkbox" name="terms"><br>
      <input type="submit" name="submit" value="Dodaj pozycje">  
    </div>
  </form>
</div>


<footer class="sk-footer">
	<div class="ui container">
		<a href="https://github.com/Mackowaty007" class="item">Kontakt</a>		
	</div>
</footer>
<script>
		$(document).ready(function(){
			$('.checkbox').checkbox();
		});
		$('.sticky').sticky();
</script>
</body>
</html>