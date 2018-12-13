<?php

$fruits = array("lemon", "orange", "banana", "apple");

// krsort($fruits);
ksort($fruits) ;
var_dump($fruits);
echo "键<br>";


$obj = array('name'=>"lemon",'age'=>18);

foreach ($obj as $key => $val) {
    echo "$key  \n";
}
?>