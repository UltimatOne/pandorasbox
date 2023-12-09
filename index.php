<?php
include 'header.php';
include 'services/logOut.php';
include 'services/logIn.php';

?>

<!-- justify-content-center = pour aligner verticalement,align-items-center pour aligner horizontalement en bootstrap -->
<main class="d-flex flex-column bg-dark text-white justify-content-center align-items-center"
    style="height: 93.6vh; background-image: url(https://images.pexels.com/photos/5302525/pexels-photo-5302525.jpeg); background-size: 100%">
    <h1 class="">Bienvenue au royaume des énigmes !</h1>
    <img src="https://s2.qwant.com/thumbr/474x267/4/4/4a22f24a486182fd6f24914694e058a0f9420726ec4079168ceb781cf58443/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP._w6dd29z6fXwPeJamla-oQHaEL%26pid%3DApi&q=0&b=1&p=0&a=0"
        class="rounded-5" alt="Père Fouras">
    <div class="d-flex flex-column text-center px-5 py-5 fs-4 " style="background-image: url(medias/parchemin.png); background-size: 100%; background-repeat: no-repeat; width: 40%">
        <p>Ho ! Ho ! Ho !</p>
        <p>Et oui c'est moi ! Le Père Fouras</p>
        <p>Et vous êtes désormais prisonnier des cellules de mon fort.</p>
        <p>Si vous voulez vous en sortir vous n'avez qu'une possibilité :</p>
        <p>Trouver la réponse à mes célèbres énigmes avant la fin de l'année.</p>
        <p>En serez-vous capable ?</p>
    </div>

    <div class="container-fluid d-flex justify-content-center">
        <a type='button' class='btn btn-danger' href='list.php'>Commencer les énigmes</a>
    </div>
</main>

<?php
include 'box.php';
include 'footer.php';
?>