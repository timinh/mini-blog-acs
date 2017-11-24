<?php
// on inclue les classes
require_once('../models/Post.class.php');
require_once('../models/PostManager.class.php');

if(isset($_POST['title'])){
    $pm = new PostManager($bdd);
    $post_id = $pm->save($_POST);
    if($post_id){
        $_SESSION['flash_message'] = "Le post a bien été créé.";
        header('Location: index.php?action=detail&id='.$post_id);
    }else{
        echo "<div class=\"alert alert-error\">Erreur</div>";
    }
}

// on définie l'action du formulaire
$action = "index.php?action=creer";
$fichier_js = '<script src="./js/script.js"></script>';
// on affiche la vue
require_once('../views/post_form.php');
?>

