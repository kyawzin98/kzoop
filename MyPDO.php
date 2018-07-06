<?php


try {
    $dbHandle = new PDO("mysql:host=localhost;dbname=test", 'root', 'root');
    $dbHandle->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// always disable emulated prepared statement when using the MySQL driver
    $dbHandle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch(Exception $e) {
    echo $e->getMessage();
}
$STH = $dbHandle->prepare("INSERT INTO car (car) VALUES ('Yeaaap')");
$STH->execute();

$sql = "SELECT * FROM car " ;

foreach ($dbHandle->query($sql) as $row) {

    echo " ID: " . $row['id'] . "<br>";

    echo " Name: " . $row['car'] . "<br>";
}


