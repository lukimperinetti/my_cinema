<!DOCTYPE html>
<html lang="fr">

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

    <!-- corps -->

    <nav class="topnav">
        <a href="index.php">Films</a>
        <a href="membre.php">Membres</a>
        <!-- <input type="text" placeholder="Rechercher"> -->

        <form class="example" action="action_page.php">
            <button type="submit"><i class="fa fa-search"></i></button>
            <input type="text" placeholder="Rechercher un membre" name="search">
        </form>
    </nav>

    <section id="films">
        <p>Page Membre</p>
    </section>
    <section id="membres">

    </section>

    <!-- footer -->

    <footer>
        <div id="mon_footer"><p>créer par Draanh</p></div>
    </footer>
</body>

</html>