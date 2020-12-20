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
    <form action="armstrong.php" method='get'>
      <input type="number" name="num" placeholder="enter number">
      <input type="submit" value="check">
    </form>
    <?php }?>
     <?php
     if($num!=''){
      $remainder;
      $result;
      $num1=$num;
      while($num!=0)
      {
          $remainder=$num%10;
          $result+=$remainder*$remainder*$remainder;
          $num=$num/10;
      }
      if($num1==$result)
      echo "$num1 is armstrong number";
      else
      echo "$num1 is not armstrong number";
      }
    ?>
</body>
</html>