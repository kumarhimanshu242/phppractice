<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>
<body>
    <div class="container">
    This is my first php website <br>

    <?php

    define('pi', 3.14);
    echo "Hello world!! This is printed using php <br>";

    //Single line comment

    /*this 
    is 
    a multiline
    comment*/

    $variable1=24;
    $variable2=453;

    echo "$variable1 <br>" ;
    echo "$variable2 <br>";
    echo "$variable1+$variable2 <br>";


    // Operaters in php
    // Arithmatic operater (+, _, *, /)
    echo "The value of variable1+variable2 is ";
    echo $variable1+$variable2;

    // Assignment operator (=, +=, -=, *=, /=)
    $newvar=$variable1;
    echo "<br>";
    echo $newvar+=1;

    // Comparision operator (==, !=, <=, >=)
    echo "<h2> Compariion operator</h2>";
    echo "this is the boolean value of 1==4  ", "<br>";
    echo var_dump(1==4);

    // Incremnt/ Decrement operator (++, -- )
    echo $variable1++, "<br>";
    echo $variable1--, "<br>";
    echo ++$variable1, "<br>";
    echo --$variable1, "<br>";

    // Logical operator (and &&, or ||, xor, not )
    // $myvar= True and True;
    // $myvar= False and False;
    // $myvar= False and True;
    // $myvar= True and False;

    // $myvar= True or True;
    // $myvar= False or False;
    // $myvar= False and True;
    $myvar= True or False;
    echo "<br>";
    echo var_dump($myvar), "<br>";

    // Datatypes in php
    // 1. String 
    // 2. Integer
    // 3. Float
    // 4. Boolean 
    // 5. Array 
    // 6. Object 
    echo " <h2>Datatypes </h2> ";

    $var = "This is a string";
    echo var_dump($var), "<br>";

    $var = 7854;
    echo var_dump($var), "<br>";

    $var = 4.34 ;
    echo var_dump($var), "<br>";

    $var = true;
    echo var_dump($var), "<br>";

    echo pi, "<br>";
    ?>

    </div>
</body>
</html>


<!-- 
    php is open source scripting
    backened language
    used for security of code
    remains hidden in view page source
    Dynamically typed language: no need to define datatype
    Case insensitive for sintax
-->