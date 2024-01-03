<?php ?>
<div class="card my-3 ">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title text-center">
          <?= $enigme["enigme_title"] ?>
        </h5>
        <h6 class="card-subtitle my-2 bg-<?= $color ?> w-50 p-2 text-white fw-bold text-center rounded-2">
          <?= $difficulty ?>
        </h6>
        <p class="card-text my-2 h-100 d-flex justify-content-center">
          <?= $enigme["enigme_description"] ?>
        </p>
        <a class="btn btn-<?= $color ?> ms-auto my-3 w-50 text-white" href="jeu.php?id=<?= $key ?>">Résoudre l'énigme</a>
      </div>
    </div>