<?php
include 'components/header.php';
include 'services/getEnigmesFromBdd.php';
?>
<div class="d-flex flex-column justify-content-between " style="height: 93.1vh">
<?php
foreach($enigmes as $key => $enigme){
?>
<div class="container-fluid fs-4 row m-0 text-center " style="height: 7vh">
    <a href="jeu.php?id=<?= $key ?>" class="col"><?= $enigme['enigme_title'] ?> : </a>
    <p class="col">Win: <?= $enigme['enigme_win'] ?></p>
    <p class="col">Lose: <?= $enigme['enigme_lose'] ?></p>
</div>
<?php
}
?>
</div>
<?php
include 'components/footer.php';
?>
