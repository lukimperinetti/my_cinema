<!DOCTYPE html>
<html lang="fr">
<?php require "pdo.php" ?>

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
        <p>La solution pour votre cinéma</p>
    </header>

    <!-- barre de navigation -->

    <nav class="topnav">
        <a href="index.php">Films</a>
        <a href="membre.php">Membres</a>
        <form class="example" method="post" action="index.php">
            <button type="submit"><i class="fa fa-search"></i></button>
            <input type="text" placeholder="Rechercher un film" name="search">
            <input type="hidden" name="form" value="1" />
            <select name="genre">
                <?php search_gender($pdo) ?>
            </select>
            <select name="distribution">
                <?php search_distrib($pdo) ?>
            </select>
        </form>
    </nav>

    <!-- corps -->

    <section id="films">
        <?php affiche_genre($pdo) ?>
        <?php affiche_name($pdo) ?>
    </section>
    <!-- <section id="membres">

    </section> -->

    <!-- footer -->

    <!-- <footer>
        <div id="mon_footer">
            <p>créer par Draanh</p>
        </div>
    </footer> -->
</body>

</html>