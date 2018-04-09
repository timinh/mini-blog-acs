<?php
// on inclue les classes
require_once('../models/Post.class.php');
require_once('../models/PostManager.class.php');

if(isset($_GET['id'])){
    $pm = new PostManager($bdd);
    $post = $pm->getPost($_GET['id']);
}else{
    header('Location: ./');
}

// on affiche la vue
require_once('../views/detail.php');
?>