<?php

require_once('../models/PostManager.class.php');

if(isset($_GET['id'])){
    $pm = new PostManager($bdd);
    if( $pm->delete($_GET['id']) ) {
      $_SESSION['flash_message'] = 'Le post a bien été supprimé.';
    } else {
      $_SESSION['flash_message'] = 'Un problème est survenu lors de la suppression du post.';
    }
}

header('Location: /');