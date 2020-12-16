var std1={
    name:"Diksha",
    roll_no:4056
}

var std2={
    name:"shreya",
    roll_no:4055
}

var sum=0;
var showTotal=function(...marks){
        marks.forEach(element => {
          sum=sum+element;
              });
    console.log('I am',this.name,'||my roll_no is:',this.roll_no,'||my total marks :',sum);

 }

 var showHobbies=function(...hobby){
    console.log('I am',this.name,'||my roll_no is:',this.roll_no);
     hobby.forEach(element => {
      console.log('my hobby is :',element);

     });
 }
 
 showTotal.call(std1,80,20,10);
 showTotal.call(std2,70,70,10);
console.log('-----------------------------')
 showHobbies.apply(std1,['readig','music','dance']);
 console.log('-----------------------------')
 showHobbies.apply(std2,['writing','trekking','travelling']);
