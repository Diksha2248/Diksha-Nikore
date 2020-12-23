<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class Student{
   private $name;
   private $studentId;
   private $dept;
   private $city;


public function setName($name){
    $this->name=$name;

}
public function setStudId($id){
    $this->studentId=$id;

}
public function setDept($dept){
    $this->dept=$dept;

}
public function setCity($city){
    $this->city=$city;

}
public function getName(){
  echo "STUDENT NAME:   $this->name. <br>";

}
public function getStudId(){
    echo "STUDENT ID:   $this->studentId. <br>";

}
public function getDept(){
    echo "STUDENT DEPARTMENT: 
      $this->dept. <br>";

}
public function getCity(){
    echo "CITY:  $this->city . <br>";

}
public function showGrades($mark1,$mark2,$mark3){
    $avg=($mark1+$mark2+$mark3)/3;
    if($avg>=90){
        echo "Grade A";
    }
    else if($avg>=80 && $avg<90){
        echo "Grade B";
    }
    else if($avg>=70 && $avg<80){
        echo "Grade c";
    }
    else{
        echo "Grade F";
    }

}
}
$stud=new Student();
$stud->setName("DIKSHA");
$stud->getName();
$stud->setStudId('1050');
$stud->getStudId();
$stud->setDept("COMPUTER");
$stud->getDept();
$stud->setCity("PUNE");
$stud->getCity();
$stud->showGrades(90,80,70);
?>
</body>
</html>