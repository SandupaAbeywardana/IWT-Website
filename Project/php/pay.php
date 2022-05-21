<?php
require_once('config.php');
\Stripe\Stripe::setApiKey('____YOUR_STRIPE_SECRET_KEY____');
$token = $_POST['stripeToken'];
// This is a $20.00 charge in US Dollar.
$charge = \Stripe\Charge::create(
    array(
        'amount' => 2000,
        'currency' => 'usd',
        'source' => $token
    )
);
print_r($charge);
?>