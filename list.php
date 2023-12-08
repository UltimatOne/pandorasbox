<?php
include 'HEADER.php';



include 'getEnigmesFromBdd.php';

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
<div style="display:flex; flex-wrap:wrap">
<?php foreach ($enigmes as $key => $enigme) { ?>

  <?php
  if (
    (isset($_GET["filtre"]) && $_GET["filtre"] === $enigme["enigme_difficulty"]) ||
    !isset($_GET["filtre"])
  ) {
    ?>
  
    <div style="margin-left:15px" class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">
          <?= $enigme["enigme_title"] ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">
          <?= $enigme["enigme_difficulty"] ?>
        </h6>
        <p class="card-text">
          <?= $enigme["enigme_description"] ?>
        </p>
        <a href="jeu.php?id=<?= $key ?>" class="card-link">Résoudre l'énigme</a>
      </div>
    </div>

  <?php }
} ?>
</div>