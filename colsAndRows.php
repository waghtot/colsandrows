<?php
//this example can be executed through cli
//go to file directory and run command:
//php -f colsandrows.php
//hit enter
//make sure that initial $string value have been set.

$string = '';


if(isset($string) && !empty($string)){

    echo "Cols and rows to process: ".$string."\n";

    $string = addSeparator($string); //selecting substring made out of characters and adding dot as a separator
    $string = replaceCharacterWithDigit($string); //repracing all characters with numbers

    echo "Your result: ".$string."\n"; //displaying result as numbers dot separeted (ADS320 => 1419.320)
}else{
    echo $string." can't be empty \n";
}

function addSeparator($string)
{
    preg_match('/^\D*(?=\d)/', $string, $m);
    return isset($m[0]) ? str_replace($m[0], $m[0].'.', $string) : false;
}

function replaceCharacterWithDigit($string)
{
    $characters = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
    $numbers = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26");
    return str_replace($characters, $numbers, strtoupper($string)); //replacing character with numbers
}
