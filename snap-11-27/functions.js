// this is a callback function. A callback function is a function to execute on each element
// in the array (ecep for the first, if no initialValue is supplied), taking four arguments:
// accumulator, currentValue, index, and array


const numbers = [1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584,
	4181, 6765, 10946, 17711, 28657, 46368, 75025, 121393, 196418, 317811];

const reducer = (accumulator, currentValue) => accumulator + currentValue;

console.log(numbers.reduce(reducer));

// This is the sum function
let sum = numbers.reduce(function(accumulator, currentValue) {
	return accumulator + currentValue;
});
console.log(sum);


const words = ["Deflector", "power", "at", "maximum.", "Energy", "discharge", "in", "six", "seconds.", "Warp", "reactor", "core",
	"primary", "coolant", "failure.", "Fluctuate", "phaser", "resonance", "frequencies.", "Resistance", "is", "futile.",
	"Recommend", "we", "adjust", "shield", "harmonics", "to", "the", "upper", "EM", "band", "when", "proceeding.",
	"These", "appear", "to", "be", "some", "kind", "of", "power-wave-guide", "conduits", "which", "allow", "them", "to",
	"work", "collectively", "as", "they", "perform", "ship", "functions.", "Increase", "deflector", "modulation", "to",
	"upper", "frequency", "band."];

let reducers = (accumulator, currentValue) => accumulator + " " + currentValue;

console.log(words.reduce(reducers));

// This is the string function
let sentence = words.reduce(function(accumulator, currentValue) {
	return accumulator + " " + currentValue;
});
console.log(sentence);