<div>
    <h2>Les derniers chapitres</h2>

    <?php foreach ($chapters as $chapter) { ?>

        <h2><a href="index.php?url=chapter&id=<?= $chapter->getId() ?>">
                <?= htmlspecialchars($chapter->getTitle()); ?> </a></h2>
        <p><?= htmlspecialchars($chapter->getContent()); ?></p>
        <p><?= htmlspecialchars($chapter->getAuthor()); ?></p>
        <p><?= htmlspecialchars($chapter->getNumberChapter()); ?></p>
        <p>Créé le : <?= htmlspecialchars($chapter->getCreatedAt()); ?></p>
    <?php } ?>


</div>