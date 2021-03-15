<?php
require './vendor/autoload.php';
PHP_Timer::start();
// your code
$time = PHP_Timer::stop();
var_dump($time);
print PHP_Timer::secondsToTimeString($time);
?>