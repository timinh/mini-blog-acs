<?php
// on inclue les classes
require_once('../models/Post.class.php');
require_once('../models/PostManager.class.php');

// récup des infos sur le Post
if(isset($_GET['id'])){
    $pm = new PostManager($bdd);
    $id_post = $_GET['id'];

    if(isset($_POST['title'])){
      if($pm->update($_POST, $id_post)){
          $_SESSION['flash_message'] = "Le post a bien été mis à jour.";
          header('Location: index.php?action=detail&id='.$id_post);
      }else{
          echo "<div class=\"alert alert-error\">Erreur</div>";
      }
    }
    $post = $pm->getPost($id_post);
}else{
    header('Location: /');
}

// on définie l'action du formulaire
$action = "index.php?action=edit&id=".$_GET['id'];
$fichier_js = '<script src="./js/script.js"></script>';
// on affiche la vue
require_once('../views/post_form.php');
?>

