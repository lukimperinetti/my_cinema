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

$nom_membre = $_POST['search_member'];
if ($nom_membre == "") {
    echo "";
} elseif ($_POST['type'] == "nom") {
    $reponse_nom_membre = $pdo->query("SELECT * FROM fiche_personne WHERE nom like '%$nom_membre%'");
    while ($donnees = $reponse_nom_membre->fetch()) {
        ?>
            <li> <a href="index_manag_membre.php?profile=<?= $donnees['id_perso'] ?>"><?= $donnees['nom']." ".$donnees['prenom'];?></a><br><br></li>
    <?php 
}
$reponse_nom_membre->closeCursor();
}


$prenom_membre = $_POST['search_member'];
if ($prenom_membre == "") {
    echo "";
} elseif ($_POST['type'] == "prenom") {
    $reponse_prenom_membre = $pdo->query("SELECT * FROM fiche_personne WHERE prenom like '%$prenom_membre%'");
    while ($donnees = $reponse_prenom_membre->fetch()) {
        ?>
            <li> <a href="index_manag_membre.php?profile=<?= $donnees['id_perso'] ?>"><?= $donnees['nom']." ".$donnees['prenom'];?></a><br><br></li>
    <?php
}
$reponse_prenom_membre->closeCursor();
}
?>