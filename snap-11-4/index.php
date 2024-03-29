<!DOCTYPE>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- stylesheet from bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- jQueries for bootstrap -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- site title -->
	<title> Snap bootstrap challenge </title>
</head>
<body>
<header class="navbar navbar-expand-lg navbar-dark bg-primary">
	<a class="navbar-brand" href="#">
		<img src="images/1.jpg" alt="dog logo" style="width: 64px; height:64px">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto" >
			<li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Option 1</a>
					<a class="dropdown-item" href="#">Option 2</a>
					<a class="dropdown-item" href="#">Option 3</a>
				</div>
			</li>
		</ul>
	</div>
</header>
<br>
<main>
	<div class="container-fluid">
		<div class="card-deck">
			<div class="card border-light mb-5">
				<div class="card-header"> card header 1 </div>
				<div class="card-body">
					<p class="card-text">This is the card that is suppose to hold text for this site. This card will have a paragraph explaining something for the site. </p>
				</div>
			</div>
			<div class="card border-primary mb-5">
				<div class="card-header"> card header 2 </div>
				<div class="card-body">
					<p class="card-text">This is the card that is suppose to hold text for this site. This card will have a paragraph explaining something for the site. </p>
				</div>
			</div>
			<div class="card border-danger mb-5">
				<div class="card-header"> card header 3 </div>
				<div class="card-body">
					<p class="card-text">This is the card that is suppose to hold text for this site. This card will have a paragraph explaining something for the site. </p>
				</div>
			</div>
			<div class="card border-warning mb-5">
				<div class="card-header"> card header 4 </div>
				<div class="card-body">
					<p class="card-text">This is the card that is suppose to hold text for this site. This card will have a paragraph explaining something for the site. </p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4">
				<p>This is a paragraph place holder. This section should include a paragraph containing useful infromation needed
				for the site for users to see. This paragraph will be side by side other paragraphs but will be stacked on top of each
				other in mobile view.</p>
			</div>
			<div class="col-lg-4">
				<p>This is a paragraph place holder. This section should include a paragraph containing useful infromation needed
					for the site for users to see. This paragraph will be side by side other paragraphs but will be stacked on top of each
					other in mobile view.</p>
			</div>
			<div class="col-lg-4">
				<p>This is a paragraph place holder. This section should include a paragraph containing useful infromation needed
					for the site for users to see. This paragraph will be side by side other paragraphs but will be stacked on top of each
					other in mobile view.</p>
			</div>
		</div>
	</div>
</main>
</body>
</html>