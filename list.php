<?php
include("HEADER.php");

?>

<h1 style="text-align:center; margin:20px">Liste des énigmes</h1>

<h3 style="text-align:center; margin: 20px ">Filtrer par niveaux de difficultés :</h3>
<div style="margin: 20px auto; width : 60%; display:flex; justify-content: space-around;">
  <a type="button" class="btn btn-success" href="list.php?filtre=easy">Facile</a>
  <a type="button" class="btn btn-primary" href="list.php?filtre=medium">Moyenne</a>
  <a type="button" class="btn btn-warning" href="list.php?filtre=hard">Difficile</a>
  <a type="button" class="btn btn-danger" href="list.php?filtre=impossible">Père Fourras</a>
  <a type="button" class="btn btn-secondary" href="list.php">Toutes les difficultés</a>
</div>
<div style="display:flex; flex-wrap:wrap">
  <?php foreach ($_SESSION["enigmes"] as $key => $value) { ?>

    <?php
    if (
      (isset($_GET["filtre"]) && $_GET["filtre"] === $value["difficulty"]) ||
      !isset($_GET["filtre"])
    ) {
      ?>

      <div style="margin-left:15px" class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">
            <?= $value["titre"] ?>
          </h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">
            <?= $value["difficulty"] ?>
          </h6>
          <p class="card-text">
            <?= $value["description"] ?>
          </p>
          <a href="jeu.php?id=<?= $key ?>" class="card-link">Résoudre l'énigme</a>
        </div>
      </div>

    <?php }
  } ?>
</div>