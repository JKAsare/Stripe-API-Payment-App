<?php

require_once('vendor/autoload.php');
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Customer.php');
require_once('models/Transaction.php');


\Stripe\Stripe::setApiKey('sk_test_Nsz5dllZZBupFqoe7IOYaj9D00kSHuoXc0'); //my server key


//get form data when submitted
//sanitize POST Array

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$name_on_card = $POST['name_on_card'];

$email = $POST['email'];

$token = $POST['stripeToken'];

//echo $token;


//create customer in Stripe 

$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
));

//charge Customer 
$charge = \Stripe\Charge::create(array(
    "amount" => 246000,
    "currency" => "usd",
    "description" => "MacBook Pro",
    "customer" => $customer->id
));

// Customer data
$customerData = [

    'id' => $charge->customer,
    'name_on_card' => $name_on_card,
    'email' => $email

];

// Instantiate customer 
$customer = new Customer();

//Add Customer to BD
$customer->addCustomer($customerData);


// TRANSACTIONS 


// Transaction data
$transactionData = [

    'id' => $charge->id,
    'customer_id' => $charge->customer,
    'product' => $charge->description,
    'amount' => $charge->amount,
    'currency' => $charge->currency,
    'status' => $charge->status

];

// Instantiate transaction
$transaction = new Transaction();

//Add Transaction to BD
$transaction->addTransaction($transactionData);

//redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);







