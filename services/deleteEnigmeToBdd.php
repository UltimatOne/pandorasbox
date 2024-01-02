<?php

if (isset($_GET['suppEnigme']) && !empty($_GET['suppEnigme'])) {
    $request = $db->prepare('DELETE FROM enigmes WHERE enigme_id = ?');
    $request->execute([
        $_GET['suppEnigme']
    ]);
    $msgSuccess = "L'énigme a bien été supprimée";
}

?>