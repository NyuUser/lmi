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
$sql = "SELECT * FROM customerfile";
$result = $conn->query($sql);

echo "<tr>
<th>Customer</th>
<th>Territory</th>
<th>Description</th>
<th>Actions</th>
</tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row["custcde"]}</td>
    <td>{$row["tercde"]}</td>
    <td>{$row["cusdsc"]}</td>
    <td>
    <button onclick=\"editCustomer('{$row['custcde']}', '{$row['tercde']}', '{$row['cusdsc']}')\">Edit</button>
    <button onclick=\"deleteCustomer({$row['custcde']})\">Delete</button>
    </td>
    </tr>";
}

// Close the database connection
$conn->close();