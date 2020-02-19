<?php
//Given an array of week’s temperatures containing the items 32, 47, 55, 30, 42, 39, 45, calculate and display the average temperature as well as display the lowest and highest temperature in the week.

//weekly temperatures
$temps = array(32, 47, 55, 30, 42, 39, 45);

//calculate average temperature 
//Rounded
$tempavg = round(array_sum($temps) / count($temps), 1);

//display average
echo "Average: $tempavg <br>";

//find lowest temperature
$low_temp = min($temps);

//display lowest temperature
echo "Lowest: $low_temp <br>";

//find highest temperature
$high_temp = max($temps);

//display highest temperature
echo "Highest: $high_temp";
?>