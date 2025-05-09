<?php
// Configuration de la base de données
$host = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "btp";

// Créer une connexion
$conn = new mysqli($host, $username, $password, $dbname,);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
