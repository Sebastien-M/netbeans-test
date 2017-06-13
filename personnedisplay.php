<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './Personne.php';
        $innom = htmlspecialchars($_POST['nom']);
        $inprenom = htmlspecialchars($_POST['prenom']);
        $inage = htmlspecialchars($_POST['age']);
        $inregion = htmlspecialchars($_POST['region']);
        $personne1 = new Personne($innom, $inprenom, $inage, $inregion);
        echo $personne1;
        ?>
    </body>
</html>
