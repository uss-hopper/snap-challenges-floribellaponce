
const names = ['Bob', 'Jim', 'Matt', 'Mary', 'Suzy', ' Sarah'];

names.map(name => {
	let newName = document.createElement("p");
	newName.innerText = "Name - " + name;
	// document.getElementById("names") -- returns element with the id "names
	// .appendChild(newName) -- everything that is already in there add newName
	document.getElementById("names").appendChild(newName)
});