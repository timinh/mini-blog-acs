<form method="POST" action="<?php echo $action; ?>">
    <div class="form-group">
        <label for="title">Titre du post : </label>
        <input class="form-control" type="text" name="title">
    </div>
    <div class="form-group">
        <label for="author">Auteur : </label>
        <select class="form-control" name="author">
            <option value="1">Gillesr</option>
            <option value="2">Autre</option>
        </select>
    </div>
    <div class="form-group">
        <label for="category">Categorie : </label>
        <select class="form-control" name="category">
            <option value="1">PHP</option>
            <option value="2">JavaScript</option>
        </select>
    </div>
    <div class="form-group">
        <label for="content">contenu : </label>
        <input class="form-control" type="textarea" name="content">
    </div>
    <button type="submit" class="btn btn-info">Valider</button>
    <a href="index.php" class="btn btn-info">Annuler</a>
    <br/><br/>
</form>