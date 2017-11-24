<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mini-blog ACS</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!--link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.0.0-beta.4/dist/css/bootstrap-material-design.min.css" integrity="sha384-R80DC0KVBO4GSTw+wZ5x2zn2pu4POSErBkf8/fSFhPXHxvHJydT0CSgAP2Yo2r4I" crossorigin="anonymous"-->
    <link href="./css/style.css" rel="stylesheet">
  </head>

  <body class="container-fluid">
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Mini-blog ACS</a>
    </nav>
    <main class="container">
    <div class="row">
      <div class="col-md-9 col-sm-9 col-xs-9">
        <?php 
        if(isset($_SESSION['flash_message'])){
          echo "<span class=\"alert alert-info\">";
          echo $_SESSION['flash_message'];
          $_SESSION['flash_message'] = null;
          echo "</span>";
        }
        ?>