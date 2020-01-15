<h1 class="my-4 text">Checkout</h1>
		<div class="row mx-lg-n5">
		<div class="col py-3 px-lg-5 border bg-light">
			<h3><i class="fa fa-shopping-cart" style="font-size:36px"></i></h3>
				<h4 class="my-4 text">Total: <?= $cost; ?></h4>
			</div>
			<div class="col py-3 px-lg-5 border bg-light">
			<h2 class="my-4 text">MacBook Pro [<?= $cost; ?>]</h2>
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
			<!-- form ends here -->
			</div>
			
		</div>
	</div> 