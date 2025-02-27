<?php
	function votingAge($age) {
    	if ($age > 17) {
        	echo 'Old enough';
        } else {
        	echo 'Not old enough';
        }
     }
    
    echo votingAge(20);
    echo votingAge(16);
?> 