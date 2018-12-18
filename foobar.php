<?php

$output = "";

for ($i = 1; $i <= 100; $i++){

    if ($i % 3 == 0){
        $output .= "foo";
        if ($i % 5 == 0){
            $output .= "bar, ";
        }else{
            $output .= ", ";
        }
    } elseif ($i % 5 == 0){
        $output .= "bar, ";
    }else {
        $output .= $i;
        $output .= ", ";
    }

}

echo $output;

?>