<?php
    $db_host = 'localhost';
    $db_db = 'db_Frederique_created';
    $db_user = 'root';
    $db_password = 'root';
    
    try{
        $dbconnexion = new PDO("mysql:host=$db_host;dbname=$db_db", $db_user, $db_password);
        $dbconnexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "CREATE TABLE Staff  (
                Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                StaffName VARCHAR(30) NOT NULL,
                StaffLastName VARCHAR(30) NOT NULL,
                StaffCountry VARCHAR(30) NOT NULL,
                StaffCity VARCHAR(30) NOT NULL,
                StaffAdress VARCHAR(30) NOT NULL,
                StaffVerticalLevel INT UNSIGNED NOT NULL)";
        
        $dbconnexion->exec($sql);
        echo 'Table bien créée !';
    }
    
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    }
?>