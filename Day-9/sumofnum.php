<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num=$_GET['num'];
    if($num==''){
    ?>
    <form action="sumofnum.php" method="get">
     <input type="number" name="num" placeholder="enter number">
     <input type="submit" value="submit">
    </form>
    <?php }?>
    <?php
        $sum=0;
      if($num!='')
      {
          while($num!=0)
          {
          $sum+=$num%10;
          $num=$num/10; 
        }
        echo "sun of digits is:$sum";     
      }
    ?>
</body>
</html>