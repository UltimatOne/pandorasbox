<?php
$_SESSION["enigmes"] = [
   '0' => [
      'titre' => 'Énigme 1',
      'description' => 'J’ai un chapeau mais pas de tête, un pied mais pas de chaussure. Que suis-je ?',
      'difficulty' => 'easy',
      'falseResponse1' => 'Un lampadaire',
      'falseResponse2' => 'Le ciel',
      'falseResponse3' => 'Une montgolfière',
      'correctResponse' => 'Un champignom',
      'lose' => 0,
      'win' => 0
   ],

   '1' => [
      'titre' => 'Énigme 2',
      'description' => 'Quel est l’animal qui a 4 pattes le matin, 2 le midi et 3 le soir ?',
      'difficulty' => 'easy',
      'falseResponse1' => 'Oedipe',
      'falseResponse2' => 'Le chat',
      'falseResponse3' => 'Le singe',
      'correctResponse' => 'L’être humain',
      'lose' => 0,
      'win' => 0
   ],
   '2' => [
      'titre' => 'Énigme 3',
      'description' => 'Je commence la nuit et fini le matin. Je suis dans la lune et au fond du jardin. Qui suis-je ?',
      'difficulty' => 'easy',
      'falseResponse1' => 'Le ciel',
      'falseResponse2' => 'Une étoile',
      'falseResponse3' => 'Le froid',
      'correctResponse' => 'La lettre N',
      'lose' => 0,
      'win' => 0
   ],
   '3' => [
      'titre' => 'Énigme 4',
      'description' => 'Pour les enfants le noir, elle est souvent source le soir. Mais qu’elle soit bleu ou belle, elle peut donner des ailes. Qui est-elle ?',
      'difficulty' => 'medium',
      'falseResponse1' => 'La nuit',
      'falseResponse2' => 'La lune',
      'falseResponse3' => 'La lumière',
      'correctResponse' => 'La peur',
      'lose' => 0,
      'win' => 0
   ],
   '4' => [
      'titre' => 'Énigme 5',
      'description' => 'Il est le point de départ, sans mener nulle part. Terreur de l’écolier, surtout s’il est pointé. De quoi s’agit-il ?',
      'difficulty' => 'medium',
      'falseResponse1' => 'La punition',
      'falseResponse2' => 'Les parents',
      'falseResponse3' => 'Le doigt',
      'correctResponse' => 'Le nombre 0',
      'lose' => 0,
      'win' => 0
   ],
   '5' => [
      'titre' => 'Énigme 6',
      'description' => 'Combien de temps a duré la guerre la plus courte de l’histoire ?',
      'difficulty' => 'hard',
      'falseResponse1' => '40 heures',
      'falseResponse2' => '40 jours',
      'falseResponse3' => '1 an',
      'correctResponse' => '40 minutes',
      'lose' => 0,
      'win' => 0
   ],
   '6' => [
      'titre' => 'Énigme 7',
      'description' => 'Plus on me remplit, plus je me vide. Qui suis-je ?',
      'difficulty' => 'hard',
      'falseResponse1' => 'L’estomac',
      'falseResponse2' => 'Le porte-monnaie',
      'falseResponse3' => 'Une réserve',
      'correctResponse' => 'Un trou',
      'lose' => 0,
      'win' => 0
   ],
   '7' => [
      'titre' => 'Énigme 8',
      'description' => '3 hommes et une femme entre dans une pièce et ferme la porte. Ils allument la bougie sur leur table, puis se mettent à danser autour de cette dernière. Kes ki fon ?',
      'difficulty' => 'hard',
      'falseResponse1' => 'Un enterrement de vie de garçon',
      'falseResponse2' => 'Un rituel démoniaque',
      'falseResponse3' => 'Ils jouent à Just Dance',
      'correctResponse' => 'La bougie',
      'lose' => 0,
      'win' => 0
   ],
   '8' => [
      'titre' => 'Énigme 9',
      'description' => 'Le serviteur d’un roi a commis une grave erreur et est condamné à mort. Cependant le roi est clément et lui laisse choisir de quelle manière il mourra. Quelle façon de mourir le valet doit-il répondre pour avoir la vie sauve ?',
      'difficulty' => 'hard',
      'falseResponse1' => 'De faim',
      'falseResponse2' => 'De maladie',
      'falseResponse3' => 'De mourir par sa main',
      'correctResponse' => 'De vieillesse',
      'lose' => 0,
      'win' => 0
   ],
   '9' => [
      'titre' => 'Énigme de la dernière (?) affirmation',
      'description' => 'Un aventurier a été capturé par des cannibales qui souhaitent faire de lui leur diner. Cependant ces cannibales n’aiment pas les menteurs et le force à dire une dernière affirmation pour savoir s’ils vont le manger. Si l’affirmation est vrai, l’aventurier sera mangé ; si l’affirmation est fausse il sera jeté aux crocodiles. Dans les deux cas l’aventurier n’a aucune chance de survie et sa seule action possible est de donner une affirmation. Que doit-il répondre pour avoir la vie sauve ?
                                                Affirmation = Je suis une femme/Mon pantalon est bleu/J’aime le chocolat …',
      'difficulty' => 'impossible',
      'falseResponse1' => 'Vous aller me manger vivant',
      'falseResponse2' => 'Je ne suis pas comestible',
      'falseResponse3' => 'Vous ne pouvez légalement pas me manger sans mon accord',
      'correctResponse' => 'Vous allez me jeter aux crocodiles',
      'lose' => 0,
      'win' => 0
   ],
   '10' => [
      'titre' => 'Énigme des chapeaux',
      'description' => 'Alice, Béatrice, Chloé et Dorothée joue à un jeu. Elles sont toutes assises sur des chaises avec un chapeau sur leur tête.
                                             Il y a au total 2 chapeaux blanc et 2 chapeaux noir.
                                             Elles ne peuvent pas parler ou tourner leurs têtes.
                                             Elles peuvent voir la couleur des chapeaux des autres dans leur champ de vision mais pas celui qu’elles portent elles-mêmes.
                                             Un mur sépare Alice des autres, l’empêchant de voir ces dernières et inversement.
                                             Le but du jeu est que l’une d’entre elles (n’importe laquelle) trouve la couleur du chapeau qu’elle porte.
                                             Seule celle qui peut déduire la couleur de son chapeau parlera pour donner la réponse.
                                             Laquelle d’Alice, Béatrice, Chloé ou Dorothée pourra trouver à tous les coups la couleur de son chapeau dans la situation actuelle ?
                                             
                                             
                                             A^ -> || <- B <- C^ <- D
                                             Alice et Chloé portent un chapeau noir (^), Béatrice et Dorothée portent un chapeau blanc (pas de ^).
                                             || représente le mur séparant Alice des autres (elle ne peut pas les voir et inversement).
                                             Alice ne peut regarder que vers la droite. Béatrice, Chloé et Dorothée ne peuvent regarder que vers la gauche.
                                             Alice et Béatrice ne peuvent voir personne. Chloé voit Béatrice alors que Dorothée voit Béatrice et Chloé.',
      'difficulty' => 'impossible',
      'falseResponse1' => 'Alice',
      'falseResponse2' => 'Béatrice',
      'falseResponse3' => 'Dorothée',
      'correctResponse' => 'Chloé',
      'lose' => 0,
      'win' => 0
   ],
   '11' => [
      'titre' => 'Énigme de la porte verrouillée',
      'description' => '3 aventuriers arrivent dans une pièce souterraine, dans les profondeurs d’un temple. La pièce est éclairée seulement par deux torches finement détaillée.
                                                Au fond de la pièce se trouve une porte en fer verrouillé possédent deux serrures. Une instruction est gravée au-dessus de cette dernière : "La lumière est la clé".
                                                Cependant, peut importe le temp passé avec leurs lampes torches braquées sur la porte et ce peut importe l’intensité de ces lampes torches, la porte reste fermée. Pourquoi ?',
      'difficulty' => 'impossible',
      'falseResponse1' => 'La porte ne réagi qu’à la lumière du soleil',
      'falseResponse2' => 'Il faut enflammer la porte',
      'falseResponse3' => 'Il faut fournir de l’électricité à la porte',
      'correctResponse' => 'Les torches sont les clés de la porte',
      'lose' => 0,
      'win' => 0
   ],
];
?>