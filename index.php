<?php
    require_once("database.php");
    require_once("models/hookahs.php");
    
    $link = db_connect();
    $hookahs = hookahs_all($link);
    include("views/hookahs.php");
?>