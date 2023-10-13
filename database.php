<?php

$pageTitle = "Contact";
include_once 'head.php';


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kernowmusic";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$value = $_POST['email']; 

// Use prepared statement to insert data (SQL injection protection)
$stmt = $conn->prepare("INSERT INTO emails (email) VALUES (?)");
$stmt->bind_param("s", $value);

if (!$stmt->execute()) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

include 'contact.php';

$stmt->close();
$conn->close();

?>
