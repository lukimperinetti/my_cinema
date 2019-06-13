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
    $affich_genre = $_POST['genre'];
    $reponse_affich_genre = $pdo->query("SELECT titre FROM film INNER JOIN genre ON film.id_genre = genre.id_genre WHERE nom = '$affich_genre'");

    while ($donnees = $reponse_affich_genre->fetch()) {
        ?>
        <p>
            <strong>Film</strong> : <?php echo $donnees['titre']; ?><br />
        </p>
    <?php
}
$reponse_affich_genre->closeCursor();
?>