<?php
include "header.php";


include 'getCorrectResponsesSelectFromBdd.php';
?>

<form class="container w-25 bg-dark text-center mt-5 rounded-5 py-2 text-white fw-bold" action="valid.php" method="post">
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
    <input type="text" name="response1">
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
<?php
include "footer.php";
?>