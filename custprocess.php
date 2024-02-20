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
        $custcde = isset($_POST["custcde"]) ? $_POST["custcde"] : "";
        $tercde = isset($_POST["tercde"]) ? $_POST["tercde"] : "";
        $cusdsc = isset($_POST["cusdsc"]) ? $_POST["cusdsc"] : "";

        $sql = "INSERT INTO customerfile (custcde, tercde, cusdsc) VALUES ('$custcde', '$tercde', '$cusdsc')";

        if ($conn->query($sql) === TRUE) {
            echo "Added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST["update"])) {
        // Handle updating
        $tercde = $_POST["tercde"];
        $cusdsc = $_POST["cusdsc"];

        $sql = "UPDATE character_file SET tercde='$tercde', cusdsc='$cusdsc' WHERE id='$custcde'";
        if ($conn->query($sql) === TRUE) {
            echo "Character info updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST["delete"])) {
        // Handle deleting
        $id = $_POST["id"];
        $sql = "DELETE FROM character_file WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
            echo "Character info deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Optionally, you can include additional validation or error handling here
}

// Close the database connection
$conn->close();