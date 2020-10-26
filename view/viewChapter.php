<h2><?= htmlspecialchars($chapter['title']); ?></h2>
<p><?= htmlspecialchars($chapter['content']); ?></p>

<h2>Poster un commentaire</h2>

<form action="index.php?url=addComment&id=<?= $chapter['id'] ?>" method="post">

    <input type="text" name="author" id="author" placeholder="Nom">
    <input type="text" name="comment" id="comment" placeholder="Commentaire">
    <input type="submit" value="envoyer">

</form>

<?php foreach ($comments as $comment) { ?>
    <h2><?= htmlspecialchars($comment['author']); ?></h2>
    <p><?= htmlspecialchars($comment['content']); ?></p>
<?php } ?>