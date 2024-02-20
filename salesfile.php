<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lmi_entrance_exam";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS lmi_entrance_exam (
    docnum INT AUTO_INCREMENT PRIMARY KEY,
    trndte DATETIME NOT NULL,
    custcde VARCHAR(255) NOT NULL,
    trntot INT NOT NULL
)";
$conn->query($sql);

$sql = "SELECT * FROM lmi_entrance_exam";
$result = $conn->query($sql);