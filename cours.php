<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" type="text/css" >
        <title>invitationPreEval</title>
    </head>
    <body>
        coucou c'est le fichier index.php écrit depuis le cours, ici!

        <form name="formulaire" method="post" action="ajouter.php">
            <table>
                <tr>
                    <td>Nom:</td>
                    <td><input name="nom" type="text" id="nom" /></td>
                </tr>
                <tr>
                    <td>Prénom:</td>
                    <td><input name="prenom" type="text" id="prenom" /></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input name="age" type="text" id="age" size="3" maxlength="3" /></td>
                </tr>
                <tr>
                    <td  colspan="2">
                        <div id="colspan">
                            <input type="submit" name="Submit" value="Envoyer" />
                        </div>
                    </td>
                </tr>
            </table>
        </form>
        <?php
            //Constantes d'environnement
            define("DBHOST", "localhost");
            define("DBUSER", "root");
            define("DBPASSWORD", "root");
            define("DBNAME", "frederiquewithouttable");

            //DSN (DataSourceName) de connexion
            //$dsn= "mysql:dbname=dbFrederique; host=localhost";
            $dsn= "mysql:dbname=".DBNAME."; host=".DBHOST;

            //connexion à la database
            try{
                //instance de PDO
                $db= newPDO($dsn, DBUSER, DBPASSWORD);

                //premier test
                //echo "connexion OK";

                //data : format : UTF8
                $db->exec("SET NAMES utf8");

            }catch(PDOException $e){
                die("Erreur:".$e->getMessage());
            }

            //à partir de cette ligne, connexion à la db effective


            //on peut récupérer la liste des users
            $sql="SELECT * FROM 'users'";

            //on exécute directement la requête
            $requete = $db->query($sql);

            var_dump($requete);
        ?>
    </body>

</html>
