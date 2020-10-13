
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
