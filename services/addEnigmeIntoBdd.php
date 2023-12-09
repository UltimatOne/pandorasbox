<?php
//Valide l'ajout d'une énigme à la tab enigmes de la Bdd pandorasbox
if (isset($_POST['enigme_title']) && isset($_POST['enigme_description'])) {
    if (
        empty($_POST['enigme_title']) ||
        empty($_POST['enigme_description']) ||
        empty($_POST['enigme_difficulty']) ||
        empty($_POST['enigme_response1']) ||
        empty($_POST['enigme_response2']) ||
        empty($_POST['enigme_response3']) ||
        empty($_POST['enigme_response4']) ||
        empty($_POST['enigme_correctResponse'])
    ) {
        $msgError = "<p>Merci de compléter les champs suivants:";
        foreach ($_POST as $key => $value) {
            if (empty($value)) {
                $msgError .= "<br> -> $key";
            }
        };
        $msgError .= "</p>";
    } else {
        //Préparation des valeurs à envoyer
        $title = $_POST["enigme_title"];
        $description = $_POST["enigme_description"];
        $difficulty = $_POST["enigme_difficulty"];
        $response1 = $_POST["enigme_response1"];
        $response2 = $_POST["enigme_response2"];
        $response3 = $_POST["enigme_response3"];
        $response4 = $_POST["enigme_response4"];
        $correctResponse = $_POST["enigme_correctResponse"];

        try {
            //Bonne pratique permet de préparer l'envoi sans injection
            $request = $db->prepare("INSERT INTO enigmes (enigme_title, enigme_description, enigme_difficulty, enigme_response1, enigme_response2, enigme_response3, enigme_response4, enigme_correctResponse) VALUES (?,?,?,?,?,?,?,?)");
            //Envoi
            $request->execute([$title, $description, $difficulty, $response1, $response2, $response3, $response4, $correctResponse]);

            $msgSuccess = "L'énigme {$title} a bien été ajouté";
        } catch (Exception $e) {
            var_dump($e->getMessage());
            $msgError = "L'ajout de l'énigme a échoué";
        };
    }
}
