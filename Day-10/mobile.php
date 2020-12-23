<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Mobile{
        var $brand;
        var $price;
        var $color;
        static $accesssories = array("Charger", "earphones");
     

        function __construct($brand,$price,$color){
         $this->brand=$brand;
         $this->price=$price;
         $this->color=$color;
     
         }
         function __destruct(){
             echo "Thank you , visit again!";
         }
         public function printdetails(){
 
             echo $this->brand."<br>";
             echo $this->price."<br>";
             echo $this->color."<br>";
 
             for($i=0;$i<count(self::$accesssories);$i++){
                 echo " accessories : <br>".mobile::$accesssories[$i]."<br>";
             }
     
         }
        public  function showdiscount($amount){
             return $this->price-$amount;
         }
          
     }
    
     
     $mob=new Mobile("Vivo",17000,"gold");
     $mob->printdetails();
     $mob->showdiscount(500);
 
    $mob1=new Mobile("Oppo",10000,"white");
     $mob1->printdetails();
    $mob1->showdiscount(500);
    
    ?>
</body>
</html>