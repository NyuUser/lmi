<?php
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
        $trndte = isset($_POST["trndtw"]) ? $_POST["trndtw"] : "";
        $custcde = isset($_POST["custcde"]) ? $_POST["custcde"] : "";
        $trntot = isset($_POST["trntot"]) ? $_POST["trntot"] : "";

        $sql = "INSERT INTO lmi_entrance_exam (trndte, custcde, trntot) VALUES ('$trndte', '$custcde', '$trntot')";

        if ($conn->query($sql) === TRUE) {
            echo "Added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
