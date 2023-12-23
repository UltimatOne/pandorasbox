<?php
//Verifier si le role est  administrateur
if ($role['user_role'] !== 'administrator') {
    header('Location: signIn.php');
    exit();
}
;
var_dump('test');

?>