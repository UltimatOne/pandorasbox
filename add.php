<?php
include "header.php";

?>

<!-- <form class="container" action="valide.php" method="post">
<div class="mb-3">
    <label for="lastname1" class="form-label">Nom</label>
    <input type="text" class="form-control" name ="nom" id="lastname">
  </div>
  <div class="mb-3">
    <label for="firstname1" class="form-label">Prénom</label>
    <input type="text" class="form-control" name ="prenom" id="firstname">
  </div>
<div class="mb-3">
    <label for="email" class="form-label">Adresse mail</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="email">
    <div id="emailHelp" class="form-text">Tkt, l'adresse reste privée.</div>
  </div>
  <div class="mb-3">
    <label for="telephone" class="form-label">Numéro de téléphone</label>
    <input type="tel" class="form-control" name = "telephone" id="tel">
  </div>
  <div class="mb-3">
    <label for="adrs" class="form-label">Adresse</label>
    <input type="text" class="form-control" name = "adresse" id="adrs">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  <div class="mb-3">
    <label for="birth" class="form-label">Date de naissance</label>
    <input type="date" class="form-control" name = "date" id="birth">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->

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
<?php // faire formulair d'entrée des énigmes avec les réponses qui se voient assignées bonne ou mauvaise ?>
<?php
include "footer.php";
?>
