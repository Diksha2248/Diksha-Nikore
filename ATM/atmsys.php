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
        #mydiv{
            background-color: rgb(21, 160, 21);
            border: solid rgb(243, 243, 93) 3px;
            border-radius: 7px;
            width: 500px;
            height: 400px;
            text-align: center;
            padding: 10px;
            margin-left: 600px;
            margin-top: 60px;
        }
    </style>
</head>
<body>
    <?
     $pin=$_POST["pin"];
     if($pin==""){
     ?>
    <h3 style="color: rgb(243, 243, 93);">ATM SYSTEM</h3>
    <div id="mydiv">
        <form action="atmsys.php" method="post">
          <h3 style="color: rgb(243, 243, 93);">Welcome to ATM</h3>
          <h4 style="color: rgb(82, 54, 22);"">Enter Pin</h4>
          <input type="number" placeholder="Enter 4 digit pin" name="pin"><br><br>
          <input type="submit" value="Enter" name="btn1" onclick="pin()">
          <?}?>
          <?php
      if($pin!='') {
        $len=strlen((string)$pin);
        function pin($len){?>
        <? if ($len==4): ?>
            <div style="text-align: center;margin-left: 450px; margin-top:150px; background-color: rgb(40, 146, 150);width: 400px;border: solid 3px rgb(37, 37, 129);border-radius: 7px; height: 200px;">
            <h3>Select Account Type</h3>
            <a href="saving.php"> <input type="submit" value="Saving Account" name="choice"></a>
            <a href="current.php"> <input type="submit" value="Current Account" name="choice"></a>
            </div>
      <? elseif($len!=4): ?>
         <p>Invalid Pin!</p>
      <? endif; ?>
        <?php } pin($len);
     }?>
     
    </div>
    </form>
</body>
</html>