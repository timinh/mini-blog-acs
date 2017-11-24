<?php
// on inclue les classes
require_once('../models/Post.class.php');
require_once('../models/PostManager.class.php');

//on récupère les posts
$pm = new PostManager($bdd);
$posts = $pm->liste();

// on affiche la vue
require_once('../views/liste.php');
?>