creation d'un chapitre
<div>
    <form method="post" action="index.php?url=chapter&id=<?= $postTitle ['title'] ?>">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="numberChapter">Numéro du chapitre</label><br>
        <input type="text" id="numberChapter" name="numberChapter"><br>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"></textarea><br>

        <input type="submit" value="Envoyer" id="submit" name="submit">
    </form>
    <a href="index.php">Retour à l'accueil</a>
</div>