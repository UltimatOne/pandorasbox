<?php
include 'components/header.php';
include 'services/playerCreateValid.php';

?>

<h1 class="text-center">Inscription</h1>

<form action="" method="post" class="d-flex flex-column mx-auto" style="width: 60%;">
    </div>
    <div class="mb-3">
        <label for="user_firstname" class="form-label">Votre Prénom</label>
        <input type="text" class="form-control" name="user_firstname">
    </div>
    <div class="mb-3">
        <label for="user_lastname" class="form-label">Votre Nom</label>
        <input type="text" class="form-control" name="user_lastname">
    </div>
    <div class="mb-3">
        <label for="user_pseudo" class="form-label">Votre Pseudo</label>
        <input type="text" class="form-control" name="user_pseudo">
    </div>
    <div class="mb-3">
        <label for="user_email" class="form-label">Votre Email</label>
        <input type="email" class="form-control" name="user_email">
    </div>
    <div class="mb-3">
        <label for="user_pswrd" class="form-label">Votre mot de passe</label>
        <input type="password" class="form-control" name="user_pswrd">
    </div>
    <div class="mb-3">
        <label for="user_birthday" class="form-label">Votre date de naissance</label>
        <input type="date" class="form-control" name="user_birthday">
    </div>
    <button type="submit" class="btn btn-dark w-25 mx-auto">Envoyer</button>
</form>


<?php
include 'components/box.php';
include 'components/footer.php';
?>