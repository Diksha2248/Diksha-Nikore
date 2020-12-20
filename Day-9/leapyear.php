<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $year=$_GET['leapyr'];
    if($year==''){
    ?>
    <form action="leapyear.php">
    <input type="datetime" name="leapyr" placeholder="enter year">
    <input type='submit' value="check" name="btn">
   </form>
   <?php }?>
   <?php
    if($year!=''){
    if($year%400==0 || $year%4==0)
    echo "This is leap year";
    else
    echo "This is not leap year";
    }
   ?>
</body>
</html>