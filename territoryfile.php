<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lmi_entrance_exam";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE IF NOT EXISTS territoryfile (
    tercde VARCHAR(255) NOT NULL
)";
$conn->query($sql);

$sql = "SELECT * FROM territoryfile";
$result = $conn->query($sql);