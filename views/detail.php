<h1><?php echo $post->getTitle(); ?></h1>
<em>Publié le : <?php echo $post->getCreatedAt(); ?>, par <?php echo $post->getAuthor(); ?></em>
<p>
<?php echo $post->getContent(); ?>
</p>
<br/>
<a href="index.php" class="btn btn-info">Retour</a>
<br/>
<br/>