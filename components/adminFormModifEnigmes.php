<?php
?>

<h2>Modifier une énigme</h2>
<?php foreach ($enigmes as $key => $enigme) {
    if(isset($_GET['modEnigme']) && !empty($_GET['modEnigme']) && $key == $_GET['modEnigme']) {

    ?>
<form class="container w-50 bg-dark text-center mt-5 rounded-5 py-2 text-white fw-bold mb-2" action="" method="post">
    <div class="d-flex flex-column w-75 mx-auto">
        <!-- le true ne sert qu'à set la variable -->
        <input type="hidden" name="modifEnigme" value="modifEnigme">
        <input type="hidden" name="enigme_id" value="<?= $enigme['enigme_id']?>">
        <label for="enigme_title">Titre de l'énigme</label>
        <input type="text" name="enigme_title" value="<?= $enigme['enigme_title'] ?>">
    </div>
    <div class="d-flex flex-column w-75 mx-auto">
        <label for="enigme_description" class="form-label">Énoncé de l'énigme</label>
        <textarea name="enigme_description" cols="80" rows="10" value="<?= $enigme['enigme_description'] ?>"><?= $enigme['enigme_description'] ?></textarea>
    </div>
    <div class="d-flex flex-column w-75 mx-auto">
        <label for="enigme_difficulty">Niveau de difficulté</label>
        <select class="form-control" name="enigme_difficulty" value="<?php $enigme['enigme_difficulty'] ?>">
            <option value="">-----------</option>
            <option <?php if ($enigme['enigme_difficulty'] === "easy") {echo 'selected '; }?>value="easy">Facile</option>
            <option <?php if ($enigme['enigme_difficulty'] === "medium") {echo 'selected '; }?>value="medium">Moyen</option>
            <option <?php if ($enigme['enigme_difficulty'] === "hard") {echo 'selected '; }?>value="hard">Difficile</option>
            <option <?php if ($enigme['enigme_difficulty'] === "impossible") {echo 'selected '; }?>value="impossible">Père Fouras</option>
        </select>
    </div>
    <div class="d-flex flex-column w-75 mx-auto">
        <label for="enigme_response1">réponse 1</label>
        <input type="text" name="enigme_response1" value="<?= $enigme['enigme_response1'] ?>">
    </div>
    <div class="d-flex flex-column w-75 mx-auto">
        <label for="enigme_response2">réponse 2</label>
        <input type="text" name="enigme_response2" value="<?php echo $enigme['enigme_response2'] ?>">
    </div>
    <div class="d-flex flex-column w-75 mx-auto">
        <label for="enigme_response3">réponse 3</label>
        <input type="text" name="enigme_response3" value="<?= $enigme['enigme_response3'] ?>">
    </div>
    <div class="d-flex flex-column w-75 mx-auto">
        <label for="enigme_response4">réponse 4</label>
        <input type="text" name="enigme_response4" value="<?= $enigme['enigme_response4'] ?>">
    </div>
    <div class="d-flex flex-column w-75 mx-auto">
        <label for="enigme_correctResponse">réponse correcte:</label>
        <select class="form-control" name="enigme_correctResponse" value="<?= $enigme['enigme_correctResponse'] ?>">
            <option value="">---------</option>
            <?php foreach ($correctResponsesSelect as $correctResponseSelect) {
                $selected = "";
                if ($correctResponseSelect['correctResponse'] === $enigme['enigme_correctResponse']){$selected = 'selected ';}
                echo "<option ". $selected ."value='{$correctResponseSelect['correctResponse']}'>{$correctResponseSelect['correctResponse']}</option>";
            } ?>
        </select>
    </div>
    <button type="submit" class="btn btn-dark my-2">Modifier l'énigme</button>
</form>
<?php 
    }
} ?>