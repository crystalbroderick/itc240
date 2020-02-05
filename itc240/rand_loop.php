<?php

$count = 1;

//loop 1-10
while ($count <= 10){
    $number = rand(5,7);    //generates random number 5-7
    
    //tells your random number during loop
	if ($count == $number){    
        echo $number.' is your random number. <br>';
		$count ++;
		continue;
	}
	echo $count . '<br>';
	$count ++;
}

?>
