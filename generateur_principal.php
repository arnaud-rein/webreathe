<?php
// Connexion à la base de données
$dsn = 'mysql:dbname=webreathe;host=127.0.0.1:3306';
$dbUser = 'root';
$dbPwd = '';


try {
$conn = new PDO($dsn, $dbUser, $dbPwd);
    // Définir le mode d'erreur PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Générer une valeur aléatoire (vous pouvez personnaliser cela selon vos besoins)
    
    
    
    $valeur = array(
        ':valeur1' => rand(1, 100),
        ':valeur2' => rand(100,500),

    );
    
    

    // Insérer la nouvelle donnée dans la table ma_table
    $sql = "INSERT INTO module1 (vitesse, time_use) VALUES (:valeur1, :valeur2)";
    $stmt = $conn->prepare($sql);    
    $stmt->execute($valeur);

    echo "Donnée insérée avec succès";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
