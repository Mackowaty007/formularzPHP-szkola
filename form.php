<?php
$email = '';
$password = '';
$terms = '';

$email = $_POST['email'];
$password = $_POST['password'];
$terms = $_POST['terms'];
if ($terms == "on"){
  $terms = 1;
}
else {
  $terms = 0;
}

if ( ! $email ) {
	echo 'Uzupełnij pole email';
} elseif ( $email && ! filter_var($email, FILTER_VALIDATE_EMAIL) ) {
	echo 'Upewnij się, że adres email ma prawidłowy format';
  $errorEmail = "error email!!";
}
if ( ! $password ) {
	echo 'Uzupełnij pole hasło';
} elseif ( $password && strlen($password) < 6 ) {
	echo 'Hasło musi zawierać minimum 6 znaków';
  $errorPassword = "error password!!";
}
if ( $terms  != 'on' ) {
	echo 'Musisz zaakceptować regulamin';
  $errorTerms = "error terms!!";
}
/* wysylamy informacje do bazy danych */
if ( ! $errorEmail && ! $errorPassword && ! $errorTerms ) {
  echo $email;
  echo "<br>";
  echo $password;
  echo "<br>";
  echo $terms;
  echo "<br>";
  $query = $mysqli->query("INSERT INTO `informacje` (`ID`, `email`, `password`, `terms`) VALUES (NULL, '$email', '$password', '$terms');");
  /*
  $query = bind_param("ss",$email, $password);
  echo "works so far????";
  $query->execute();
  $query->close();*/
}

header('Location:index.php');

?>
