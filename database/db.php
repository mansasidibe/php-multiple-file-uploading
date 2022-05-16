<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$hostname;dbname=php_arouna_db", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        echo "Erreur de connexion de la base donnée: " . $e->getMessage();
    }
?>