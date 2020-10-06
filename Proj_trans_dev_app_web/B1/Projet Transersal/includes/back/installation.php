<?php
// $host = 'localhost';        //myHostAdress
// $dbname = 'projet_transversal'; //myDataBaseName
// $dbuser = 'root';    //myUserName
// $dbpw = '';        //myPassword

// $pdoReqArg1 = "mysql:host=". $host .";dbname=". $dbname .";";
// $pdoReqArg2 = $dbuser;
// $pdoReqArg3 = $dbpw;

// try {

//     $db = new PDO($pdoReqArg1, $pdoReqArg2, $pdoReqArg3);
//     $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
//     $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
//     $db->exec("SET NAMES 'utf8'");


// } catch(PDOException $e) {

//     $errorMessage = $e->getMessage();
// }

include 'connect.php';

$sql = "CREATE TABLE IF NOT EXISTS `evenements` (
  `ID` int(11) NOT NULL,
  `event_name` varchar(65) NOT NULL,
  `event_description` text NOT NULL,
  `event_date` date NOT NULL,
  `event_lieu` varchar(65) NOT NULL,
  `event_image` varchar(50) CHARACTER SET utf32 NOT NULL,
  `creation_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	ALTER TABLE `evenements`
  	ADD PRIMARY KEY (`ID`);
  	ALTER TABLE `evenements`
  	MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;";
// use exec() because no results are returned
$db->exec($sql);

$sql2 = "CREATE TABLE IF NOT EXISTS `inscrits` (
  `ID` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) CHARACTER SET utf8 NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `inscrits`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `inscrits`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;";
$db->exec($sql2);

$sql3 = "CREATE TABLE IF NOT EXISTS `newsletters` (
  `ID` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `telephone` int(10) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `newsletters`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;";
$db->exec($sql3);

$sql4 = "CREATE TABLE IF NOT EXISTS `relationnelle` (
  `events_ID` int(11) NOT NULL,
  `inscrits_ID` int(11) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `relationnelle`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `relationnelle`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;";
$db->exec($sql4);

$sql5 = "CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID` int(11) NOT NULL,
  `identifiant` varchar(30) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `utilisateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;";
$db->exec($sql5);

?>