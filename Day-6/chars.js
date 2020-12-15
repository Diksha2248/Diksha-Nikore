var twister=`Peter Piper picked a peck of pickled peppers
              A peck of pickled peppers Peter Piper picked
             If Peter Piper picked a peck of pickled peppers
             Where's the pick of pickled peppers Peter picked?`

console.log('the twister is --->',twister);
            
 var printOddNums=function(str)
 {
    const count = str.match(/[o]/gi).length;
    return count;
 }    
 console.log("Count of \'o\' =",printOddNums(twister))   ;   
            