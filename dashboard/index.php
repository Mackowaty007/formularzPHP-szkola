<!DOCTYPE HTML>  
<meta charset="utf-8">
<html lang=”en” manifest="/cache.appcache">
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost","root", "","abc123");


$result = $mysqli->query("SELECT * FROM user");

echo "<table>";
echo "
<tr>
	<th>ID</th>
	<th>imie</th>
	<th>nazwisko</th>
</tr>";
while ( $wynik = mysqli_fetch_array($result) ) {
	echo "<tr>";
	echo "<td>";
	echo $wynik['id'];
	echo "</td>";
	echo "<td>";
	echo $wynik['FirstName'];
	echo "</td>";
	echo "<td rowspan='2'>";
	echo $wynik['LastName'];
	echo "</td>";
	echo "<td>";
}
echo "</table>"
?>
</body>
</html>