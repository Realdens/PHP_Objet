<?php

include_once("rib.class.php");


//récup champs de saisie

$validator = new RIBValidator($_POST["bankcode"], $_POST["agencycode"], $_POST["accountnumber"], $_POST["ribkey"]);

//var_dump($validator);

if ($validator->isValid()){
    header("Location: index.php?valide");
} else {
    header("Location: index.php?invalide");
}