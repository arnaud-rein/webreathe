<?php
$dsn = 'mysql:dbname=webreathe;host=127.0.0.1:3306';
$dbUser = 'root';
$dbPwd = '';

try{
$bdd = new PDO($dsn, $dbUser, $dbPwd);

} catch (PDOException $e) {
    
   
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}