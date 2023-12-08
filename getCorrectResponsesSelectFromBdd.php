<?php

try {
    $request = $db->prepare('SELECT enigme_correctResponse FROM enigmes');
    $request->execute([]);

    $correctResponsesSelect = $request->fetch();

} catch (Exception $e) {
    $msgError = "La liste n'a pas pu être récupérée";
    var_dump ($e->getMessage());
}

?>