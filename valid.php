<?php

include "header.php";

if (isset($_POST["titre"]) AND
//on met ici ce qu'on a mis dans name
!empty($_POST["titre"]) AND
!empty($_POST["description"]) AND
!empty($_POST["difficulty"]) AND
!empty($_POST["falseResponse1"]) AND
!empty($_POST["falseResponse2"]) AND
!empty($_POST["falseResponse3"]) AND
!empty($_POST["correctResponse"])) {
$msgSuccess = "Énigme bien ajouté.";
$data = [
    "titre" => $_POST["titre"],
    "description" => $_POST["description"],
    "difficulty" => $_POST["difficulty"],
    "falseResponse1" => $_POST["falseResponse1"],
    "falseResponse2" => $_POST["falseResponse2"],
    "falseResponse3" => $_POST["falseResponse3"],
    "correctResponse" => $_POST["correctResponse"]
];

//on push les info obtenues
array_push($_SESSION["enigmes"], $data);
//$_SESSION["user"][] = $data; fait la même chose

} else {
    $msgError = "Merci de remplir tous les champs.";
}
?>


<?php
include "box.php";
include "footer.php"
?>