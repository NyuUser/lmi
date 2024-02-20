<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMI</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.3/xlsx.full.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-csv/1.0.11/jquery.csv.min.js"></script>
    <link rel="stylesheet" href="lmi.css?v=<?php echo time(); ?>">
</head>

<body>
    <script src="index.js?v=<?php echo time(); ?>"></script>

    <form id="addForm">
        <h3>Add a Customer</h3>
        <label>trndtw: </label><input id="trndtw" type="date" name="trndtw" required><br>
        <label>custcde: </label><input id="custcde" type="text" name="custcde" required><br>
        <label>trntot: </label><input id="trntot" type="number" name="trntot" required><br>
        <input name="add" value="Add" onclick="addSales()">
    </form>

    <table id="salesTable">
        <!-- Table content will be populated dynamically using jQuery -->
    </table>

    <form id="addTerr">
        <h3>Add a Territory</h3>
        <label>tercde: </label><input id="tercde" type="text" name="tercde" required><br>
        <input name="add" value="Add" onclick="addTerr()">
    </form>

    <table id="terrTable">
        <!-- Table content will be populated dynamically using jQuery -->
    </table>

    <form id="addCust">
        <h3>Add a Customer</h3>
        <label>custcde: </label><input id="custcde" type="text" name="custcde" required><br>
        <label>tercde: </label><input id="tercde" type="text" name="tercde" required><br>
        <label>cusdsc: </label><input id="cusdsc" type="text" name="cusdsc" required><br>
        <input name="add" value="Add" onclick="addCust()">
    </form>

    <table id="custTable">
        <!-- Table content will be populated dynamically using jQuery -->
    </table>

    <table id="prob2">

    </table>

    <div class="popup" id="editPopup">
        <h3>Edit a Customer</h3>
        <form id="editForm">
            <label>custcde: </label><input id="editcustcde" type="text" name="custcde" required><br>
            <label>tercde: </label><input id="edittercde" type="text" name="tercde" required><br>
            <label>cusdsc: </label><input id="editcusdsc" type="text" name="cusdsc" required><br>
            <input name="update" value="Update" onclick="updateCustomer()">
            <button type="button" onclick="closePopup()">Cancel</button>
        </form>
    </div>
</body>

</html>