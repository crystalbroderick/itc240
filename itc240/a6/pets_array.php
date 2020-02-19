<?php

//Given the following of pets containing the items ('dog', 'cat', 'fish', 'bird', 'iguana');
//display the following text, pulling the animal types from the pets array. Result: "You can adopt a dog, a cat, or a bird from the animal sanctuary."

//list of pets
$pets = array('dog', 'cat', 'fish', 'bird', 'iguana');

//pulls items from array
echo "You can adopt a $pets[0], a  $pets[1], or a $pets[3] from the animal sanctuary.";

?>