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
        $field1 = isset($_POST["field1"]) ? $_POST["field1"] : "";
        $field2 = isset($_POST["field2"]) ? $_POST["field2"] : "";
        $field3 = isset($_POST["field3"]) ? $_POST["field3"] : "";
        // $custdsc = isset($_POST["custdsc"]) ? $_POST["custdsc"] : "";

        // $sql = "INSERT INTO lmi_entrance_exam (trndte, custcde, trntot, recid, custdsc) VALUES ('$trndte', '$custcde', '$trntot', '$recid', '$custdsc')";
        $sql = "INSERT INTO prob5 (field1, field2, field3) VALUES ('$field1', '$field2', '$field3')";

        if ($conn->query($sql) === TRUE) {
            echo "Added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
