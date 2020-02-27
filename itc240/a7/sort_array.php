
<?php

$array = array(15,4,-2,22);
echo "Unsorted array: <br>";
echo print_r($array) . "<br>";

$count = count($array);

for ($i = 0; $i < $count; $i++) {
    for ($j = $i + 1; $j < $count; $j++) {
        //compare two numbers
        if ($array[$i] > $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
            $sorted_array = $array;
        }
    }
}

echo "Sorted Array: <br>";
echo print_r($sorted_array);


?>


