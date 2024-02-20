<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lmi_entrance_exam";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS prob5 (
    recid INT AUTO_INCREMENT PRIMARY KEY,
    field1 VARCHAR(255) NOT NULL,
    field2 VARCHAR(255) NOT NULL,
    field3 VARCHAR(255) NOT NULL
)";
$conn->query($sql);

$sql = "SELECT * FROM prob5";
$result = $conn->query($sql);