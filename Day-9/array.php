<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
    $name=$_GET["username"];
    if($name==''){
   ?> 
   <form action="array.php" method="get">
   Enter Username:<input type="text" name='username' placeholder="enter name"><br>
   <input type="submit" name='btn' value="Check">
   </form>
    <?php } ?>
   <?php
   if($name!=''){
    $username=array("sangita","sejal","pratiksha","neha","diksha");
    $flag=false;
    $len=count($username);
    for ($i=0; $i <$len-1 ; $i++) { 
       if($name==$username[$i])
       {
           $flag=true;
           break;
       }
   }
    if($flag==true)
     echo "Welcome $name";
    else
     echo "Wrong User";
    }
   ?> 

</body>
</html>