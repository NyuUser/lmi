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
$sql = "UPDATE lmi_entrance_exam AS s1
JOIN customerfile AS cf ON s1.custcde = cf.custcde
SET s1.custdsc = cf.cusdsc
WHERE s1.custdsc = ''";
$result = $conn->query($sql);

if ($result) {
    $sql1 = "SELECT * FROM lmi_entrance_exam";
    $result1 = $conn->query($sql1);

    if($result1) {
        echo "<tr>
        <th>Rec ID</th>
        <th>Doc No.</th>
        <th>Date</th>
        <th>Customer Code</th>
        <th>Customer Desc</th>
        </tr>";
        while ($row = $result1->fetch_assoc()) {
            echo "<tr>
            <td>{$row["recid"]}</td>
            <td>{$row["docnum"]}</td>
            <td>{$row["trndte"]}</td>
            <td>{$row["custcde"]}</td>
            <td>{$row["custdsc"]}</td>
            </tr>";
        }
    } else {
        echo "Fail" . $conn->error;
    }
    echo "Update successful. Rows affected: " . $conn->affected_rows;
} else {
    echo "Update failed: " . $conn->error;
}


// Close the database connection
$conn->close();