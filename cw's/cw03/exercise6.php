<?php
    function remove_all($str, $char) {
        for ($i=0; $i<strlen($str); $i++) {
            $newstr = str_replace($char, '', $str);
         return $newstr;
        }
    }

	echo remove_all('Summer is here!', 'e');
?>