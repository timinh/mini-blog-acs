<form method="POST" action="<?php echo $action; ?>">
    <div class="form-group">
        <label for="title">Titre du post : </label>
        <input class="form-control" type="text" name="title" <?php if ($_GET['action'] == 'edit') { ?> value="<?php echo $post->getTitle(); ?>" <?php } ?>>
    </div>
    <div class="form-group">
        <label for="author">Auteur : </label>
        <select class="form-control" name="author">
            <option value="1" <?php if ($_GET['action'] == 'edit') { if($post->getAuthor() == 1){ echo 'selected';} } ?> >Gillesr</option>
            <option value="2" <?php if ($_GET['action'] == 'edit') { if($post->getAuthor() == 2){ echo 'selected';} } ?> >Bob</option>
        </select>
    </div>
    <div class="form-group">
        <label for="category">Categorie : </label>
        <select class="form-control" name="category">
            <option value="1" <?php if ($_GET['action'] == 'edit') { if($post->getCategory() == 1){ echo 'selected';} } ?> >PHP</option>
            <option value="2" <?php if ($_GET['action'] == 'edit') { if($post->getCategory() == 2){ echo 'selected';} } ?> >JavaScript</option>
        </select>
    </div>
    <div class="form-group">
        <label for="content">contenu : </label>
        <input class="form-control" type="textarea" name="content" <?php if ($_GET['action'] == 'edit') { if($post->getContent() != ''){ ?> value="<?php echo $post->getContent(); ?>" <?php } } ?> >
    </div>
    <button type="submit" class="btn btn-info">Valider</button>
    <?php if(isset($_GET['id'])) { ?>
        <a href="index.php?action=detail&id=<?php echo $_GET['id']; ?>" class="btn btn-info">Annuler</a>
    <?php } else { ?>
        <a href="index.php" class="btn btn-info">Annuler</a>
    <?php } ?>
    <br/><br/>
</form>