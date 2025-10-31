<?php
$host = 'localhost';     
$dbname = 'ma_base';   
$username = 'root';     
$password = '';         

try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "✅ Connexion réussie à la base de données.";
} catch (PDOException $e) {
    echo "❌ Erreur de connexion : " . $e->getMessage();
}
?>
