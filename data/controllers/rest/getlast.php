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

// This will give the part of the URL after the script path,
// e.g. /getlast.php/dark/ will return "dark"
$type = pathinfo($_SERVER["REQUEST_URI"])["basename"];

$sql = "SELECT p2.id, MAX(our_id) as max FROM tags";
$sql .= " INNER JOIN products p1 ON (product_id = p1.id)";
$sql .= " INNER JOIN products p2 ON (p2.type = '" . $type . "') GROUP BY p2.id;";

// THIS IS IF our_id can/should be repeated (i.e. not unique as before)
//$sql = "SELECT p.id, COALESCE(MAX(t.our_id), 1) AS max FROM products p";
//$sql .= " LEFT JOIN tags t on (p.id = t.product_id)";
//$sql .= " WHERE p.type = '" . $type . "' GROUP BY p.id;";

if ($result = mysqli_query($link, $sql) ) {

    if (mysqli_num_rows($result) > 0) {

      //$result = mysqli_query($link, $sql);
      $row = mysqli_fetch_assoc($result);
      $productId = $row['id'];
      $maxDecoded = $row['max'];


      $nextNum = array($productId, $maxDecoded + 1);
      $encoded = $hashids->encode($nextNum);
      echo $nextNum[0] . "/" . $nextNum[1] ." ". $encoded  ;

    } else {
      echo "Error: No Results for '" . $type . "'";
    }

}

else {
    echo "Error: " . $sql . " " . $link->error;
}

$link->close();


?>
