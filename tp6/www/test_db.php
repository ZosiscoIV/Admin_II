<?php
$dbname = getenv('MARIADB_DATABASE');
$dbhost = getenv('MARIADB_HOST');
$dbuser = getenv('MARIADB_USER');
$dbpass = getenv('MARIADB_PASSWORD');

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Échec de connexion : " . $conn->connect_error);
} else {
    echo "Connexion réussie à la base de données !";
}

$query = "INSERT INTO products (id, product_name, product_price) VALUES (999, 'Test', 0.99)";
if (mysqli_query($conn, $query)) {
    echo "Erreur : l'insertion est possible, ce qui est un problème !";
} else {
    echo "OK : l'insertion est bien bloquée.";
}

$conn->close();
?>

