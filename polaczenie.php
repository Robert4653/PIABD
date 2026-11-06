<?php

$polaczenie = mysqli_connect('localhost', 'root', '', '4bgr1');

if (!$polaczenie) {
    die("Błąd połączenia: " . mysqli_connect_error());
}

echo "Połączono z bazą danych!";

?>