<?php

$servername = "localhost";
$username = "root";
$password = ""; // "69oB5dY&j%T";
$dbname = "chat";

$user = $_REQUEST["author"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "
SELECT author, message
FROM `chat_messages`
WHERE `timestamp` > NOW() - INTERVAL 15 MINUTE
ORDER BY `timestamp`
LIMIT 20
;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // echo "Author: " . $row["author"]. " - Message: " . $row["message"]. " " . $row["timestamp"]. "<br>";
        echo "<div class='message-container'>"
            .($row["author"] == $user ? "": "<span class='author'>".$row["author"]." says</span>")."
                <div class='message ".($row["author"] == $user ? "message-user" : "message-partner")."'>
                    <span class='message'>".$row["message"]."</span>
                </div>
              </div>";
    }
}
$conn->close();