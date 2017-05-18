<?php
    require_once("database.php");
    require_once("models/hookahs.php");
    
    $link = db_connect();
    $hookah = hookah_get($link, $_GET['id']);
    hookahs_views($link, $_GET['id'],1);
if(isset($_GET['smoked']))
        hookah_like($link,$_GET['smoked']);
    include("views/hookah.php");
?>
