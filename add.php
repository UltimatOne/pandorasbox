<?php
include "header.php";

?>

<form class="container" action="valid.php" method="post">
  <label for="titre">Titre de l'énigme</label>
  <input type="text" name = "titre">
  <div>
    <label for="description" class="form-label">Énoncé de l'énigme</label>
</div>
<div class="mb-3">
    <textarea name="description" cols="80" rows="10"></textarea>
  </div>
  <div>
        <label for="difficulty">Niveau de difficultée</label>
  </div>
  <div>
    <select name="difficulty" id="">
        <option value="easy">Facile</option>
        <option value="medium">Moyen</option>
        <option value="hard">Difficile</option>
        <option value="impossible">Père Fouras</option>
    </select>
  </div>
  <!-- <div class="mb-3">
    <label for="falseResponse1" class="form-label">Réponse 1</label>
    <input type="texte" class="form-control" name = "falseResponse1">
  </div> -->
  <div>
        <label for="falseResponse1">Mauvaise réponse</label>
  </div>
  <div>
    <input type="text" name = "falseResponse1">
  </div>
  <div>
        <label for="falseResponse2">Mauvaise réponse</label>
  </div>
  <div>
    <input type="text" name = "falseResponse2">
  </div>
  <div>
        <label for="falseResponse3">Mauvaise réponse</label>
  </div>
  <div>
    <input type="text" name = "falseResponse3">
  </div>
  <div>
  <label for="correctResponse">Bonne réponse</label>
  </div>
  <div>
   <input type="text" name = "correctResponse">
  </div>
  <button type="submit" >Poster l'énigme</button>
  </form>
<?php
include "footer.php";
?>
