<?php
ob_start(); // output buffering
session_start();

date_default_timezone_set("Asia/Yekaterinburg");

try
{
    $con = new PDO("mysql:dbname=tanyanflix;host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e)
{
    exit("Failed to connect: " . $e->getMessage());
}
?>