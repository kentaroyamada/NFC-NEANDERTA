<?php
require'vendor/autoload.php';
$hashids = new Hashids\Hashids('9hrs2etx',8);
$id = $hashids->encode(1);
$numbers = $hashids->decode($id);
echo $id;


?>
