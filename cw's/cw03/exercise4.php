<?php
    function word_count($str) {
    	$count = 1;
        for ($i=0; $i<strlen($str); $i++) {
            if ($str[$i] === ' ') {
                $count++;
            }
        }
        echo $count;
    }

    echo word_count('The quick brown fox jumps over the lazy dog');
?>