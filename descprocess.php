<?php
// Include database connection logic (similar to your main file)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lmi_entrance_exam";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["add"])) {
        // Handle adding
        $custcde = isset($_POST["custcde"]) ? $_POST["custcde"] : "";
        $cusdsc = isset($_POST["cusdsc"]) ? $_POST["cusdsc"] : "";

        $sql = "INSERT INTO customerdesc (custcde, cusdsc) VALUES ('$custcde', '$cusdsc')";

        if ($conn->query($sql) === TRUE) {
            echo "Added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();