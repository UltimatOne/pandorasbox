<?php
include 'header.php';

//Ne pas décommenter sinon détruit $_SESSION 
// session_destroy();

//Ne pas décommenter sinon supprime la dernière entrée du tableau d'énigmes
// array_pop($_SESSION["enigmes"]);

// var_dump($_GET['id']);

//Verifie si id existe dans get ou post et le set dans $id
if (isset($_GET["id"])){
    $id = $_GET["id"];
} else if (isset($_POST["id"])) {
    $id = $_POST["id"];
};
//Verifie le niveau de diffulté et set dans $difficulty le mot en francais
if ($_SESSION["enigmes"][$id]["difficulty"] == "easy"){
    $difficulty = "FACILE";
    $background = "https://o.fortboyard.tv/photos/photo_2734.jpg";
    $color = "success";
};
if ($_SESSION["enigmes"][$id]["difficulty"] == "medium"){
    $difficulty = "NORMAL";
    $background = "https://o.fortboyard.tv/photos/photo_3704.jpg";
    $color = "primary";
};
if ($_SESSION["enigmes"][$id]["difficulty"] == "hard"){
    $difficulty = "DIFFICILE";
    $background = "https://o.fortboyard.tv/photos/photo_2736.jpg";
    $color = "warning";
};
if ($_SESSION["enigmes"][$id]["difficulty"] == "impossible"){
    $difficulty = "PÈRE FOURAS";
    $background = "https://o.fortboyard.tv/photos/photo_2722.jpg";
    $color = "danger";
};

// var_dump($_SESSION);
// var_dump($_SESSION["enigmes"]);
// var_dump($_SESSION["enigmes"][$_GET["id"]]["win"]);
// var_dump($_SESSION["enigmes"][$_GET["id"]]["lose"]);
// var_dump($_SESSION["enigmes"][$_GET["id"]]["correctResponse"]);

//Si les indicateurs win et lose n'existe pas, les crees à zero pour la page stats.php
if (!isset($_SESSION["enigmes"][$id]["win"])) {
    $_SESSION["enigmes"][$id]["win"] = 0;
};
if (!isset($_SESSION["enigmes"][$id]["win"])) {
    $_SESSION["enigmes"][$id]["lose"] = 0;
};


//Réponses envoyées par les boutons
$response1 = $_SESSION["enigmes"][$id]["correctResponse"];
$response2 = $_SESSION["enigmes"][$id]["falseResponse1"];
$response3 = $_SESSION["enigmes"][$id]["falseResponse2"];
$response4 = $_SESSION["enigmes"][$id]["falseResponse3"];

//Couleurs des boutons
$buttonsColors = ["danger","secondary","primary","success"];
//Pour changer la couleur des boutons aleatoirement
shuffle($buttonsColors);

//Boutons pour jouer
$buttons = ["<a type='button' class='btn btn-$buttonsColors[0] m-2' style='width: 20%;' href='jeu.php?resp=" . $response1 . "&id=" . $id . "'>$response1</a>", 
            "<a type='button' class='btn btn-$buttonsColors[1] m-2' style='width: 20%;' href='jeu.php?resp=" . $response2 . "&id=" . $id . "'>$response2</a>", 
            "<a type='button' class='btn btn-$buttonsColors[2] m-2' style='width: 20%;' href='jeu.php?resp=" . $response3 . "&id=" . $id . "'>$response3</a>", 
            "<a type='button' class='btn btn-$buttonsColors[3] m-2' style='width: 20%;' href='jeu.php?resp=" . $response4 . "&id=" . $id . "'>$response4</a>"];
//pour changer l'ordre des boutons aléatoirement
shuffle($buttons);

//Verifie qu'un id existe, si oui affiche l'énigme correspondante depuis $enigmes sinon message d'erreur
if (isset($id)) {
    $enigme = $_SESSION["enigmes"][$id];
    $contenu = "<div class='container w-25 d-flex flex-wrap justify-content-around bg-dark bg-opacity-75 text-white rounded-5 mb-4'>
                    <h1 class='text-center'>" . $enigme["titre"] . "</h1>
                </div>
                <div class='container w-25 d-flex flex-wrap justify-content-center align-items-center mb-4 text-light'>
                    <h4 class='fw-bold bg-$color bg-opacity-75 rounded-5 p-2'>" . $difficulty . "</h4>
                </div>
                <div class='w-50 d-flex flex-column justify-content-around bg-dark bg-opacity-75 text-white mb-4 rounded-5'>
                    <div class='container-fluid d-flex w-50 m-auto justify-content-center align-items-center' style='height: 200px;''>
                        <p class='m-auto'>" . $enigme["description"] . "</p>
                    </div>
                    <div class='container-fluid d-flex w-50 m-auto justify-content-center align-items-center bg-light bg-opacity-75 text-dark mb-4 rounded-5'>
                        <p class='m-auto fs-4 fw-bold'>Choisissez une Réponse :</p>
                    </div>
                </div>
                <div class='container d-flex w-50 flex-wrap justify-content-around bg-dark text-white mb-4 rounded-5 bg-opacity-75'>
                    $buttons[0]
                    $buttons[1]
                    $buttons[2]
                    $buttons[3]
                </div>";
} else {
    $msgError = "<p>L'énigme n'a pas été trouvée.</p>";
};

//verifie la réponse, affiche un message bravo et 1 a win si gagné sinon un message pour perdu et ajoute 1 a lose
if (isset($_GET["resp"]) && $_GET["resp"] == $response1) {
    //verifie que win existe et incremente de 1 sinon le cree à 1
    if (isset($_SESSION["enigmes"][$id]["win"])) {
        $_SESSION["enigmes"][$id]["win"] ++ ;
    } else {
        $_SESSION["enigmes"][$id]["win"] = 1;
    };
    $msgSuccess = "<h1 class='text-center'>BRAVO</h1>
                  <div class='container d-flex flex-wrap justify-content-around text-white mb-4'>
                    <a type='button' class='btn btn-light m-2' href='list.php'>Retour aux énigmes</a>
                  </div>";
} else if (isset($_GET["resp"]) && $_GET["resp"] !== $response1) {
     //verifie que lose existe et incremente de 1 sinon le cree à 1
    if (isset($_SESSION["enigmes"][$id]["lose"])) {
        $_SESSION["enigmes"][$id]["lose"] ++ ;
    } else {
        $_SESSION["enigmes"][$id]["lose"] = 1;
    };
    $msgError = "<h1 class='text-center'>PERDU</h1>
                 <div class='container d-flex flex-wrap justify-content-around text-white mb-4'>
                     <a type='button' class='btn btn-info m-2' href='jeu.php?id=" . $id . "'>Rejouer</a>
                     <a type='button' class='btn btn-light m-2' href='list.php'>Retour aux énigmes</a>
                 </div>";
} else {
};
?>

<main class="bg-image d-flex flex-column justify-content-center align-items-center" style="background-image: url(<?= $background ?>); height: 94.2vh">

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