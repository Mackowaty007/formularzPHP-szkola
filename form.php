<?php
if(isset($_POST["submit"]))
{
    echo "Imie: {$_POST["imie"]}<br>Nazwisko: {$_POST["nazwisko"]}<br> Klasa: {$_POST["klasa"]}";
    echo "<br>";
    echo "Jesteś {$_POST["zawod"]}";
    echo "<br>";
    if($_POST["interest"] == "inne"){
      echo "Interesujesz się {$_POST["inneZainteresowanie"]}";
    }
    else{
      echo "Interesujesz się {$_POST["interest"]}";
    }
    echo "<br>";
    echo "Rok: {$_POST["rok"]}";
}

?>