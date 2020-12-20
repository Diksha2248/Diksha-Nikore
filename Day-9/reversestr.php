<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str=$_GET['str'];
    if($str==''){
    ?>
    <form action="reversestr.php" mathod="get">
       <input type="text" name="str" placeholder="Enter string">
       <input type="submit" value="submit">
    </form>
    <?php }?>

     <?php
     if($str!=''){
       echo "Reverse string of $str is ".strrev($str);
     }
     ?>
</body>
</html>