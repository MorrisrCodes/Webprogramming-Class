<?php
	function isBitten() {
    	if (rand(0,1) === 1) {
        	return 'True';
        } else {
        	return 'False';
        }
    }
?> 

<html>
    <head>
        <title>Did Charlie bite your finger?</title>
    </head>
    <body>
        <h1>Charlie</h1>
        <p>The statement, "Charlie bit your finger" is <?php echo isBitten();?>.<p>
    </body>
</html>