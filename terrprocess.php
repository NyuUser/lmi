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
        // $docnum = isset($_POST["docnum"]) ? $_POST["docnum"] : "";
        $tercde = isset($_POST["tercde"]) ? $_POST["tercde"] : "";

        $sql = "INSERT INTO territoryfile (tercde) VALUES ('$tercde')";

        if ($conn->query($sql) === TRUE) {
            echo "Added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    // Optionally, you can include additional validation or error handling here
}

// Close the database connection
$conn->close();
