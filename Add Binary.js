/**
 * @param {string} a
 * @param {string} b
 * @return {string}
 */
var addBinary = function(a, b) {


//result = BigInt(parseInt(a,2)) + BigInt(parseInt(b,2));

result =  BigInt("0b"+a)+BigInt("0b"+b);
resultString = result.toString(2);


// console.log(parseFloat(result));
//console.log(result);
console.log(result);
console.log(resultString);

return resultString;

};
