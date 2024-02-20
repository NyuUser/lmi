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

$sql1 = "DELETE FROM prob5
WHERE recid NOT IN (
    SELECT MIN(recid)
    FROM prob5
    GROUP BY field1, field2, field3
)";
$result1 = $conn->query($sql1);

$sql = "SELECT * FROM prob5";
$result = $conn->query($sql);

// Generate HTML for the sales list
echo "<tr>
<th>Rec ID</th>
<th>field1</th>
<th>field2</th>
<th>field3</th>
</tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row["recid"]}</td>
    <td>{$row["field1"]}</td>
    <td>{$row["field2"]}</td>
    <td>{$row["field3"]}</td>
    </tr>";
}

// Close the database connection
$conn->close();
