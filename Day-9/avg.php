<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $sum=$_GET["sum"];
     $avg=$_GET["avg"];
     $m1=$_GET["m1"];
     $m2=$_GET["m2"];
     $m3=$_GET["m3"];

     if($m1==''&&$m2==''&&$m3==''){
    ?>
    <form action="avg.php" method="get">
    enter mark1: <input type="number" name="m1">
    enter mark2: <input type="number" name="m2">
    enter mark3: <input type="number" name="m3">
    <input type="submit" name="btn">
    </form>
    <?php }?>

    <?php
       if($m1!=''&&$m2!=''&&$m3!=''){
       $sum=$m1+$m2+$m3;
       echo "sum of marks:$sum<br>";
       $avg=$sum/3;
       echo "average is:$avg<br>";
       if($avg>90)
       echo " A+ Grade";
       else if($avg>=80 || $avg<=90)
       echo "B Grade";
       else if($avg>=70 || $avg<=80)
       echo "C Grade";
       else
       echo "F Grade";
       }
    ?>
</body>
</html>