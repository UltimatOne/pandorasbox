<?php 

if (isset($_GET['logout']) and $_GET['logout'] == "true") {

    $_SESSION = [];
    session_destroy();
    header('location: index.php');
    exit();
}

?>