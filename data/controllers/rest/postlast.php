<?php
require'vendor/autoload.php';


echo "I am a server....";
echo "\n\r";
$nextNum = $_POST['nextNum'];
echo "nextNum=" . $nextNum;
echo "\n\r";


$encoded = $_POST["encoded"];
echo "encoded=". $encoded;
echo "\n\r";





$username   = "root";
$password   = "9hrs2etx";
$dbname     = "NFC";
$servername = "localhost";
$type = "dark";

$ourid = $nextNum;
if ((int)$nextNum > 1000) {
	$ourid = (int)$nextNum - 1000;
	$type = "light";
}



$sql = "INSERT INTO NFC (type, decoded, our_id, tagged, encoded, URL) VALUES ('". $type. "',". $nextNum. "," . $ourid. ", ". "'1', '" . $encoded . "',". "'https://owners.neandertal.co.uk/?id=" .$encoded .  "');";
echo $sql;
echo "\n\r";



$link = new mysqli($servername, $username, $password, $dbname);


// Check linkection
if ($link->linkect_error) {
    die("linkection failed: " . $link->linkect_error);
}


if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
echo "\n\r";
echo "successfully inserted into DB with \n\r decoded=".$nextNum."\n\r encoded=".$encoded;


?>