<?php
require_once('lib/nusoap.php');

//pass server xml data into client 
$c = new nusoap_client('http://localhost/ITG training - Leader-Eng-Khalil/webservices/nusoap/stockserver.php');

//return stock price for fixed symbol of stock from xml that consisit from envelope, faults, child of database column
$stockprice = $c->call('getStockQuote', array(
    'symbol' => 'ABC'
));

echo "The stock price for 'ABC' is $stockprice.";
?>