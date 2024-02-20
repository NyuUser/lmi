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

$sql1 = "UPDATE prob4
SET trndte = 
    CASE 
        WHEN datetyp = 'F' THEN CONCAT(creyer, '-', cremon, '-01')
        WHEN datetyp = 'L' THEN CONCAT(creyer, '-', cremon, '-', DAY(LAST_DAY(CONCAT(creyer, '-', cremon, '-01'))))
        ELSE NULL -- handle other cases as needed
    END;
";
$result1 = $conn->query($sql1);

$sql = "SELECT * FROM prob4";
$result = $conn->query($sql);

// Generate HTML for the sales list
echo "<tr>
<th>Rec ID</th>
<th>DATE</th>
<th>Month</th>
<th>Year</th>
<th>Date Type</th>
</tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row["recid"]}</td>
    <td>{$row["trndte"]}</td>
    <td>{$row["cremon"]}</td>
    <td>{$row["creyer"]}</td>
    <td>{$row["datetyp"]}</td>
    </tr>";
}

// Close the database connection
$conn->close();
