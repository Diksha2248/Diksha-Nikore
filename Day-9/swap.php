<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n1=$_GET['n1'];
    if($n1==''){
    ?>
    <form action="swap.php" method="get">
    <input type="text" name="n1">
    <input type="submit" value="submit">
    </form>
    <?php }?>
    <?php
    if($n1!='')
    {
        echo "After Swapping:".strrev($n1);
    }
    ?>
</body>
</html>