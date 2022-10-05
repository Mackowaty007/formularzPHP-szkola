<!DOCTYPE HTML>  
<meta charset="utf-8">
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>  
	<!-- Top -->
	<div class="sk-top" id="top-header">
		<div class="ui blue inverted segment sticky">
			<div class="ui blue inverted menu">
				<div class="ui container">
					<a class="item">Start</a>
				</div>
			</div>
		</div>		
	</div>

	<!--- form --->
	<div class="main">
	<h2>Karta ucznia:</h2>
	<form method="post"  action="form.php">
		<div class="dane">
		email: <input type="text" name="email">
		chaslo: <input type="text" name="password">
		terms: <input type="checkbox" name="terms">
		<input type="submit" name="submit" value="Submit">  
		</div>
	</form>
	</div>


	<!-- Stopka -->
	<footer class="red sk-footer">
		<div class="ui container">
			<a href="" class="item">Kontakt</a>		
		</div>
	</footer>

</body>
</html>