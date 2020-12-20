<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
      $climate=$_GET['climate'];
     ?>
    
    <form action="climate.php" method="get">
      <select name="climate" id="season">
      <option value="select">--select--</option>
      <option value="sunny">Sunny</option>
      <option value="rainy">Rainy</option>
      <option value="windy">Windy</option>
      <option value="cold">Cold</option>
       </select>
      <input type="submit" name="btn" value="suggestion">
    </form>
    <?php
      switch($climate)
      {
          case 'sunny':
            echo "Weather is sunny,take cold drink,keep sun glasses with you and stay cool";
            break;
          case 'rainy':
            echo "weather is rainy,keep umbrella with you and u can take hot tea";
            break;
          case 'windy':
            echo "weather is windy";
            break;
          case 'cold':
            echo "weather is cold,wear warm cloths";
            break;
          default:
             echo "please select weather";
         }
    ?>
</body>
</html>