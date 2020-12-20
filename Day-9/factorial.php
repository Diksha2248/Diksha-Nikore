<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $num=$_GET["num"];
      if($num==''){
    ?>
    <form action="factorial.php" method="get">
     Enter number:<input type="number" name="num">
     <input type="submit" name="btn" value="check fact">
    </form>
    <?php }?>
    <?php
     $fact=1;
     if($num!=''){
      for ($i=1; $i<=$num ; $i++) {
            $fact=$fact*$i;
      }
      echo "factorial of $num is:$fact";
    }
     ?>
</body>
</html>