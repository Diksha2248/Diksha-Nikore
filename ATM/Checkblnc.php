<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
            background-image: url("money2.jpg");
            background-repeat: no-repeat;
            background-size:cover;
            background-position:initial;
            text-align: center;
          }
    </style>
</head>
<body>
    <?$balance=5000;
    ?>
    <form action="Checkblnc.php" method="post">
    <div style="text-align: center;margin-left: 450px; margin-top:150px; background-color: rgb(40, 146, 150);width: 400px;border: solid 3px rgb(37, 37, 129);border-radius: 7px; height: 200px;">
        <h4><? echo "your balance is:$balance /-";?></h4>
    </div>
   </form>
</body>
</html>