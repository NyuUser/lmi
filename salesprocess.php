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
        $trndte = isset($_POST["trndte"]) ? $_POST["trndte"] : "";
        $custcde = isset($_POST["custcde"]) ? $_POST["custcde"] : "";
        $trntot = isset($_POST["trntot"]) ? $_POST["trntot"] : "";
        // $recid = isset($_POST["recid"]) ? $_POST["recid"] : "";
        // $custdsc = isset($_POST["custdsc"]) ? $_POST["custdsc"] : "";

        // $sql = "INSERT INTO lmi_entrance_exam (trndte, custcde, trntot, recid, custdsc) VALUES ('$trndte', '$custcde', '$trntot', '$recid', '$custdsc')";
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
