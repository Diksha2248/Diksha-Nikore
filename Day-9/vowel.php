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
       <form action="vowel.php" method="get">
        <textarea name="str"  cols="30" rows="10"></textarea><br>
        <input type="submit" value="submit">
        </form>
    <?php } ?>
    <?php
      if($str!=''){
           function Countvowels($str){
            $count=0;
            for($i=0; $i<=strlen($str);$i++){
            if($str[$i]=="a" ||$str[$i]=="e" ||$str[$i]=="i" ||$str[$i]=="o" ||$text[$i]=="u"||
            $str[$i]=="A" ||$str[$i]=="E" ||$str[$i]=="I" ||$str[$i]=="O" ||$str[$i]=="U"){
            $count++;
            }
        }
        return $count;    
    }
    $totalvowels=Countvowels($str);
    echo("Total vowels: $totalvowels");
  }
   ?>    
</body>
</html>