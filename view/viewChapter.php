<h2><?= htmlspecialchars($chapter['title']); ?></h2>

<?php foreach ($comments as $comment) { ?>
    <h2><?= htmlspecialchars($comment['author']); ?></h2>
    <p><?= htmlspecialchars($comment['content']); ?></p>
<?php } ?>

<form action="http://localhost/BlogJean/index.php?url=addComment&id=1" method="post"> 

<input type="text" name="author" id="author">
<input type="text" name="content" id="content">
<input type="submit" value="envoyer">

</form>