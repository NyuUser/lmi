<?php
// Include database connection logic (copy the relevant part from your main file)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lmi_entrance_exam";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data
$sql = "SELECT * FROM territoryfile";
$result = $conn->query($sql);

echo "<tr>
<th>Territory</th>
</tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row["tercde"]}</td>
    </tr>";
}

// Close the database connection
$conn->close();