<?php
/**
 * ici j'utilise des options pdo
 * ATTR_ERRMODE : c'est une option fondamentale 
 * ERRMODE_EXCEPTION : lance une exception a chaques erreur donc pas besin d'obtenir l'erreur manuellement
 */

$host = 'localhost';
$db   = 'epitech_tp';
$user = 'root';
$pass = 'root';
$charset = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

?>

<?php
    $affich_distrib = $_POST['distribution'];
    $reponse_affich_distrib = $pdo->query("SELECT titre FROM film INNER JOIN distrib ON film.id_distrib = distrib.id_distrib WHERE nom = '$affich_distrib'");

    while ($donnees = $reponse_affich_distrib->fetch()) {
        ?>
        <p>
            <strong>Film</strong> : <?php echo $donnees['titre']; ?><br />
        </p>
    <?php
}
$reponse_affich_distrib->closeCursor();
?>