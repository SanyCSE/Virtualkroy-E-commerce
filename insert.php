<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];

if($mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwd')")){
	echo 'Data inserted';
	echo '<br/>';
}
header ("location:login.php");


$Full_name = $_POST["Full_name"];
$Email = $_POST["Email"];
$Website = $_POST["Website"];
$Message = $_POST["Message"];

/*CREATE TABLE contact(
    ID INT NOT NULL AUTO_INCREMENT, 
    Full_name VARCHAR (30) NOT NULL, 
    Email VARCHAR(25) NOT NULL, 
    Website VARCHAR (25),
    Message VARCHAR(1000) NOT NULL,
    PRIMARY KEY (ID)
    );
 */
    
if($mysqli->query("INSERT INTO contact (Full_name, Email, Website, Message) VALUES ('$Full_name', '$Email', '$Website', '$Message')")){
	echo 'Data inserted';
	echo '<br/>';
}
header ("location:contact.php");


?>
