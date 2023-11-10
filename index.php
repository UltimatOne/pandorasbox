<?php
include 'header.php';
//Pour vider $_SESSION en cas de bug
if (isset($_GET["logout"]) &&
    $_GET["logout"] == "true") {
        $_SESSION = [];
        session_destroy();
        header('location: index.php');
        exit();
    };

?>

<main>
    <h1 class="text-center">Bienvenue au royaume des énigmes !</h1>
    <img src="https://s2.qwant.com/thumbr/474x267/4/4/4a22f24a486182fd6f24914694e058a0f9420726ec4079168ceb781cf58443/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP._w6dd29z6fXwPeJamla-oQHaEL%26pid%3DApi&q=0&b=1&p=0&a=0" class="rounded mx-auto d-block" alt="Père Fouras">
    <p class="text-center">Ho ! Ho ! Ho !</p>
    <p class="text-center">Et oui c'est moi ! Le Père Fouras</p>
    <p class="text-center">Et vous êtes désormais prisonnier des cellules de mon fort.</p>
    <p class="text-center">Si vous voulez vous en sortir vous n'avez qu'une possibilité :</p>
    <p class="text-center">Trouver la réponse à mes célèbres énigmes avant la fin de l'année.</p>
    <p class="text-center">En serez-vous capable ?</p>
    <!-- bg-dark = background dark -->
    <div class="container-fluid d-flex justify-content-center">
        <a type='button' class='btn btn-danger' href='list.php'>Commencer les énigmes</a>
    </div>
</main>

<?php
include 'footer.php';
?>