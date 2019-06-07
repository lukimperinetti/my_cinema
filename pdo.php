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



function bigBoss($pdo)
{
    $name = $_POST['search'];
    $gender = $_POST['genre'];
    $distribution = $_POST['distribution'];

    if (isset($name)) {
        $query = $pdo->query("SELECT titre FROM film WHERE titre like '%$name%' AND genre like '$gender'");
        while ($donnees = $reponse_nom_film->fetch()) {
            ?>
            <p>
                <strong>Film</strong> : <?php echo $donnees['titre']; ?><br />
            </p>
        <?php
    }
    $query->closeCursor();
}
}

?>


<?php

// $name = $_POST['search'];
// $genre =...

// $tab_arg = tout les post
// $query = "SELECT titre FROM film";
// if ($tab_arg != NULL)
//     $query .= " WHERE "
//     foreach


// if (isset($_POST['search']) && $_POST['search'] != "") {
//     echo 'check';
//     function affiche_name($pdo)
//     {
//         var_dump($_POST['search']);
//         $nom_film = $_POST['search'];
//         $reponse_nom_film = $pdo->query("SELECT titre FROM film WHERE titre like '%$nom_film%'");
//     }
// } elseif (isset($_POST['genre'])) {
//     echo 'entered gender';
//     function affiche_genre($pdo)
//     {
//         echo "genre ? \n";
//         var_dump($_POST['genre']);
//         $nom_film = $_POST['search'];
//         $affich_genre = $_POST['genre'];
//         $reponse_affich_genre = $pdo->query("SELECT titre FROM film INNER JOIN genre ON film.id_genre = genre.id_genre WHERE nom = '$affich_genre'");

//         while ($donnees = $reponse_affich_genre->fetch()) {
            /*?>
            <!--p>
                <strong>Film</strong> : <?php echo $donnees['titre']; ?><br />
            </p-->
            <?php*/
            //     }
//     $reponse_affich_genre->closeCursor();
// }
// }
?>

<?php
function search_gender($pdo)
{
    $reponse = $pdo->query("SELECT nom FROM genre");
    ?><option value="default">deflaut</option><?php
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
    ?><option value="default">deflaut</option><?php
                                                    while ($donnees = $reponse->fetch()) {
                                                        ?>
        <?php foreach ($donnees as $value) : ?>
            <option value=""> <?= $value; ?> </option>
        <?php endforeach; ?>
    <?php }
}
?>