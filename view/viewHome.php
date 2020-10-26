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

    <button onclick="window.location.href = 'http://localhost/BlogJean/index.php?url=chapter&id=1'; "> Lire la suite</button>


</div>