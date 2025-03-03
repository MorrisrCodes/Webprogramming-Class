<?php
    function countWords($str) {
    	$str = strtolower($str);
        $words = str_word_count($str, 1);
        $wordsArray = array_count_values($words);
        
    	print_r($wordsArray);
    }
    
    countWords("I think that i like PHP");
?>