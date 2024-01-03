<?php
?>

<h2>Modifier un utilisateur</h2>

<?php foreach ($users as $key => $user) {
    if (isset($_GET['modUser']) && !empty($_GET['modUser']) && $key == $_GET['modUser']) {
        ?>
        <form action="" method="post" class="container w-50 bg-dark text-center mt-5 rounded-5 py-2 text-white fw-bold mb-2">
            <div class="d-flex flex-column w-75 mx-auto">
                <input type="hidden" name="modifUser" value="modifUser">
                <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
                <label for="user_role">Rôle</label>
                <select class="form-control" name="user_role" value="<?= $user['user_role'] ?>">
                    <option value="">-----------</option>
                    <option <?php if ($user['user_role'] === "administrator") {
                        echo 'selected ';
                    } ?> value="administrator">
                        Administrateur</option>
                    <option <?php if ($user['user_role'] === "player") {
                        echo 'selected ';
                    } ?>value="player">Joueur</option>
                </select>
            </div>
            <div class="d-flex flex-column w-75 mx-auto">
                <label for="user_firstname" class="form-label">Prénom</label>
                <input type="text" class="form-control" name="user_firstname" value="<?= $user['user_firstname'] ?>">
            </div>
            <div class="d-flex flex-column w-75 mx-auto">
                <label for="user_lastname" class="form-label">Nom</label>
                <input type="text" class="form-control" name="user_lastname" value="<?= $user['user_lastname'] ?>">
            </div>
            <div class="d-flex flex-column w-75 mx-auto">
                <label for="user_pseudo" class="form-label">Pseudo</label>
                <input type="text" class="form-control" name="user_pseudo" value="<?= $user['user_pseudo'] ?>">
            </div>
            <div class="d-flex flex-column w-75 mx-auto">
                <label for="user_email" class="form-label">Email</label>
                <input type="email" class="form-control" name="user_email" value="<?= $user['user_email'] ?>">
            </div>
            <div class="d-flex flex-column w-75 mx-auto">
                <label for="user_pswrd" class="form-label">mot de passe</label>
                <input type="password" class="form-control" name="user_pswrd" value="<?= $user['user_pswrd'] ?>">
            </div>
            <div class="d-flex flex-column w-75 mx-auto">
                <label for="user_birthday" class="form-label">date de naissance</label>
                <input type="date" class="form-control" name="user_birthday" value="<?= $user['user_birthday'] ?>">
            </div>
            <button type="submit" class="btn btn-dark w-25 my-2">Envoyer</button>
        </form>
        <?php
    }
} ?>