<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Mon blog</title>
</head>

<body>
    <div>
        <h1>Mon blog</h1>
        <p>En construction</p>
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

        <!-- <?php

                $articles->closeCursor()
                ?>  -->
    </div>
</body>

</html>