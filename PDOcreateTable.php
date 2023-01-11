<?php
    $db_host = 'localhost';
    $db_db = 'db_Frederique_created';
    $db_user = 'root';
    $db_password = 'root';
    
    try{
        $dbconnexion = new PDO("mysql:host=$db_host;dbname=$db_db", $db_user, $db_password);
        $dbconnexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        /*
        MySQL : 
        les données de type texte,
        les données de type nombre, 
        les données de type date et 
        les données de type spacial
        */
        /*
        Les sous-types de valeurs les plus courants et les plus utilisés sont :
        INT : accepte un nombre entier de 4 octets. La fourchette pour les entiers relatifs est [-2 147 483 648, 2 147 483 647], celle pour les entiers positifs est [0, 4 294 967 295] ;
        VARCHAR : accepte une chaine de longueur variable (entre 0 et 65 535 caractères). La longueur effective réelle de la chaine dépend de la taille maximum d’une ligne ;
        TEXT : accepte une chaine de caractère d’une longueur maximum de 65 535 caractères ;
        DATE : accepte une date se situant entre le 1er janvier de l’an 1000 et le 31 décembre de l’an 9999.
        */
        /*
        Attributs qu’on va pouvoir ajouter à nos colonnes 
        durant la création de notre table :
        NOT NULL – Signifie que chaque entrée doit contenir une valeur pour cette colonne. La valeur null n’est pas acceptée ;
        UNIQUE – Chacune des valeurs dans la colonne doit être unique (est utile par exemple lorsqu’on reçoit des adresses mail, cela évite qu’un utilisateur s’inscrive deux fois sur notre site entre autres) ;
        PRIMARY KEY – Est utilisé pour identifier de manière unique chaque nouvelle entrée dans une table. C’est une combinaison de NOT NULL et de UNIQUE. PRIMARY KEY ne doit s’appliquer qu’à une colonne dans une table mais chaque table doit obligatoirement posséder une colonne avec une PRIMARY KEY. La colonne avec PRIMARY KEY est souvent une colonne d’ID (nombres) qui s’auto-incrémentent ;
        FOREIGN KEY – Utilisée pour empêcher des actions qui pourraient détruire les liens entre des tables. La FOREIGN KEY sert à identifier une colonne qui est identique à une colonne portant une PRIMARY KEY dans une autre table ;
        CHECK – Sert à s’assurer que toutes les valeurs dans une colonne satisfont à une certaine condition ou se trouve dans un certain intervalle spécifié ;
        DEFAULT value – Sert à définir une valeur par défaut qui va être renseignée si aucune valeur n’est fournie ;
        AUTO_INCREMENT – MySQL va automatiquement incrémenter (c’est-à-dire ajouter 1) au champ pour chaque nouvelle entrée ;
        UNSIGNED – Utilisé pour les données de type nombre, cette contrainte permet de limiter les données reçues aux nombres positifs (0 inclus).
        */
        $sql = "CREATE TABLE Departments  (
                Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                DepartmentStaffNumber INT UNSIGNED NOT NULL,
                DepartmentName VARCHAR(30) NOT NULL,
                DepartmentCountry VARCHAR(30) NOT NULL,
                DepartmentCity VARCHAR(30) NOT NULL)";
        
        $dbconnexion->exec($sql);
        echo 'Table bien créée !';
    }
    
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    }
?>