<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'itechnotion';

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) 
{
    echo "database not connected..!";
}
