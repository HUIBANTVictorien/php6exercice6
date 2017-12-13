<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice 6 partie 5 php</title>
  </head>
  <body>
    <a href="index.php?batiment=12&amp;salle=101">Lieu</a>
    <?php
    if (isset($_GET['batiment']) && ($_GET['salle'])) {
    echo 'Nous sommes dans le batiment : ' . $_GET['batiment'] . ' Dans la salle : ' . $_GET['salle'];
  } else {
    echo 'Cliquez sur le lien pour afficher les informations !';
  };
     ?>
  </body>
</html>
