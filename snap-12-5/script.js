const onPageLoad = () => {
	//then is being used so it can wait until the page is loaded
	axios.get('https://dog.ceo/api/breeds/list/all').then(({data}) => {
		// data is the api information
		let breeds = data.message;
		//leave empty incase api fails
		let cards = '';
		// for each breed string in breeds get it as a string and we will do something with it
		for (let breed in breeds) {
			//create the card with the breed that will be held in a div
			cards = cards +'<div>' + breed + '</div>';
		}
		// grab from html
		let html = document.getElementById("target");
		//html is the element and html string is the cards
		html.innerHTML = cards;
	});
}