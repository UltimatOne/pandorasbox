<?php
include 'header.php';
// var_dump($_GET);
// var_dump($_SESSION);

//Pour supprimer la dernière entrée d'un tableau, ici le tableau on supprime la derniere entree dans user qui est dans le tableau $_SESSION pour le 1er exemple
// array_pop( $_SESSION["user"]);

// ici on supprime la derniere entree du tableau correspondant a l'id dans user
// array_pop( $_SESSION["user"][$id]);

$response1 = "correctResponse";
$response2 = "falseResponse";
$response3 = "falseResponse";
$response4 = "falseResponse";
//verifie la réponse, si oui ajoute 1 a win ou lose pour les stats et affiche un message
if (isset($_GET["resp"]) && $_GET["resp"] == "correctResponse") {
    $cle = $_GET["id"];
    if (isset($_SESSION["enigmes"][$_cle]["win"])) {
        $_SESSION["enigmes"][$_cle]["win"] .= +1;
    } else {
        $_SESSION["enigmes"][$_cle]["win"] = 1;
    };
    $msgSuccess = "Bravo c'était la bonne réponse";
} else {
    if (isset($_SESSION["enigmes"][$_cle]["lose"])) {
        $_SESSION["enigmes"][$_cle]["lose"] .= +1;
    } else {
        $_SESSION["enigmes"][$_cle]["lose"] = 1;
    };
    $msgError = "Désolé ce n'était pas la bonne réponse";
};

//Verifie qu'un id existe dans $_GET et si oui affiche l'énigme correspondante dans $enigmes sinon message d'erreur
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $enigme = $_SESSION["enigmes"][$id];
    $contenu = "<h1 class='text-center'>" . $enigme["titre"] . "</h1>
                <div class='container bg-dark text-white'>
                    <p>" . $user["description"] . "</p>
                    <p>Reponse A : " . $enigme["falseResponse2"] . "</p>
                    <br>
                    <p>Reponse B : " . $enigme["falseResponse1"] . "</p>
                    <br>
                    <p>Reponse C : " . $enigme["correctResponse"] . "</p>
                    <br>
                    <p>Reponse D : " . $enigme["falseResponse3"] . "</p>
                    <br>
                </div>
                <div class='container d-flex justify-content-around bg-dark text-white'>
                    <a type='button' class='btn btn-danger' href='jeu.php?resp=". $response3 . "&id=$id'>Réponse A</a>
                    <a type='button' class='btn btn-danger' href='jeu.php?resp=". $response2 . "&id=$id'>Réponse B</a>
                    <a type='button' class='btn btn-danger' href='jeu.php?resp=". $response1 . "&id=$id'>Réponse C</a>
                    <a type='button' class='btn btn-danger' href='jeu.php?resp=". $response4 . "&id=$id'>Réponse D</a>
                <div>";
} else {
    $msgError = "<p>L'énigme n'a pas été trouvé.</p>";
};

?>

<main class="">
    
    <?php
    //Verifie qu'il y a bien une enigme dans contenu et l'affiche sinon affiche un message d'erreur
    if (!empty($contenu)) {
        echo $contenu;
        include("box.php");
    } else {
        include("box.php");
    }
    ?>
    
</main>

<?php
include 'footer.php';
?>