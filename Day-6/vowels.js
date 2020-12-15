var twister= `The quick brown fox jumps over the lazy dog`

console.log('The twister is:',twister);


function countVowel(str) { 
    const count = str.match(/[aeiou]/gi).length;
    return count;
}
const result = countVowel(twister);

console.log("Total vowels =",result);


