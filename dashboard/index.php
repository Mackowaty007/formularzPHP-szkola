<!DOCTYPE HTML>  
<meta charset="utf-8">
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>  
<header>
	<h2>header</h2>
</header>

<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost","root", "","abc123");


$result = $mysqli->query("SELECT * FROM user");

echo "<table>";
echo "
<tr>
	<th>imie</th>
	<th>nazwisko</th>
	<th>wiek</th>
	<th>miasto zamieszkania</th>
	<th>praca</th>
</tr>";
while ( $wynik = mysqli_fetch_array($result) ) {
	echo "<tr>";
	echo "<td>";
	echo $wynik['FirstName'];
	echo "</td>";
	echo "<td>";
	echo $wynik['LastName'];
	echo "</td>";
	echo "<td>";
	echo $wynik['Age'];
	echo "</td>";
	echo "<td>";
	echo $wynik['Hometown'];
	echo "</td>";
	echo "<td>";
	echo $wynik['Job'];
	echo "</td>";
	echo "</tr>";
}
echo "</table>"
?>
<footer>
	stopka
</footer>
</body>
</html>