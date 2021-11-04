<?php
$tab_nombre = [200, 204, 173, 98, 171, 404, 459];
foreach($tab_nombre as $nombre ){
        if($nombre%2 == 1)
        echo "$nombre est impaire</br>";
        else {
            echo "$nombre est paire</br>";
        }
}
?>