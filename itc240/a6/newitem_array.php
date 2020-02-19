<?php
//Original Array on which operations is to be perform
$numbers = array( '1', '2', '3', '4', '5', '6' );
  
//value of new item
$inserted_value = '42';
  
//value of position at which insertion is to be done
  
$position = 4;
  
//array_splice() function 
  
array_splice( $numbers, $position, 0, $inserted_value ); 
$num_of_items = count($numbers);
$num_count=0;

echo "The array should now contain ";
foreach ($numbers as $number){
    echo $number;
    $num_count = $num_count + 1;
    
    if ($num_count < $num_of_items) {
        echo ", ";
    }
}

?>
