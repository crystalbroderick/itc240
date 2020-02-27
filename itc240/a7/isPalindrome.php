<?php

function isPalindrome($str){
    if ($str == strrev($str)){
        return 'true';        
    } else {
        return 'false';
    }
}

echo isPalindrome("radar") . "<br>"; #should return True
echo isPalindrome("cat"); #should return false


?>
