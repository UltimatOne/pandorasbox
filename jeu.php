<?php
include 'header.php';

// var_dump($_GET['id']);
// var_dump($_SESSION);
// var_dump($_SESSION["enigmes"]);
// var_dump($_SESSION["enigmes"][$_GET["id"]]["win"]);
// var_dump($_SESSION["enigmes"][$_GET["id"]]["lose"]);


$response1 = "1";
$response2 = "2";
$response3 = "3";
$response4 = "4";

//Verifie qu'un id existe dans $_GET et si oui affiche l'énigme correspondante dans $enigmes sinon message d'erreur
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $enigme = $_SESSION["enigmes"][$id];
    $contenu = "<div class='container w-25 d-flex flex-wrap justify-content-around bg-dark text-white mb-4 rounded-5'>
                    <h1 class='text-center'>" . $enigme["titre"] . "</h1>
                </div>
                <div class='container d-flex flex-wrap justify-content-around bg-dark text-white mb-4 rounded-5'>
                    <p class='container-fluid d-flex w-50 p-3 m-auto justify-content-center align-items-center' style='height: 200px;'>" . $enigme["description"] . "</p>
                    <div class='container-fluid d-flex justify-content-around align-items-center' style='height: 100px;'>
                        <p>Reponse A : " . $enigme["falseResponse2"] . "</p>
                        <p>Reponse B : " . $enigme["falseResponse1"] . "</p>
                        <p>Reponse C : " . $enigme["correctResponse"] . "</p>
                        <p>Reponse D : " . $enigme["falseResponse3"] . "</p>
                    </div>
                </div>
                <div class='container d-flex w-50 flex-wrap justify-content-around  bg-dark text-white mb-4 rounded-5'>
                    <a type='button' class='btn btn-primary m-2' href='jeu.php?resp=". $response3 . "&id=$id'>Réponse A</a>
                    <a type='button' class='btn btn-secondary m-2' href='jeu.php?resp=". $response2 . "&id=$id'>Réponse B</a>
                    <a type='button' class='btn btn-danger m-2' href='jeu.php?resp=". $response1 . "&id=$id'>Réponse C</a>
                    <a type='button' class='btn btn-success m-2' href='jeu.php?resp=". $response4 . "&id=$id'>Réponse D</a>
                </div>";
} else {
    $msgError = "<p>L'énigme n'a pas été trouvée.</p>";
};
 
//verifie la réponse, si oui ajoute 1 a win ou lose pour les stats et affiche un message
if (isset($_GET["resp"]) && $_GET["resp"] == "1") {
    $cle = $_GET["id"];
    if (isset($_SESSION["enigmes"][$cle]["win"])) {
        $_SESSION["enigmes"][$cle]["win"] ++ ;
    } else {
        $_SESSION["enigmes"][$cle]["win"] = 1;
    };
    $msgSuccess = "<h1 class='text-center'>BRAVO</h1>
                  <div class='container d-flex flex-wrap justify-content-around text-white mb-4'>
                    <a type='button' class='btn btn-light m-2' href='list.php'>Retour aux énigmes</a>
                  </div>";
} else if (isset($_GET["resp"]) && $_GET["resp"] !== "1") {
    $cle = $_GET["id"];
    if (isset($_SESSION["enigmes"][$cle]["lose"])) {
        $_SESSION["enigmes"][$cle]["lose"] ++ ;
    } else {
        $_SESSION["enigmes"][$cle]["lose"] = 1;
    };
    $msgError = "<h1 class='text-center'>PERDU</h1>
                 <div class='container d-flex flex-wrap justify-content-around text-white mb-4'>
                     <a type='button' class='btn btn-info m-2' href='jeu.php?id=" . $id . "'>Rejouer</a>
                     <a type='button' class='btn btn-light m-2' href='list.php'>Retour aux énigmes</a>
                 </div>";
    
} else {};
?>

<main class="">
    
    <?php
    //Verifie qu'il y a bien une enigme dans contenu et l'affiche sinon affiche un message d'erreur
    if (!empty($contenu)) {
        echo $contenu;
        echo "<div class='w-25 mx-auto'>";
        include("box.php");
        echo "</div>";
    } else {
        echo "<div class='w-25 mx-auto'>";
        include("box.php");
        echo "</div>";
    }
    ?>
    
</main>

<?php
include 'footer.php';
?>