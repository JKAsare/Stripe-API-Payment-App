<?php 

	 $cost = '$3.70';
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
	<title>Checkout</title>
	
</head>
<body>
	<div class="container px-lg-5 mt-4">
		<h1 class="my-4 text">Checkout</h1>
		<div class="row mx-lg-n5">
		<div class="col py-3 px-lg-5 border bg-light">
			<h3><i class="fa fa-shopping-cart" style="font-size:36px"></i></h3>
            <ol><li class="my-4 text">Paracetamol <b>[<?= $cost; ?>]</b></li><ol>
			<h4 class="my-4 text">Total: <?= $cost; ?></h4>
		</div>
			<div class="col py-3 px-lg-5 border bg-light">
			
			<!-- form -->
			<form action="./charge.php" method="post" id="payment-form">
			<div class="form-row">
				<input type="text" name="name_on_card" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Name on card">
				<input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email address">

				<label for="card-element">
				Credit or debit card
				</label>
				<div id="card-element" class="form-control">
				<!-- A Stripe Element will be inserted here. -->
				</div>

				<!-- Used to display form errors. -->
				<div id="card-errors" role="alert"></div>
			</div>
				<button>Pay</button>
			</form>
			</div>
			<!-- second box -->
			
		</div>
        <p><a href="index.php" class="btn btn-primary mt-2">Go Back</a></p>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://js.stripe.com/v3/"></script>
	<script src="js/charge.js"></script>
</body>
</html>