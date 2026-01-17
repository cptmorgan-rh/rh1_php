<?php
// Database connection settings
$servername = "mysql";  // Usually "localhost" if the database is on the same server
$username = "<replace_me>";         // Replace with your MySQL username
$mysqlPassword = "<replace_me>"; // Get the MySQL password from the environment variable
$dbname = "<replace_me>";      // The database name

// Check if the password environment variable is set
if ($mysqlPassword == false) {
    die("Error: MySQL password environment variable 'MYSQL_PASSWORD' is not set.");
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch the message
$sql = "SELECT content FROM message WHERE id = 4"; // Assuming only one message in the table
$result = $conn->query($sql);

// Check if the message exists
if ($result->num_rows > 0) {
    // Output the message
    while($row = $result->fetch_assoc()) {
        echo "" . $row["content"] . "";
    }
} else {
    echo "No message found.";
}

// Close connection
$conn->close();
?>
