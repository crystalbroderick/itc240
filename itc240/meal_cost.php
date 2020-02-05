<?php

$cost = 40;
//calculate variables
$tip = $cost * .15;
$tax = $cost * .08;
$total = $cost + $tip + $tax;

//apply currency formatting to dollar
$cost_f = "$".number_format($cost, 2);
$tip_f = "$".number_format($tip, 2);
$tax_f = "$".number_format($tax, 2);
$total_f = "$".number_format($total, 2);

//print formatted cost, tip, tax, and total
echo "Meal cost: " . ($cost_f);
echo "<br> Tip: " . ($tip_f);
echo "<br> Tax: " . ($tax_f);
echo "<br> Total: " . ($total_f);
echo "<br>";

//States if good price or not
if(!is_numeric($cost) || $cost < 0){
    echo 'Is this even a number?';
} else if ($total < 20){
    echo 'Good Price';
} else if ($total > 20 && $total < 40){
    echo 'Resonably Priced';
} else if ($total > 40){
    echo 'This is pricey';
}

?>