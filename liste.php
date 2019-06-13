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
function search_gender($pdo)
{
    $reponse = $pdo->query("SELECT nom FROM genre");
    ?><option value="default">catégories</option><?php
        while ($donnees = $reponse->fetch()) {
            ?>
        <?php foreach ($donnees as $value) : ?>
            <option value="<?= $value ?>"> <?= $value; ?> </option>
        <?php endforeach; ?>
    <?php }
}
?>

<?php
function search_distrib($pdo)
{
    $reponse = $pdo->query("SELECT nom FROM distrib");
    ?><option value="default">distributeurs</option><?php
        while ($donnees = $reponse->fetch()) {
            ?>
        <?php foreach ($donnees as $value) : ?>
            <option value="<?= $value ?>"> <?= $value; ?> </option>
        <?php endforeach; ?>
    <?php }
}
?>