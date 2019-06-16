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
$id_members = $_GET["profile"];
$nom_membre = $pdo->query("SELECT * FROM fiche_personne WHERE id_perso = '$id_members'");

while ($donnees = $nom_membre->fetch()) {
    ?>
    <p><strong>Nom</strong> : <?php echo $donnees['nom']; ?><br></p>
    <p><strong>Prenom</strong> : <?php echo $donnees['prenom']; ?><br></p>
    <?php
    $nom_membre->closeCursor();
    ?>

    <p>
        <strong>Abonnement</strong> :
        <?php
        $abonnement = $pdo->query("SELECT abonnement.nom FROM abonnement INNER JOIN membre ON abonnement.id_abo = membre.id_abo INNER JOIN fiche_personne ON fiche_personne.id_perso = membre.id_fiche_perso WHERE membre.id_abo = $id_members"); //ICI JE FAIS MAIS QUERY POUR RECCUPERER L'ABONNEMNT
        while ($donnees_1 = $abonnement->fetch()) {
            echo $donnees_1['id_abo'];
            var_dump($donnees_1);
        }
        $abonnement->closeCursor();
        ?><br>
    </p>


<?php
}

while ($donnees = $reponse_nom_membre->fetch()) {
    ?>
    <p>
        <strong>Monsieur ou madame</strong> : <?php echo $donnees['nom']; ?><br />
    </p>
    <li> <a href="index_manag_membre.php?profile=<?= $donnees['id_perso'] ?>"><?= $donnees['nom'] . " " . $donnees['prenom']; ?></a><br><br></li>
<?php
}

?>