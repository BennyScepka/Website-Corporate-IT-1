<?php

$servername = "localhost";
$username = "root";
$password = ""; // "69oB5dY&j%T";
$dbname = "chat";

$_SESSION['$user'] = $_POST["author"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// TODO escape user inputs to avoid SQL Injection
$sql = "
INSERT INTO chat_messages (author, message)
VALUES ('".$_POST["author"]."', '".$_POST["message"]."')
;";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
