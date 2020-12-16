var showTotal=function(...marks){
    var sum=0;
    return function(){
        marks.forEach(element => {
          sum=sum+element;
              });
        return sum/3;
   }
 }
var avg=showTotal(100,200,300);
console.log(avg());