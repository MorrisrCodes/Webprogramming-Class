<?php
    function trianlge($size) {
        for ($i=1; $i<$size+1; $i++) {
            for ($j=0; $j!=$i; $j++) {
                echo '*';
            }
            echo '<br>';
        }
    }

    trianlge(5);
?>