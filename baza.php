
<?php

$host = 'localhost';
$user = 'root';
$password = '';

$polaczenie = mysqli_connect($host, $user, $password);

if (!$polaczenie) {
    die('Nie można połączyć się z MySQL: ' . mysqli_connect_error());
}

echo "Połączono z serwerem MySQL!<br>";

$sql = "CREATE DATABASE IF NOT EXISTS test3";

if (mysqli_query($polaczenie, $sql)) {
    echo "Baza danych test3 została utworzona lub już istnieje.";
} else {
    echo "Błąd: " . mysqli_error($polaczenie);
}

mysqli_close($polaczenie);

?>
