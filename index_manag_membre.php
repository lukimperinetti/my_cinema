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
        <p>Management des membres</p>
    </header>

    <!-- barre de navigation -->

    <nav class="topnav">
        <a href="index.php">Back</a>
    </nav>

    <!-- corps -->

    <section id="films">
        <?php require "membre_options.php" ?>
    </section>


    <!-- footer -->

    <!-- <footer>
        <div id="mon_footer">
            <p>créer par Draanh</p>
        </div>
    </footer> -->
</body>

</html>