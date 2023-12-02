<?php
include("HEADER.php");

?>

<h1 style="text-align:center; margin:20px">Liste des énigmes</h1>

<h3 style="text-align:center; margin: 20px ">Filtrer par niveaux de difficultés :</h3>
<div style="margin: 20px auto; width : 60%; display:flex; justify-content: space-around;">

  <a type="button" class="btn btn-success" href="list.php?filtre=easy" style="width: 18%">Facile</a>
  <a type="button" class="btn btn-primary" href="list.php?filtre=medium" style="width: 18%">Moyenne</a>
  <a type="button" class="btn btn-warning" href="list.php?filtre=hard" style="width: 18%">Difficile</a>
  <a type="button" class="btn btn-danger" href="list.php?filtre=impossible" style="width: 18%">Père Fourras</a>
  <a type="button" class="btn btn-secondary" href="list.php">Toutes les difficultés</a>
</div>
<div class="d-flex flex-wrap justify-content-evenly">
  <?php foreach ($_SESSION["enigmes"] as $key => $value) { ?>

    <?php
    //Verifie le niveau de diffulté et set dans $difficulty le mot en francais
    if ($value["difficulty"] == "easy") {
      $difficulty = "Facile";
      $color = "success";
    };
    if ($value["difficulty"] == "medium") {
      $difficulty = "Moyenne";
      $color = "primary";
    };
    if ($value["difficulty"] == "hard") {
      $difficulty = "Difficile";
      $color = "warning";
    };
    if ($value["difficulty"] == "impossible") {
      $difficulty = "Père Fouras";
      $color = "danger";
    };
    if (
      (isset($_GET["filtre"]) && $_GET["filtre"] === $value["difficulty"]) ||
      !isset($_GET["filtre"])
    ) {
    ?>

      <div class="card mt-3 " style="width: 24%;">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title text-center ">
            <?= $value["titre"] ?>
          </h5>
          <h6 class="card-subtitle my-2 bg-<?= $color ?> w-25 p-2 text-white fw-bold text-center rounded-2  ">
            <?= $difficulty ?>
          </h6>
          <p class="card-text my-auto">
            <?= $value["description"] ?>
          </p>
          <a class="text-end mt-auto" href="jeu.php?id=<?= $key ?>" class="card-link">Résoudre l'énigme</a>
        </div>
      </div>

  <?php }
  } ?>
</div>