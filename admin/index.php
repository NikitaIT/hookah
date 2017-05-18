<?php 
    require_once("../database.php");
    require_once("../models/hookahs.php");
        
    $link = db_connect();
    
    $hookah['title']='';
    $hookah['date']='';
    $hookah['content']='';
    $path = 'i/';

    if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "";
    
    if($action == "add"){
        if(!empty($_POST)){
            hookahs_new($link, $_POST['title'], $_POST['date'], $_POST['content'], $_POST['category'], $_POST['image']);
            
            header("Location: index.php");
        }
        include("../views/hookah_admin.php");
    }else if($action == 'edit'){
        if(!isset($_GET['id']))
            header('Location: index.php');
        $id = (int)$_GET['id'];
        
        if(!empty($_POST) && $id > 0) {
            hookahs_edit($link, $id, $_POST['title'], $_POST['date'], $_POST['content'], $_POST['category'], $_POST['image']);
            header("Location: index.php");
        }
        
        $hookah = hookah_get($link, $id);
        include("../views/hookah_admin.php");  
    }else if($action == 'delete'){
        $id = $_GET['id'];
        $hookah = hookahs_delete($link, $id);
        header('Location: index.php');
    }
    else{
        $hookahs = hookahs_all($link);
        include("../views/hookahs_admin.php");        
    }
?>