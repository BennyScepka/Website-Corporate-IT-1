<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

$user = $_REQUEST["author"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// messages won`t be shown after 15 minutes
$sql = "
SELECT author, message
FROM `chat_messages`
WHERE `timestamp` > NOW() - INTERVAL 10 MINUTE
ORDER BY `timestamp`
LIMIT 20
;";

$result = $conn->query($sql);

// rendering out new messages using the appropriate class depending on the author 
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='message-container'>"
            .($row["author"] == $user ? "": "<span class='author'>".$row["author"]." says</span>")."
                <div class='message ".($row["author"] == $user ? "message-user" : "message-partner")."'>
                    <span class='message'>".$row["message"]."</span>
                </div>
              </div>";
    }
}
$conn->close();