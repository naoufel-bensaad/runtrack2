<?php
    $nombre = 0;
    $str = "La Plateforme";
    while ($nombre < 100) {
        $nombre++;
        echo"-";


        if ($nombre <= 20) {
            echo "<i>$nombre</i> </br>";
        }


        else if ($nombre >= 25 && $nombre <= 50 && $nombre != 42) {
            echo " <u> $nombre </u> </br>";
        }


        else if($nombre == 42)
        {
            echo "$str </br>";
        }


        else{
            echo "$nombre </br>";
        }

        
    }


    ?>