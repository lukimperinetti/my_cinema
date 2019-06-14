<?php

require "affiche_membre_name.php";

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
$id_members = $_POST["mes_membres"];
$nom_membre = $pdo->query("SELECT nom FROM fiche_personne WHERE nom = '$donnees'");

while ($donnees = $nom_membre->fetch()) {
        ?>
        <p>
            <strong>Film</strong> : <?php echo $donnees['titre']; ?><br />
        </p>
    <?php
}
$nom_membre->closeCursor();

while ($donnees = $nom_membre->fetch()) {
    ?>
    <p>
        <strong>Monsieur ou madame</strong> : <?php echo $donnees['nom'];?><br />
    </p>
    <li value="<?= $donnees['nom'] ?>"> <a href="index_manag_membre.php"><?= $donnees['nom'] . " " . $donnees['prenom']; ?></a><br><br></li>
<?php
}

?>