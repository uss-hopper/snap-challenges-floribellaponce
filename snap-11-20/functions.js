const numbers = [1, 2, 3, 4, 1, 2, 3, 4, 1, 2, 3, 4, 1]

/* this numbers are iterated over and if a number is not included in the empty object passed as the second
parameter to the reduce function, it created an object with the key as the number and the count is set to 1.
IF the number is already present in the object, it increments the number of times that name
is seen in the string until the whole array's been accounted for *?
 */
const countedNumbers = numbers.reduce((allNumbers, number) =>{
	if(number in allNumbers){
		allNumbers[number]++;
	}else {
		allNumbers[number] = 1;
	}
	return allNumbers;
}, {});


console.log(countedNumbers);

