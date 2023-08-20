<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('.env');
$servername = $_ENV['servername']; 
$username = $_ENV['username'];
$password = $_ENV['password'];
$dbname = $_ENV['dbname'];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("Connection Failed : ".$conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO contact_form(name, email, subject, message) VALUES ('$name','$email','$subject','$message')";

if($conn->query($sql)==TRUE)
{
    echo "Message sent successfully!";
}

else
{
    echo "Error: ".$sql . "<br>" . $conn->error;
}

$conn->close();
}
?>