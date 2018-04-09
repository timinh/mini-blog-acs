</div>
<aside class="section-nav col-md-3 col-sm-3 col-xs-3">
    <a href="index.php?action=creer" class="btn btn-success">Créer un post</a>
    <br/>
    <br/>
    <?php if( isset($_GET['id']) ) { ?>
    <a href="index.php?action=edit&id=<?php echo $_GET['id']; ?>" class="btn btn-info">Editer le post</a>
    <br/>
    <br/>
    <a href="index.php?action=delete&id=<?php echo $_GET['id']; ?>" class="btn btn-danger supprimer">Supprimer le post</a>
    <?php } ?>
</aside>