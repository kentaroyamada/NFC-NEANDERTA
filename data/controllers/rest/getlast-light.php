<?php

require'vendor/autoload.php';



$username   = "root";
$password   = "9hrs2etx";
$dbname     = "NFC";
$servername = "localhost";


$hashids = new Hashids\Hashids($password,8);


// Create connection
$link =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if($link == false)
{
    die("Connection failed: " . $link->connect_error);
        //echo "connection rerror";
}



$sql = "SELECT MAX( decoded ) as max FROM NFC WHERE type='light';";


if ($result = mysqli_query($link, $sql) ) {
    

    //$result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $maxDecoded = $row['max'];

    
    $nextNum = $maxDecoded + 1;
    $encoded = $hashids->encode($nextNum);
    echo $nextNum ." ". $encoded  ;

} 

else {
    echo "Error: " . $sql . " " . $link->error;
}

$link->close();


?>