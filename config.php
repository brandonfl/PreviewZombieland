<?php
$username = "zombie"; // username
$password = "1~Gpwl69"; // password of the database
$hostname = "localhost"; // host of the database
$namebase = "admin_zombieland"; // name of the database























// Attempt to connect to the database
try
{
    $bdd = new PDO('mysql:host='.$hostname.';dbname='.$namebase.'', $username, $password);
}
catch (Exception $e)
{
    // If an error is thrown, display the message
    die('Erreur : ' . $e->getMessage());
}
?>
