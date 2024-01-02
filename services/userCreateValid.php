<?php

// Valide l'ajout d'un utilisateur à la tab users de la Bdd pandorasbox et set $_SESSION
if (
    isset($_POST["user_role"]) &&
    isset($_POST["user_email"]) &&
    isset($_POST["user_pswrd"])
) {
    if (empty($_POST["user_role"]) || empty($_POST["user_pseudo"]) || empty($_POST["user_email"]) || empty($_POST["user_pswrd"]) || empty($_POST["user_birthday"])) {
        $msgError = "<p>Merci de compléter les champs suivants:";
        foreach ($_POST as $key => $value) {
            if (empty($value)) {
                $msgError .= "<br> -> $key";
            }
        }
        ;
        $msgError .= "</p>";
    } else {

        //Préparation des valeurs à envoyer
        $role = $_POST["user_role"];
        $firstname = empty($_POST["user_firstname"]) ? NULL : $_POST["user_firstname"];
        $lastname = empty($_POST["user_lastname"]) ? NULL : $_POST["user_lastname"];
        $pseudo = $_POST["user_pseudo"];
        $email = $_POST["user_email"];
        //Hashage du password avant sauvegarde dans BDD
        $pswrdHash = password_hash($_POST["user_pswrd"], PASSWORD_DEFAULT);
        $birthday = $_POST["user_birthday"];


        try {
            //Mauvaise pratique (sans contrôle permet d'injecter du code sql dans les inputs)
            // $sql = "INSERT INTO users (user_firstname, user_email, user_pwd) VALUES ('$firstname','$email','$pwdHash')";
            //$db->exec($sql);

            //Bonne pratique permet de préparer l'envoi sans injection
            $request = $db->prepare("INSERT INTO users (user_role,user_firstname,user_lastname,user_pseudo,user_email,user_pswrd,user_birthday) VALUES (?,?,?,?,?,?,?)");

            //Envoi
            $request->execute([$role, $firstname, $lastname, $pseudo, $email, $pswrdHash, $birthday]);

            $msgSuccess = $pseudo . " a bien été ajouté ";

        } catch (Exception $e) {
            var_dump($e->getMessage());
            $msgError = "L'inscription a échouée";
        }
        ;
    }
    ;
}
;

?>