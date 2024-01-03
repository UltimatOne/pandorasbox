<?php
include 'components/header.php';

// var_dump($_GET['id']);
// if(isset($_GET["resp"])){
//     var_dump($_GET["resp"]);
// };

//Verifie si id existe dans get ou post et le set dans $id
if (isset($_GET["id"])) {
    $enigmeId = $_GET["id"];
} else if (isset($_POST["id"])) {
    $enigmeId= $_POST["id"];
};

//récupère la liste d'énigmes depuis la bdd
include 'services/getEnigmesFromBdd.php';

//Verifie le niveau de diffulté et set dans $difficulty le mot en francais
if ($enigmes[$enigmeId]["enigme_difficulty"] == "easy") {
    $difficulty = "FACILE";
    $background = "https://o.fortboyard.tv/photos/photo_2734.jpg";
    $color = "success";
};
if ($enigmes[$enigmeId]["enigme_difficulty"] == "medium") {
    $difficulty = "MOYENNE";
    $background = "https://o.fortboyard.tv/photos/photo_3704.jpg";
    $color = "primary";
};
if ($enigmes[$enigmeId]["enigme_difficulty"] == "hard") {
    $difficulty = "DIFFICILE";
    $background = "https://o.fortboyard.tv/photos/photo_2736.jpg";
    $color = "warning";
};
if ($enigmes[$enigmeId]["enigme_difficulty"] == "impossible") {
    $difficulty = "PÈRE FOURAS";
    $background = "https://o.fortboyard.tv/photos/photo_2722.jpg";
    $color = "danger";
};

// var_dump($enigmes);
// var_dump($enigmes[$enigmeId]['enigme_id']);
// var_dump($enigmes[$enigmeId]["enigme_win"]);
// var_dump($enigmes[$enigmeId]]["enigme_lose"]);



//Réponses envoyées par les boutons
$response1 = $enigmes[$enigmeId]["enigme_response1"];
$response2 = $enigmes[$enigmeId]["enigme_response2"];
$response3 = $enigmes[$enigmeId]["enigme_response3"];
$response4 = $enigmes[$enigmeId]["enigme_response4"];

//Couleurs des boutons
$buttonsColors = ["danger", "secondary", "primary", "success"];
//Pour changer la couleur des boutons aleatoirement
shuffle($buttonsColors);

//Boutons pour jouer
$buttons = [
    "<a type='button' class='btn btn-$buttonsColors[0] m-2 d-flex justify-content-center align-items-center' style='width: 20%;' href='jeu.php?resp=réponse1&id=$enigmeId'>$response1</a>",
    "<a type='button' class='btn btn-$buttonsColors[1] m-2 d-flex justify-content-center align-items-center' style='width: 20%;' href='jeu.php?resp=réponse2&id=$enigmeId'>$response2</a>",
    "<a type='button' class='btn btn-$buttonsColors[2] m-2 d-flex justify-content-center align-items-center' style='width: 20%;' href='jeu.php?resp=réponse3&id=$enigmeId'>$response3</a>",
    "<a type='button' class='btn btn-$buttonsColors[3] m-2 d-flex justify-content-center align-items-center' style='width: 20%;' href='jeu.php?resp=réponse4&id=$enigmeId'>$response4</a>"
];
//pour changer l'ordre des boutons aléatoirement
shuffle($buttons);

//Verifie qu'un id existe, si oui affiche l'énigme correspondante depuis $enigmes sinon message d'erreur
if (isset($enigmeId)) {
    $enigme = $enigmes[$enigmeId];
    $contenu = "<div class='container w-25 d-flex flex-wrap justify-content-around bg-dark bg-opacity-75 text-white rounded-5 my-4'>
                    <h1 class='text-center'>" . $enigme["enigme_title"] . "</h1>
                </div>
                <div class='container w-25 d-flex flex-wrap justify-content-center align-items-center mb-4 text-light'>
                    <h4 class='fw-bold bg-$color bg-opacity-75 rounded-5 p-2'>" . $difficulty . "</h4>
                </div>
                <div class='w-50 d-flex flex-column justify-content-around bg-dark bg-opacity-75 text-white mb-4 rounded-5' style='min-height: 40vh'>
                    <div class='container-fluid d-flex justify-content-center align-items-center my-auto'>
                        <p class='m-auto text-center fs-5'>" . $enigme["enigme_description"] . "</p>
                    </div>
                    <div class='container-fluid d-flex w-50 m-auto mt-4 justify-content-center align-items-center bg-light bg-opacity-75 text-dark mb-4 rounded-5'>
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
if (isset($_GET["resp"]) && $_GET["resp"] == $enigmes[$enigmeId]['enigme_correctResponse']) {
    //incremente enigme_win de 1
    try {
        //Bonne pratique permet de préparer l'envoi sans injection, envoi + 1 à win dans la bdd
        $count = "enigme_win = enigme_win + 1";
        $index = $enigmes[$enigmeId]['enigme_id'];
        $request = $db->prepare("UPDATE enigmes SET $count WHERE enigmes.enigme_id =  $index ");
        //Envoi
        $request->execute([]);
    } catch (Exception $e) {
        // var_dump($e->getMessage());
        $msgError = "L'ajout de +1 à win a échoué";
    };
    $msgSuccess = "<h1 class='text-center'>BRAVO</h1>
                  <div class='container d-flex flex-wrap justify-content-around text-white mb-4'>
                    <a type='button' class='btn btn-light m-2' href='list.php'>Retour aux énigmes</a>
                  </div>";
} else if (isset($_GET["resp"]) && $_GET["resp"] != $enigmes[$enigmeId]['enigme_correctResponse']) {
    //incremente enigme_lose de 1
    try {
        //Bonne pratique permet de préparer l'envoi sans injection, envoi + 1 à lose dans la bdd
        $count = "enigme_lose = enigme_lose + 1";
        $index = $enigmes[$enigmeId]['enigme_id'];
        $request = $db->prepare("UPDATE enigmes SET $count WHERE enigmes.enigme_id =  $index ");
        //Envoi
        $request->execute([]);
    } catch (Exception $e) {
        // var_dump($e->getMessage());
        $msgError = "L'ajout de +1 à lose a échoué";
    };
    $msgError = "<h1 class='text-center'>PERDU</h1>
                 <div class='container d-flex flex-wrap justify-content-around text-white mb-4'>
                     <a type='button' class='btn btn-info m-2' href='jeu.php?id=" . $enigmeId . "'>Rejouer</a>
                     <a type='button' class='btn btn-light m-2' href='list.php'>Retour aux énigmes</a>
                 </div>";
} else {
};
?>

<main class="d-flex flex-column justify-content-center align-items-center" style="background-image: url(<?= $background ?>); min-height: 93.1vh; position: relative;">

    <?php
    //Verifie qu'il y a bien une enigme dans contenu et l'affiche sinon affiche un message d'erreur
    if (!empty($contenu)) {
        echo $contenu;
        if (!empty($msgSuccess) or !empty($msgError)) {
            echo "<div class='bg-dark bg-opacity-50 d-flex justify-content-center align-items-center' style='position: absolute; z-index: 10; top: 0; bottom: 0; left: 0; right: 0;'>
                <div class='w-25' style=''>";
            include "components/box.php";
            echo   "</div>
              </div>";
        }
    } else {
        if (!empty($msgSuccess) or !empty($msgError)) {
            echo "<div class='bg-dark bg-opacity-50 d-flex justify-content-center align-items-center' style='position: absolute; z-index: 10; top: 0; bottom: 0; left: 0; right: 0;'>
                <div class='w-25'>";
            include "components/box.php";
            echo   "</div>
            </div>";
        }
    }
    ?>

</main>

<?php
include 'components/footer.php';
?>