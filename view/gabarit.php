<?php 
// <?php session_start();

if (isset($_SESSION['id']) AND isset($_SESSION['username']))
{
    echo 'Bonjour ' . $_SESSION['username'];
} ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Bienvenue sur le blog de Jean Forteroche</title>
</head>

<body>

    <header>
        <h1>Billet simple pour l'Alaska</h1>
        <p>Découvrez l'Alaska sous une autre aurore.</p>
        <nav>
            <ul>
                <li>
                    <a href="index.php">"Accueil"</a>
                    <i class="fas fa-igloo"></i>
                </li>
                <li>
                    <a href="index.php">"Chapitres"</a>
                    <i class="fas fa-book"></i>
                </li>
                <li>
                    <a href="index.php?url=connexion">"Connexion"</a>
                    <i class="fas fa-sign-in-alt"></i>
                </li>

            </ul>
        </nav>

    </header>

    <?= $content; ?>

</body>

<footer>

mon super footer


</footer>


</html>