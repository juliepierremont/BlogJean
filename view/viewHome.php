<div>
    <h2>Les derniers chapitres</h2>

    <div>
        <h2><?= htmlspecialchars($articles['title']); ?></h2>
        <p><?= htmlspecialchars($articles['content']); ?></p>
        <p><?= htmlspecialchars($articles['author']); ?></p>
        <p><?= htmlspecialchars($articles['numberChapter']); ?></p>
        <p>Créé le : <?= htmlspecialchars($articles['createdAt']); ?></p>
    </div>
    <br>
    <h2>Tous les chapitres</h2>
    <p>chapitre 1</p>
    <a href= 'index.php?url=chapter&id=1'; > Lire la suite</a>
    <p>chapitre 2</p>
    <a href= 'index.php?url=chapter&id=2'; > Lire la suite</a>
    <p>chapitre 3</p>
    <a href= 'index.php?url=chapter&id=3'; > Lire la suite</a>
</div>