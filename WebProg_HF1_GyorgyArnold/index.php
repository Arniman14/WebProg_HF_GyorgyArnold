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
        <table width = "400px" cellspacing = "0px" cellpadding = "0px" border = "1px">
            <?php
            echo "<br>";
            echo "Ma " . date("l");

            echo "<br>";

            $szam1 = 10;
            $szam2 = 2;
            $muvelet = "+";
            if ($muvelet == "/") {
                echo "Osztás végeredménye= " . ($szam1 / $szam2);
            } elseif ($muvelet == "*") {
                echo "Szorzás végeredménye= " . ($szam1 * $szam2);
            } elseif ($muvelet == "+") {
                echo "Összeadás végeredménye= " . ($szam1 + $szam2);
            } elseif ($muvelet == "-") {
                echo "Kivonás végeredménye= " . ($szam1 - $szam2);
            }
            echo "<br>";

            $osztando = 10;
            for ($i = 1; $i <= 10; $i++) {
                echo $osztando . " : " . $i . " = " . ($osztando / $i) . "<br>";
            }
            echo "<br>";



            for ($row = 1; $row <= 8; $row++) {
                echo "<tr>";
                for ($column = 1; $column <= 8; $column++) {
                    $total = $row + $column;
                    if ($total % 2 == 0) {
                        echo "<td height=35px width=30px bgcolor=#FFFFFF></td>";
                    } else {
                        echo "<td height=35px width=30px bgcolor=#000000></td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>
