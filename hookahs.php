<?php
    require_once("database.php");
    require_once("models/hookahs.php");
    
    $link = db_connect();
    $hookahs = hookahs_all_by_category($link, $_GET['category']);
    
    include("views/hookahs.php");
?>