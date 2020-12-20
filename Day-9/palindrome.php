<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
      $str=$_GET["str"];
      if($str==''){
    ?>
    <form action="palindrome.php" method="get">
     Enter String:<input type="text" name="str" placeholder="enter string">
     <input type="submit" name="btn" value="check">
    </form>
    <?php }?>
    <?php
       if($str!=''){
           if($str==strrev($str))
           {
           echo "$str is palindrome";
           }
           else
           {
           echo "$str is not palindrome";}
       }
    ?>
</body>
</html>