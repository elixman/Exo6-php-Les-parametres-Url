<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <a href= index.php?nom=index.php?batiment=12&salle=101></a>
  <title>Exo5-php-Les-fonctions</title>
</head>
<body>

  <p>##Exercice 1</p>
    <p> href= index.php?nom=Nemare&prenom=Jean></p>
    <p>http://localhost:8888/html/php/Exo6-php-Les-parametres-Url/index.php?nom=Nemare&prenom=Jean</p>

      <?php
        echo $_GET['nom'];
        echo "<br>",$_GET['prenom'];
      ?>

  <p>##Exercice 2</p>
    <p>href= index.php?nom=Nemare&prenom=Jean&age=30</p>
    <p>http://localhost:8888/html/php/Exo6-php-Les-parametres-Url/index.php?nom=Nemare&prenom=Jean&age=30</p>
      <?php
        echo $_GET['nom'];
        echo "<br>",$_GET['prenom'];
        echo "<br>",$_GET['age'];
      ?>

  <p>##Exercice 3</p>
    <p>href= index.php?dateDebut=2/05/2016&dateFin=27/11/2016</p>
    <p>http://localhost:8888/html/php/Exo6-php-Les-parametres-Url/index.php?dateDebut=2/05/2016&dateFin=27/11/2016</p>
      <?php
        echo $_GET['dateDebut'];
        echo "<br>",$_GET['dateFin'];
      ?>

  <p>##Exercice 4</p>
    <p>href= index.php?langage=PHP&serveur=LAMP</p>
    <p>http://localhost:8888/html/php/Exo6-php-Les-parametres-Url/index.php?langage=PHP&serveur=LAMP</p>
      <?php
        echo $_GET['langage'];
        echo "<br>",$_GET['serveur'];
      ?>

  <p>##Exercice 5</p>
    <p>href= index.php?semaine=12</p>
    <p>http://localhost:8888/html/php/Exo6-php-Les-parametres-Url/index.php?semaine=12</p>
      <?php
        echo $_GET['semaine'];
      ?>

  <p>##Exercice 6</p>
    <p>index.php?batiment=12&salle=101</p>
    <p>http://localhost:8888/html/php/Exo6-php-Les-parametres-Url/index.php?batiment=12&salle=101</p>
      <?php
        echo $_GET['semaine'];
      ?>

</body> 
</html>
