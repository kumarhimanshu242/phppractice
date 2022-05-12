<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutuorial</title>
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: auto;
        margin-left: auto;
        margin-right: auto;
    }
    .container {
      max-width: 80%;
      background-color: gray; 
      padding: 25px;
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>Lets learn php</h2>
    this is a container <br>

    <?php
    $age = 34;
    if($age>18){
        echo "You can vote, <br>";
    }
    else{
        echo " You cant vote, <br>";
    }

    // Arrays in php
    $languages = array("python", "php", "node js", "C++");
    echo $languages[1], "<br>";
    echo count($languages);

    // while loop in php
    $a = 0;
    while ($a<=10) {
        echo "<br>The value of a using while loop is:";
        echo $a;
        $a++;
    }

    // iterating arrays in php using while loop
    $a = 0;
    while ($a<count($languages)) {
        echo "<br>The value of language using while loop is: ";
        echo $languages[$a];
        $a++;
    }    
    
    // do while loop in php
    $a = 834;
    do {
        echo "<br>The value of a using do while loop is:";
        echo $a;
        $a++;
    }while ($a<=10);

    // for loop
    $a = 43;
    for ($a=40; $a<43; $a++)
    echo "<br>The vale of a using for loop is: .$a";

    // for each loop
    foreach ($languages as $value){
        echo "<br>The language using foreach loop is: $value";
    }

    //function in php
    function print5() {
        echo "<br>FIVE ";
    }
    print5();

    function print_number($number){
        echo "<br>Your number is: $number";
    }
    print_number(98);
    print_number(78);
    ?>
    </div>
</body>
</html>