<!DOCTYPE html>
<html lang="fr">
<?php require "liste.php" ?>

<head>
    <title>CinemAdmin</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- header -->

    <header>
        <h1 id="logo">CinemAdmin <span id="blue"> !</span></h1>
        <p>Recherche global</p>
    </header>

    <!-- barre de navigation -->

    <nav class="topnav">
        <a href="index.php">Films</a>
        <!-- <a href="membre.php">Membres</a> -->
        <form class="example" method="post" action="index.php">
            <button type="submit"><i class="fa fa-search"></i></button>
            <input type="text" placeholder="Rechercher un film" name="search">
            <input type="text" placeholder="Rechercher un membre" name="search_member">
            <select name="genre">
                <?php search_gender($pdo) ?>
            </select>
            <select name="distribution">
                <?php search_distrib($pdo) ?>
            </select>
            <select name="type">
                <option value="nom">Nom</option>
                <option value="prenom">Prenom</option>
            </select>
        </form>
    </nav>

    <!-- corps -->

    <section id="films">
        <?php require "affich_name.php" ?>
        <?php require "affich_genre.php" ?>
        <?php require "affich_distrib.php" ?>
        <form class="test" action="index_manag_membre.php" method="post" >
            <ul name="mes_membres" >
                <?php require "affiche_membre_name.php" ?>
            </ul>
        </form>
    </section>


    <!-- footer -->

    <!-- <footer>
        <div id="mon_footer">
            <p>créer par Draanh</p>
        </div>
    </footer> -->
</body>

</html>