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
            /*include'connexionMAMP.php';*/
            /*include'PDO.php';*/
            /*include'PDOcreateBase.php';
            include'PDOcreateTable.php';
            include'PDOCreateTableStaff.php';*/


        ?>
    </body>

</html>
