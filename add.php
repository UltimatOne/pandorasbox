<?php
include "components/header.php";
include "services/connexionUserCheck.php";
include 'services/addEnigmeIntoBdd.php';
include 'services/modifEnigmeIntoBdd.php';
include 'services/userCreateValid.php';
include 'services/getCorrectResponsesSelectFromBdd.php';
include 'services/deleteUserToBdd.php';
include 'services/deleteEnigmeToBdd.php';
// on doit afficher ceux dessus en dernier ou ce qui est affiché ne sera pas actualisé
include 'services/getEnigmesFromBdd.php';
include 'services/getUsersFromBdd.php';

?>
<main class="d-flex justify-content-between position-relative ">
  <?php
  if (!empty($msgSuccess) or !empty($msgError)) {
    echo "<div class='bg-dark bg-opacity-50 d-flex flex-column align-items-center' style='position: absolute; z-index: 10; top: 0; bottom: 0; left: 0; right: 0;'>
                <div class='w-25 mt-5'>";
    include "components/box.php";
    echo "</div>
    <a href='add.php' class='btn btn-success '>Terminé</a>
            </div>";
  }
  ?>
  <section class="d-flex flex-column align-items-center " style='width: 45%;'>
    <h1 class="text-center">Énigmes</h1>
    <!-- $key = le numéro d'index (pas l'id) -->
    <?php foreach ($enigmes as $key => $enigme) { ?>
      <div class='row bg-dark text-white justify-content-between py-1 gap-1 w-75 '>
        <p class='col'>
          <?= $enigme['enigme_title'] ?>
        </p>
        <p class='col'>
          <?= substr($enigme['enigme_description'], 0, 45) ?>...
        </p>
        <div class="d-flex justify-content-evenly ">
          <a href="add.php?modEnigme=<?= $key ?>" class=' btn btn-success' style="width:40%">Modifier</a>
          <a href="add.php?suppEnigme=<?= $enigme['enigme_id'] ?>" class=' btn btn-danger' style="width:40%">Supprimer</a>
        </div>
      </div>
    <?php }
    if (isset($_GET['modEnigme'])) {
      include "components/adminFormModifEnigmes.php";
    } else {
      include "components/adminFormAddEnigmes.php";
    }
    ?>
  </section>
  <section class="d-flex flex-column align-items-center " style='width: 45%;'>
    <h1 class="text-center">Utilisateurs</h1>
    <?php foreach ($users as $key => $user) { ?>
      <div class='row bg-dark text-white justify-content-between py-1 gap-1 w-75 '>
        <p class='col'>
          <?= $user['user_pseudo'] ?>
        </p>
        <p class='col'>
          <?= $user['user_email'] ?>
        </p>
        <p class='col'>
          <?= $user['user_role'] ?>
        </p>
        <div class="d-flex justify-content-evenly ">
          <a href="add.php?modUser=<?= $user['user_id'] ?>" class='btn btn-success ' style="width:40%">Modifier</a>
          <a href="add.php?suppUser=<?= $user['user_id'] ?>" class='btn btn-danger ' style="width:40%">Supprimer</a>
        </div>
      </div>
    <?php }
    include "components/adminFormAddUsers.php";
    ?>
  </section>
</main>
<?php
include "components/footer.php";
?>