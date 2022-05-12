

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP pograms</title>
    <style>
        .container {
            background-color: pink;
        }
    </style>
</head>
<body>
    <div class="container">

    <!-- Fibonacci Series in PHP -->
        <h2><u>Fibonacci Series in PHP</u></h2>
        <form method="post">
            Enter number of terms for Fibonacci series <input type="number" name="fibo"/>
            <input type="submit">
        </form>
        
        <?php error_reporting (E_ALL ^ E_NOTICE);
            $a=0;
            $b=1;
            $count=3;
            $fibo=$_POST["fibo"];
            echo "Fibonacci series: ";
            echo $a.", " .$b.", ";
            while ($count<=$fibo) {
                
                $c=$a+$b;
                echo $c. ", ";

                $a=$b;
                $b=$c;
                $count++;
            }
        ?>

        <!-- Prime number -->
        <h2><u>Prime number</u></h2>
        <form method="post">
            Enter number to check prime number: <input type="number" name="prime"/> 
            <input type="submit">
        </form>
        
        <?php error_reporting (E_ALL ^ E_NOTICE);
            $prime=$_POST["prime"];
            for ($i=2; $i<$prime;$i++){
                if($prime%$i==0){
                echo "<h3>$prime is not a prime number.</h3>";
                break;
                }
                else {
                    echo "<h3>$prime is a prime number.</h3>";
                    break;
                }
            }

        ?>

        <!-- Armstrong Number -->
        <h2><u>Armstrong Number</u></h2>
        <form method="post">
            Enter number of terms: <input type="number" name="arm"> 
            <input type="submit"><br>
        </form>
        <?php error_reporting (E_ALL ^ E_NOTICE);
            $arm=$_POST["arm"];
            $sum=0;
            $f=0;
            $x=$arm;
            while($x!=0){
                $r=$x%10;
                $sum=$sum+$r**3;
                $x=$x/10;
            }
            if ($arm==$sum){
                echo "<h3>$arm is a armstrong number.</h3>";
            }
            else{
                echo "<h3> $arm is not a armstrong number.</h3>";
            }
        ?>

        <!-- Factorial of a number -->
        <h2><u>Factorial of a number</u></h2>
        <form method="post">
            
            Enter a number to find the factorial: <input type="number" name="fact" >
            <input type="submit">
        </form>
        <?php error_reporting (E_ALL ^ E_NOTICE);
            $fact=$_POST["fact"];
            $m=1;
            for($y=1;$y<=$fact;$y++){
                $m=$m*$y;
            }
            echo "<h3>Factorial of $fact is $m. </h3>";
        ?>

        <!-- Palindrome number -->
        <h2><u>Palindrome Number</u></h2>
        <form method="post">
            Enter a number to check Palindrome: <input type="number" name="palin">
            <input type="submit">
        </form>
        <?php error_reporting (E_ALL ^ E_NOTICE);
            $palin=$_POST["palin"];
            // $rem=0;
            $p=$palin;
            $t=0;
            while(floor($p)){
                $rem=$p%10;
                $t=($t*10)+$rem;
                $rem=$rem/10;
            }
            return $sum;
            echo $t;
            if ($palin==$t){
                echo "<h3>$palin is a Palindrome number.</h3>";
            }
            else{
                echo "<h3> $palin is not a Palindrome number.</h3>";
            }
        ?>
    </div>
</body>
</html>