<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice 6 partie 3 php</title>
  </head>
  <body>
    <?php
      $age = 25;
      $prenom = 'Victorien';
      $nom = 'HUIBANT';
      function concat($age, $prenom, $nom) {
        return 'Bonjour '.$nom.' '.$prenom.', tu as '.$age.' ans.';
      }
      echo concat($age, $prenom, $nom);
     ?>
  </body>
</html>
