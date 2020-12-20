<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $n1=$_GET["n1"];
       $n2=$_GET["n2"];
       $n3=$_GET["n3"];
       if($n1==''&&$n2==''&&$n3==''){
       ?>
    <form action="greaternum.php" method="get">
    <input type="number" name="n1">
    <input type="number" name="n2">
    <input type="number" name="n3">
    <input type="submit" name="btn" value="show">
    </form>
    <?php } ?>
        <?php
         if($n1!=''&&$n2!=''&&$n3!=''){
         if($n1>$n2 && $n1>$n3) 
         echo "$n1 is greater number";
         else if ($n2>$n1 && $n2>$n3)
          echo "$n2 is greater number";
         else
          echo " $n3 is greater number";
         }?>
    
</body>
</html>