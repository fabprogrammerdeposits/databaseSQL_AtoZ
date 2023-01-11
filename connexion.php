<?php
$db_host = "localhost"; /* L'adresse du serveur */
$db_user = "root"; /* Votre nom d'utilisateur */
$db_password = "root"; /* Votre mot de passe */
$db_db = "frederiquewithouttable"; /* Le nom de la base */

function mysql_connect()
{
    global $host, $login, $password, $base;
    $db = mysql_connect($host, $login, $password);
    mysql_select_db($base,$db);
}
?>