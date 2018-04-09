<?php
require_once('../config/config.inc.php');

session_start();
try{
    $bdd = new PDO($config['db_type'].':host='.$config['db_host'].';dbname='.$config['db_name'], $config['db_user'], $config['db_password']);

    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

require_once('../views/header.php');

$controller = '../controllers/liste.php';

if(isset($_GET['action'])) {
    if($_GET['action'] == 'detail') {
        $controller = '../controllers/detail.php';
        $fichier_js = '<script src="./js/script.js"></script>';
    }elseif ($_GET['action'] == 'creer') {
        $controller = '../controllers/creer.php';
    }elseif ($_GET['action'] == 'edit') {
        $controller = '../controllers/edit.php';
        $fichier_js = '<script src="./js/script.js"></script>';
    }elseif ($_GET['action'] == 'delete') {
        $controller = '../controllers/delete.php';
    }
}

require_once($controller);

require_once('../views/aside.php');
require_once('../views/footer.php');
?>