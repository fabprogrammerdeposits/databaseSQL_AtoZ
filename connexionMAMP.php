<?php
    //copie de Connect using an UNIX socket (preferred) depuis MAMP
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    //saisie du nom de la db VIDE créée avec phpMyAdmin
    $db_db = 'frederiquewithouttable';

    $mysqli = @new mysqli(
      $db_host,
      $db_user,
      $db_password,
      $db_db
    );
    
    if ($mysqli->connect_error) {
      echo 'Errno: '.$mysqli->connect_errno;
      echo '<br>';
      echo 'Error: '.$mysqli->connect_error;
      exit();
    }

    echo 'Success: A proper connection to MySQL was made.';
    echo '<br>';
    echo 'Host information: '.$mysqli->host_info;
    echo '<br>';
    echo 'Protocol version: '.$mysqli->protocol_version;

    $mysqli->close();
    //fin du process de sélection avec les paramètres de MAMP
    //test : saisir http://localhost:8888 dans l'url
?>