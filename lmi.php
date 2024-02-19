<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lmi_entrance_exam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve SQL query from POST request
$sqlQuery = $_POST['sqlQuery'];

// Execute the SQL query
$result = $conn->query($sqlQuery);

// Check if the query was successful
if ($result) {
    echo "Query executed successfully. Result:<br>";

    // Display result data
    while ($row = $result->fetch_assoc()) {
        echo json_encode($row) . "<br>";
    }
} else {
    echo "Error executing the query: " . $conn->error;
}

// Close connection
$conn->close();
