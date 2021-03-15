<?php
/**
 * Configuration for database connection
 *
 */
$host       = "localhost";
$username   = "root";
$password   = "9hrs2etx";
$dbname     = "NFC";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );