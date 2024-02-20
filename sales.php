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

// Fetch sales data
$sql = "SELECT * FROM lmi_entrance_exam ORDER BY custcde, trndte, docnum, recid, custdsc";
$result = $conn->query($sql);

// Generate HTML for the sales list
echo "<tr>
<!--th>Rec ID</th-->
<th>DATE</th>
<th>DOC No.</th>
<th>Amount</th>
</tr>";
while ($row = $result->fetch_assoc()) {
    // Check if custcde has changed
    if ($prevCustcde !== $row["custcde"]) {
        // Print subtotal if it's not the first row
        if ($prevCustcde !== null) {
            echo "<tr>
            <td>Subtotal:</td>
            <td></td>
            <!--td></td-->
            <td>{$total}</td>
            </tr>";
            $grandTotal += $total; // Add subtotal to grand total
            $total = 0; // Reset total for the new customer
        }
        // Print custcde only when it changes
        echo "<tr>
        <td>{$row["custcde"]}</td>
        <!--td>{$row["custdsc"]}</td-->
        </tr>";
        $prevCustcde = $row["custcde"];
    }
    // Accumulate trntot for the current customer
    $total += $row["trntot"];
    echo "<tr>
    <!--td>{$row["recid"]}</td-->
    <td>{$row["trndte"]}</td>
    <td>{$row["docnum"]}</td>
    <td>{$row["trntot"]}</td>
    </tr>";
}

// Print subtotal for the last customer
if ($prevCustcde !== null) {
    echo "<tr>
    <td>Subtotal:</td>
    <td></td>
    <!--td></td-->
    <td>{$total}</td>
    </tr>";
    $grandTotal += $total; // Add last subtotal to grand total
}

// Print grand total
echo "<tr>
<td>Grand Total:</td>
<td></td>
<!--td></td-->
<td>{$grandTotal}</td>
</tr>";

// Close the database connection
$conn->close();
