<?php
require_once 'ShopProduct.php';
require_once 'AddressManager.php';
require_once 'ShopProductWriter.php';

//First Object
//$product1 = new ShopProduct();
//$product1->title = "My Antonia";
//$product1->producerMainName  = "Cather";
//$product1->producerFirstName = "Willa";
//$product1->price = 5.99;
//print "author: {$product1->getProducer()}<br>";



//Object for Constructor
$product1 = new ShopProduct( "My Antonia", "Willa", "Cather", 5.99 );
print "author: {$product1->getProducer()}<br>";


//Object for AddressManager Primitive Types Matter: An Example


$settings = simplexml_load_file("settings.xml");
$manager = new AddressManager();
$manager->outputAddresses( (string)$settings->resolvedomains );
echo "<br>";


//Taking the Hint: Object Types

$product1 = new ShopProduct( "My Antonia", "Willa", "Cather", 5.99 );
$writer = new ShopProductWriter();
$writer->write( $product1 );
