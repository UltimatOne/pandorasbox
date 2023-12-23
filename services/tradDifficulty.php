<?php 

//Verifie le niveau de diffulté et set dans $difficulty le mot en francais
if ($enigme["enigme_difficulty"] == "easy") {
    $difficulty = "Facile";
    $color = "success";
  };
  if ($enigme["enigme_difficulty"] == "medium") {
    $difficulty = "Moyenne";
    $color = "primary";
  };
  if ($enigme["enigme_difficulty"] == "hard") {
    $difficulty = "Difficile";
    $color = "warning";
  };
  if ($enigme["enigme_difficulty"] == "impossible") {
    $difficulty = "Père Fouras";
    $color = "danger";
  };

?>