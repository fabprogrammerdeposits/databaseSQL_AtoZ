<?php
include("connexion.php");
 
mysql_connect();
 
$sql= "CREATE TABLE IF NOT EXISTS `mabase` (";
$sql .= "`id` int(11) NOT NULL auto_increment,";
$sql .= "`nom` text NOT NULL,";
$sql .= "`prenom` text NOT NULL,";
$sql .= "`age` int NOT NULL,";
$sql .= "PRIMARY KEY  (`id`),";
$sql .= "UNIQUE KEY `id_2` (`id`),";
$sql .= "KEY `id` (`id`)";
$sql .= ") ENGINE=MyISAM;";
 
mysql_query($sql) or die(mysql_error());
?>