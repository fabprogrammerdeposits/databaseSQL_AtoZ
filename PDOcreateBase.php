<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    
    try{
        $dbconnexion = new PDO("mysql:host=$db_host", $db_user, $db_password);
        $dbconnexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "CREATE DATABASE db_Frederique_created";
        $dbconnexion->exec($sql);
        
        echo 'Base de données créée bien créée !';
    }
    
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    }
?>