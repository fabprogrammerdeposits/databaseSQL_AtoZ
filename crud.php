<?php

    //DSN (DataSourceName) de connexion
    //$dsn= "mysql:dbname=dbFrederique; host=localhost";
    $dsn= "mysql:db_dbname=".DB_DBNAME."; db_host=".DB_DBHOST
    //connexion à la database
    try{
        //instance de PDO
        $db_db= newPDO($dsn, DB_DBUSER, DB_DBPASSWORD)
        //premier test
        //echo "connexion OK"
        //data : format : UTF8
        $db_db->exec("SET NAMES utf8")
    }catch(PDOException $e){
        die("Erreur:".$e->getMessage());
    }


    //on peut récupérer la liste des users
    $sql="SELECT * FROM 'db_user'"
    /*on exécute directement la requête*/
    $requete = $db_db->query($sql)
    var_dump($requete);

?>