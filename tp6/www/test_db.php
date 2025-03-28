<?php
$host = "db";
$user = "root";
$pass = "mypass";
$dbname = "woodytoys";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Échec de connexion : " . $conn->connect_error);
} else {
    echo "Connexion réussie à la base de données !";
}

$conn->close();
?>
