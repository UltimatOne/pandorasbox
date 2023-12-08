<?php

try {
    $request = $db->prepare('SELECT * FROM correctResponses');
    $request->execute([]);
    $correctResponsesSelect = $request->fetchAll();
} catch (Exception $e) {
    $msgError = "La liste n'a pas pu être récupérée";
    var_dump ($e->getMessage());
}

?>