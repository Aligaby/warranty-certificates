<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

$conn = mysqli_connect($servername, $username, $password, $dbname);
/*
if (mysqli_ping($conn)) {
	printf ("Our connection is ok!\n");
} else {
	printf ("Error: %s\n", mysqli_error($conn));
}
*/
// Check connection
if (!$conn) {
    die("Eroare conexiune: " . mysqli_connect_error());
}
/* echo "Conectat cu succes"; */ /* arata ca scriptul s-a conectat cu succes la baza de date */

?>