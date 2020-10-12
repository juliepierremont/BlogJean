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
                    <a href="index.php">"Connexion"</a>
                    <i class="fas fa-sign-in-alt"></i>
                </li>

            </ul>
        </nav>

    </header>

    <div>
        <h2>Les derniers chapitres</h2>

        <!--  <?php

                var_dump($articles);
                ?>  -->
        <!-- $article = new Article();
    $articles = $article->getArticles();
    while($article = $articles->fetch()) -->

        <div>
            <h2><?= htmlspecialchars($articles['title']); ?></h2>
            <p><?= htmlspecialchars($articles['content']); ?></p>
            <p><?= htmlspecialchars($articles['author']); ?></p>
            <p><?= htmlspecialchars($articles['numberChapter']); ?></p>
            <p>Créé le : <?= htmlspecialchars($articles['createdAt']); ?></p>
        </div>
        <br>
        <!-- <form action="index.php?action=allChapters&id=<?= $data['id'] ?>" method="post"> -->
            <button type="submit">Lire la suite</button>

            <!-- <?php

                    $articles->closeCursor()
                    ?>  -->
    </div>
</body>

</html>