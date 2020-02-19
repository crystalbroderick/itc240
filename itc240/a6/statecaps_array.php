<?php
//State and capital array
$statecaps = array("Washington" => "Olympia", "Oregon" => "Salem", "California" => "Sacramento", "Alaska" => "Juneau", "Hawaii" => "Honolulu", "Idaho" => "Boise", "Nevada" => "Carson City", "Arizona" => "Phoenix");

//Sort by capital(array value)
asort($statecaps);

//Display the state and state capital
foreach($statecaps as $state => $caps)
    echo $caps . ", " . $state . "<br>";    //Capital, State

?>