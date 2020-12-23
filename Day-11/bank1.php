<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   class Account{ 
       var $balance=5000;
      
      function ___construct($balance){
          $this->balance=$balance;
      }
      public function withdraw($amount){
          $this->balance-$amount;
      }
      public function deposite($amount){
          $this->balance+$amount;
      }
      public function getBalance(){
          echo "your current balance is:",$this->balance,"<br>";
      }
   }
   class Savings extends Account{
   
    public function withdraw( $amount){
        echo "<b>-------------------Saving Account---------------</b><br>";

        echo "withdrawal amount:", $amount,"<br>";
        echo "ramaining balance  :", ($this->balance-$amount),"<br>";
    }
    public function deposite($amount){
        echo "deposite is : ",($this->balance+$amount),"<br>"; 
    }

   } 

   class Current extends Account{
  
    public function withdraw( $amount){
        echo "-------------------Current Account---------------<br>";

        echo "withdrawal amount : ",$amount,"<br>";
        echo "ramaining balance:",($this->balance-$amount ),"<br>";
    }
    public function deposite($amount){
        echo "deposite is:",($this->balance-$amount)+$amount,"<br>"; 
    }
   }

   $acc=new Savings();
   $acc->getBalance();

   $acc->withdraw(1000);
   $acc->deposite(500);

   $acc=new Current();
   $acc->withdraw(1000);
   $acc->deposite(100);
   ?>
</body>
</html>