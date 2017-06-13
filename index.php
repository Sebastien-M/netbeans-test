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
        include_once './Chien.php';
        $chien1 = new Chien('nomChien1','race01','20/08/1620','vert');
        //foreach ($chien1 as $key=>$value){
        //    echo $key." : ".$value."<br/>";
        //    }
        $chien1->aboyer();
        echo $chien1;
        
        include_once './Compte.php';
        echo "<br/><br/><br/>";
        
        $compte = new compte();
        echo $compte->getSolde();
        ?>
    </body>
</html>
