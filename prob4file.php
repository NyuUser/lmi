<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lmi_entrance_exam";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS prob4 (
    recid INT AUTO_INCREMENT PRIMARY KEY,
    trndte DATETIME NOT NULL,
    cremon INT NOT NULL,
    creyer INT NOT NULL,
    datetyp VARCHAR(255) NOT NULL
)";
$conn->query($sql);

$sql = "SELECT * FROM prob4";
$result = $conn->query($sql);