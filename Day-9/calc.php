<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php
     $num1=$_GET["num1"];
     $num2=$_GET["num2"];
     $op=$_GET["op"];
     if($num1==''&&$op==''&&$num2==''){
    ?>
    <form action="calc.php" method="get">
    <fieldset>
    <legend>MINI CALCULATOR</legend>
    Enter num1:<input type="number" name="num1"><br><br>
    Operator:<input type="operater" name="op"><br><br>
    Enter num2: <input type="number" name="num2"><br><br>
    <input type="submit" name="btn" value="submit">
    </fieldset>
   </form>
   <?php } ?>
    <?php
      if($num1!=''&&$op!=''&&$num2!=''){
       if($op=='+')
       echo $num1+$num2;
       else if($op=='-')
       echo $num1-$num2;
       else if($op=='*')
       echo $num1*$num2;
       else if($op=='/')
       echo $num1/$num2;
       else 
       echo "enter valid operator(+,-,*,/)";
    }
    ?>

</body>
</html>