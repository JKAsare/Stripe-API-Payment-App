<?php 

	 $cost = '$2,460.00';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Home</title>
	
</head>
<body>
	<div class="container px-lg-5 mt-4">
	<div>
	<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="index.php">iZZY-Sell</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="customers.view.php">Customers</a>
				<a class="nav-item nav-link" href="#">About Us</a>
			</div>
		</div>
		</nav>
	</div>
	<!-- navbar ends here --> 
	<br>
	<hr>
	<!-- first card-->
	<div class="card" style="width: 18rem;">
		<img src="/img/apple-iphone-x.jpg" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">iPhone x</h5>
			<p class="card-text">New in sealed box</p>
			<a href="checkout.view.php" class="btn btn-primary">Buy Now</a>
		</div>
	</div>
	<!-- first card ends here -->
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://js.stripe.com/v3/"></script>
	<script src="js/charge.js"></script>
</body>
</html>