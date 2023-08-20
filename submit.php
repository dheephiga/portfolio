<?php

$servername = "localhost";
$username = "";
$password = "";
$dbname = "htmldata";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("Connection Failed : ".$conn->connect_error);
}

$name = $_POST['name']''
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];