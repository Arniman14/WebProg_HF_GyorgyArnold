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
        $orszagok = array(" Magyarország " => " Budapest", " Románia" => " Bukarest",
            "Belgium" => "Brussels", "Austria" => "Vienna", "Poland" => "Warsaw");

        foreach ($orszagok as $kulcs => $ertek) {
            print "$kulcs fővárosa $ertek <br>";
        }
        ?>
    </body>
</html>
