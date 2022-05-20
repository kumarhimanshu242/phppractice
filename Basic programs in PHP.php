<?php error_reporting (E_ALL ^ E_NOTICE);?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fabonacci</title>
</head>
<body>
    <h2>Fabonacci series using while loop</h2>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
        <label>
        Enter number of terms : <input type="number" name="fabo">
    </label>
        <input type="submit" value="Submit" name="submit1">
    </form>

    <?php 
    $a=0;
    $b=1;
    $count=3;
    $fabo=$_POST["fabo"];

    
    if(isset($_POST["submit1"])){
        echo $a.", ".$b.", ";

        while($count<=$fabo){
            $c = $a+$b;
            echo $c.", ";

            $a=$b;
            $b=$c;
            $count++;
        }
    }
    ?>

    <hr>

    <h2>Fabonacci series using for loop</h2>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
        <label>
        Enter number of terms : <input type="number" name="fab">
    </label>
        <input type="submit" value="Submit"  name="Submit2">
    </form>

    <?php
    $d=0;
    $e=1;
    $fab=$_POST['fab'];
    if(isset($_POST['Submit2']))
    {
        echo $d.",".$e;

        for($i=3;$i<=$fab;$i++)
        {
            echo ",";

            $f = $d+$e;

            echo $f;

            $d=$e;
            $e=$f;
        }

    }

    ?>

    <hr>

    <h2>Prime No.</h2>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
        <label>
        Enter number : <input type="number" name="prime">
    </label>
        <input type="submit" value="Submit" name="Submit3">
    </form>

    <?php 
    $prime=$_POST['prime'];
    $count=0;
    if(isset($_POST['Submit3']))
    {
        for($i=1;$i<=$prime;$i++)
        {
            if($prime % $i == 0)
            {
                $count++;
            }
        }

    
        if($count == 2)
        {
            echo "$prime, is a prime no";
        }
        else
        {
            echo "$prime, is not a prime no";
        }
    }
    ?>

    <hr>

    <h2>Factors</h2>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
        <label>
        Enter number : <input type="number" name="fact">
    </label>
        <input type="submit" value="Submit" name="Submit4">
    </form>

    <?php 
    $fact=$_POST['fact'];
    if(isset($_POST['Submit4']))
    {
        echo "factors are:-";
        for($i=1;$i<$fact;$i++)
        {
            if($fact % $i == 0)
            {
                echo "$i".",";
            }
        }

    }
    ?>

    <hr>

    <h2>Factorial of a number</h2>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
        <label>
        Enter number : <input type="number" name="facto">
    </label>
        <input type="submit" value="Submit" name="Submit5">
    </form>

    <?php 
    $facto=$_POST['facto'];
    $m=1;
    if(isset($_POST['Submit5']))
    {
       for ($i=1; $i<=$facto; $i++)
       {
           $m = $m*$i;
       }
    echo "Factorial of $facto is $m";

    }
    ?>

    <hr>

    <h2>Palindrome Number</h2>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
        <label>
        Enter number : <input type="number" name="palin">
    </label>
        <input type="submit" value="Submit" name="Submit6">
    </form>

    <?php 
    $palin=$_POST['palin'];
    $sample=$palin;
    $sum=0;
    
    if(isset($_POST['Submit6']))
    {
       while($palin!=0)
    {
        $x=$palin%10;
        $sum=$sum*10+$x;
        $palin=floor($palin/10);
    }
    if($sample==$sum)
    {
        echo " $sample is palindrome";
    }
    else
    {
        echo "$sample is not palindrome";
    }
    }
    ?>
    <hr>

    <h2>Perfect square</h2>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
        <label>
        Enter number(Himanshu) : <input type="number" name="squr">
    </label>
        <input type="submit" value="Submit" name="Submit7">
    </form>

    <?php 
    $squr=$_POST["squr"];
    $samp=True;
    if(isset($_POST['Submit7']))
    {
        for($i=1;$i<$squr;$i++){
            $n=$squr/$i;
            if ($n==$i){
                echo "$squr is a perfect squre of $i";
                $samp=FALSE;
                break;
            }
        }
        if($samp){
            echo "$squr is not a perfect squre";
        }
        
    }
    ?>

    <!-- <hr>

    <h2>Perfect square Number</h2>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
        <label>
        Enter number(anmol) : <input type="number" name="sqr">
    </label>
        <input type="submit" value="Submit" name="Submit8">
    </form> -->

    <?php 
    // $sqr=$_POST['sqr'];
    // $count=0;
    
    // if(isset($_POST['Submit8']))
    // {
    //   for($i=1; $i<$sqr; $i++)
    //   {
    //       if($sqr % $i == 0)
    //       {
    //           $chk=$i*$i;
    //           if($chk == $srq)
    //           {
    //                 $count++;
    //                 echo "$sqr is perfect square of $i";
    //               break;
    //           }

    //       }
    //   }
    //   if($count == 0){
    //       echo "$sqr is not perfect square.";
    //   }
    // }
    ?>
    
    <hr>

    <h2>Leap year</h2>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
        <label>
        Enter number: <input type="number" name="leapy">
    </label>
        <input type="submit" value="Submit" name="Submit9">
    </form>

    <?php 
    $leapy=$_POST["leapy"];


    if(isset($_POST['Submit9']))
    {
        if((($leapy % 4 == 0) and ($leapy % 100 != 0)) or (($leapy % 400 == 0) and ($leapy % 100 == 0)))
        {
            echo "$leapy is a leap year.";
        }
        else{
            echo "$leapy is not a leap year.";
        }
    }
    ?>



</body>
</html>