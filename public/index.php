<?php
require_once('../config/config.inc.php');

session_start();
try{
    //$bdd = new PDO($config['bdd_type'].':host='.$config['bdd_name'].'dbname='.$config['bdd_name'], $config['bdd_user'], $config['bdd_password']);
    $bdd = new PDO($config['db_type'].':host='.$config['db_host'].';dbname='.$config['db_name'], $config['db_user'], $config['db_password']);

    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

require_once('../views/header.php');

// page par défaut (liste)
require_once('../controllers/liste.php');


require_once('../views/aside.php');
require_once('../views/footer.php');
?>