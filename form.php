<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "Why tf is this running??!?!?!?";
  $email = '';
  $password = '';
  $terms = '';
  $errorEmail = '';
  $errorPassword = '';
  $errorTerms = '';

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
  if ( $terms  != 1 ) {
    echo 'Musisz zaakceptować regulamin';
    $errorTerms = "error terms!!";
  }

  /* wysylamy informacje do bazy danych */
  if ( ! $errorEmail && ! $errorPassword && ! $errorTerms) {
    $query = $mysqli->query("INSERT INTO `informacje` (`ID`, `email`, `password`, `terms`) VALUES (NULL, '$email', '$password', '$terms');");
    echo "just sent data to the server";
    /*
    $query = bind_param("ss",$email, $password);
    echo "works so far????";
    $query->execute();
    $query->close();*/
  }
}
?>
