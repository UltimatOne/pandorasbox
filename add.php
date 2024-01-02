<?php
include "components/header.php";
include "services/connexionUserCheck.php";
include 'services/addEnigmeIntoBdd.php';
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
    echo "<div class='bg-dark bg-opacity-50 d-flex flex-column justify-content-center align-items-center' style='position: absolute; z-index: 10; top: 0; bottom: 0; left: 0; right: 0;'>
                <div class='w-25'>";
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
          <a href="add.php?mod=<?= $enigme['enigme_id'] ?>" class=' btn btn-success' style="width:40%">Modifier</a>
          <a href="add.php?suppEnigme=<?= $enigme['enigme_id'] ?>" class=' btn btn-danger' style="width:40%">Supprimer</a>
        </div>
      </div>
    <?php } ?>
    <h2>Ajouter une énigme</h2>
    <form class="container w-50 bg-dark text-center mt-5 rounded-5 py-2 text-white fw-bold mb-2" action=""
      method="post">
      <div class="d-flex flex-column w-75 mx-auto">
        <label for="enigme_title">Titre de l'énigme</label>
        <input type="text" name="enigme_title">
      </div>
      <div class="d-flex flex-column w-75 mx-auto">
        <label for="enigme_description" class="form-label">Énoncé de l'énigme</label>
        <textarea name="enigme_description" cols="80" rows="10"></textarea>
      </div>
      <div class="d-flex flex-column w-75 mx-auto">
        <label for="enigme_difficulty">Niveau de difficulté</label>
        <select class="form-control" name="enigme_difficulty">
          <option value="">-----------</option>
          <option value="easy">Facile</option>
          <option value="medium">Moyen</option>
          <option value="hard">Difficile</option>
          <option value="impossible">Père Fouras</option>
        </select>
      </div>
      <div class="d-flex flex-column w-75 mx-auto">
        <label for="enigme_response1">réponse 1</label>
        <input type="text" name="enigme_response1">
      </div>
      <div class="d-flex flex-column w-75 mx-auto">
        <label for="enigme_response2">réponse 2</label>
        <input type="text" name="enigme_response2">
      </div>
      <div class="d-flex flex-column w-75 mx-auto">
        <label for="enigme_response3">réponse 3</label>
        <input type="text" name="enigme_response3">
      </div>
      <div class="d-flex flex-column w-75 mx-auto">
        <label for="enigme_response4">réponse 4</label>
        <input type="text" name="enigme_response4">
      </div>
      <div class="d-flex flex-column w-75 mx-auto">
        <label for="enigme_correctResponse">réponse correcte:</label>
        <select class="form-control" name="enigme_correctResponse">
          <option value="">---------</option>
          <?php foreach ($correctResponsesSelect as $correctResponseSelect) {
            echo "<option value='{$correctResponseSelect['correctResponse']}'>{$correctResponseSelect['correctResponse']}</option>";
          } ?>
        </select>
      </div>
      <button type="submit" class="btn btn-dark my-2">Ajouter l'énigme</button>
    </form>
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
          <a href="add.php?mod=<?= $user['user_id'] ?>" class='btn btn-success ' style="width:40%">Modifier</a>
          <a href="add.php?suppUser=<?= $user['user_id'] ?>" class='btn btn-danger ' style="width:40%">Supprimer</a>
        </div>
      </div>
    <?php } ?>
    <h2>Ajouter un utilisateur</h2>
    <form action="" method="post"
      class="container w-50 bg-dark text-center mt-5 rounded-5 py-2 text-white fw-bold mb-2">
      <div class="d-flex flex-column w-75 mx-auto">
        <label for="user_role">Rôle</label>
        <select class="form-control" name="user_role">
          <option value="">-----------</option>
          <option value="administrator">Administrateur</option>
          <option value="player">Joueur</option>
        </select>
      </div>
      <div class="d-flex flex-column w-75 mx-auto">
        <label for="user_firstname" class="form-label">Prénom</label>
        <input type="text" class="form-control" name="user_firstname">
      </div>
      <div class="d-flex flex-column w-75 mx-auto">
        <label for="user_lastname" class="form-label">Nom</label>
        <input type="text" class="form-control" name="user_lastname">
      </div>
      <div class="d-flex flex-column w-75 mx-auto">
        <label for="user_pseudo" class="form-label">Pseudo</label>
        <input type="text" class="form-control" name="user_pseudo">
      </div>
      <div class="d-flex flex-column w-75 mx-auto">
        <label for="user_email" class="form-label">Email</label>
        <input type="email" class="form-control" name="user_email">
      </div>
      <div class="d-flex flex-column w-75 mx-auto">
        <label for="user_pswrd" class="form-label">mot de passe</label>
        <input type="password" class="form-control" name="user_pswrd">
      </div>
      <div class="d-flex flex-column w-75 mx-auto">
        <label for="user_birthday" class="form-label">date de naissance</label>
        <input type="date" class="form-control" name="user_birthday">
      </div>
      <button type="submit" class="btn btn-dark w-25 my-2">Envoyer</button>
    </form>
  </section>
</main>
<?php
include "components/footer.php";
?>