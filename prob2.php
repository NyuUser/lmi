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

// Fetch data from the joined tables and calculate subtotal
$sql = "SELECT t.tercde, 
               e.custcde, 
               e.trntot
          FROM lmi_entrance_exam e
          JOIN customerfile c ON e.custcde = c.custcde
          JOIN territoryfile t ON c.tercde = t.tercde
      ORDER BY t.tercde, e.custcde";

$result = $conn->query($sql);

// Initialize variables
$prevTercde = null;
$total = 0;
$grandTotal = 0;

// Generate HTML for the table
echo "<table>
<tr>
<th>Territory Code</th>
<th>Customer Code</th>
<th>Amount</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    // Check if tercde has changed
    if ($prevTercde !== $row["tercde"]) {
        // Print subtotal if it's not the first row
        if ($prevTercde !== null) {
            echo "<tr>
            <td colspan='2'>Subtotal:</td>
            <td>{$total}</td>
            </tr>";
            $grandTotal += $total; // Add subtotal to grand total
            $total = 0; // Reset total for the new territory
        }
        // Print tercde only when it changes
        echo "<tr>
        <td>{$row["tercde"]}</td>
        <td>{$row["custcde"]}</td>
        <td>{$row["trntot"]}</td>
        </tr>";
        $prevTercde = $row["tercde"];
    } else {
        echo "<tr>
        <td>{$row["tercde"]}</td>
        <td>{$row["custcde"]}</td>
        <td>{$row["trntot"]}</td>
        </tr>";
    }
    // Accumulate trntot for the current territory
    $total += $row["trntot"];
}

// Print subtotal for the last territory
if ($prevTercde !== null) {
    echo "<tr>
    <td colspan='2'>Subtotal:</td>
    <td>{$total}</td>
    </tr>";
    $grandTotal += $total; // Add last subtotal to grand total
}

// Print grand total
echo "<tr>
<td colspan='2'>Grand Total:</td>
<td>{$grandTotal}</td>
</tr>";

echo "</table>";

// Close the database connection
$conn->close();
?>