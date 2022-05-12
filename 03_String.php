<?php
    $str = "This is a string";
    echo $str. "<br>";
    $len = strlen($str);
    // . is a concatination operator
    echo "The length of this string is: ".$len.". Thank you <br>";
    echo "The number of words in this string is: ".str_word_count($str) ;
    echo "<br>The reverse of string is: ".strrev($str);
    echo '<br>The search for \'is\' in string is: '.strpos($str, 'is');
    echo "<br>The replaced string is: ".str_replace("is","at", $str);
?>