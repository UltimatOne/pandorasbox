<?php

if ( isset($_GET['supp']) && !empty($_GET['supp'])) {
    $request = $db->prepare('DELETE FROM users WHERE user_id = ?');
    $request->execute([
      $_GET['supp']
    ]);
  }
  
?>