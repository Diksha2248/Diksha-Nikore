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
    <form action="fiboo.php">
      <input type="number" name="num" placeholder="enter number" >
      <input type="submit" value="submit">
    </form>
    <?php }?>
    <?php
      if($num!=''){
          $nextterm;$n1=0;$n2=1;
          echo "Fiboo Series:";
          for ($i=1; $i < $num; $i++) { 
              echo "$n1";
              $nextterm=$n1+$n2;
              $n1=$n2;
              $n2=$nextterm;
          }
      }
    ?>
</body>
</html>