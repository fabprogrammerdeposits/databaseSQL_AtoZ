<?php
            
    /*Pour se connecter en utilisant PDO, 
    instancier la classe PDO 
    en passant au constructeur 
    la source de la base de données 
    (serveur + nom de la base de données) 
    ainsi qu’un nom d’utilisateur et un mot de passe.*/
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
            
    //On essaie de se connecter
    try{
        $connexion = new PDO("mysql:host=$db_host;db_name=frederiquewithouttable", $db_user, $db_password);
        
        /*si votre script ne capture pas ces exceptions, 
        l’action par défaut du moteur Zend 
        va être de terminer le script et d’afficher une trace. 
        Cette trace contient tous les détails de connexion à la base de données 
        (nom d’utilisateur, mot de passe, etc.). 
        Nous devons donc la capturer pour éviter que des utilisateurs malveillants 
        tentent de la lire.*/
        
        //On définit le mode d'erreur de PDO sur Exception
        /*en utilisant PDO::ERRMODE_EXCEPTION,
         on demande au PHP de lancer une exception issue de la classe PDOException 
         (classes étendue de Exception) et d’en définir les propriétés 
         afin de représenter le code d’erreur et les informations complémentaires.*/
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';
    }
    
    /*On capture les exceptions si une exception est lancée et on affiche
     *les informations relatives à celle-ci
     et à afficher le message d’erreur correspondant. 
     C’est le rôle de notre bloc catch.*/
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    }

    /* Une fois la connexion à la base de données ouverte, 
    celle-ci reste active jusqu’à la fin de l’exécution de votre script.
    Pour fermer la connexion avant cela, 
    il faudra détruire l’objet représentant la connexion 
    et effacer toutes ses références. 
    Nous pouvons faire cela en assignant la valeur NULL 
    à la variable gérant l’objet*/
    $connexion=null;

?>