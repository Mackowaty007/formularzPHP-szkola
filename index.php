<!DOCTYPE HTML>  
<meta charset="utf-8">
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>  
<!-- Top -->
<div class="sk-top" id="top-header">
  <a class="item">Start</a>	
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
<footer class="sk-footer">
	<div class="ui container">
		<a href="" class="item">Kontakt</a>		
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