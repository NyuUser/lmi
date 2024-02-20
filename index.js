function addSales() {
  var formData = $("#addForm").serialize();
  console.log(formData)
  $.post("salesprocess.php", formData, function (data, status) {
    // Refresh the list after adding
    alert("Data: " + data + "\nStatus: " + status);
    loadSalesList();
  });
  
  $('#trndte').val('')
  $('#custcde').val('')
  $('#trntot').val('')
  //$('#recid').val('')
  //$('#custdsc').val('')
}

function addTerr() {
  var formData = $('#addTerr').serialize();
  console.log(formData)
  $.post("terrprocess.php", formData, function (data, status) {
    // Refresh the list after adding
    alert("Data: " + data + "\nStatus: " + status);
    loadTerr();
  });
  
  $('#tercde').val('')
}

function addCust() {
  var formData = $('#addCust').serialize();
  console.log(formData)
  $.post("custprocess.php", formData, function (data, status) {
    // Refresh the list after adding
    alert("Data: " + data + "\nStatus: " + status);
    loadCust();
    loadProb2();
  });
  
  $('#custcde').val('')
  $('#tercde').val('')
}

function editCustomer(custcde, tercde, cusdsc) {
  console.log(custcde, tercde, cusdsc)

  $("#editcustcde").val(custcde);
  $("#edittercde").val(tercde);
  $("#editcusdsc").val(cusdsc);
  $("#editPopup").show();
}

function updateCustomer() {
  var formData = $("#editForm").serialize();
  $.post("custprocess.php", formData, function (data, status) {
    // Refresh the character list after adding
    alert("Data: " + data + "\nStatus: " + status);
    loadCust();
    loadProb2();
    closePopup();
  });
}

function deleteCustomer(custcde) {
  if (confirm("Are you sure you want to delete this character?")) {
    $.post(
      "custprocess.php",
      { delete: true, custcde: custcde },
      function (data, status) {
        // Refresh the character list after adding
        alert("Data: " + data + "\nStatus: " + status);
        loadCust();
        loadProb2();
        closePopup();
      },
    );
  }
}

function addDesc() {
  var formData = $('#addDesc').serialize();
  console.log(formData)
  $.post("descprocess.php", formData, function (data, status) {
    // Refresh the list after adding
    alert("Data: " + data + "\nStatus: " + status);
    loadCust();
  });
  
  $('#custcde').val('')
  $('#tercde').val('')
}

function addProb4() {
  var formData = $('#addProb4').serialize();
  console.log(formData)
  $.post("prob4process.php", formData, function (data, status) {
    // Refresh the list after adding
    alert("Data: " + data + "\nStatus: " + status);
    loadProb4();

    $('#cremon').val('')
    $('#creyer').val('')
    $('#datetyp').val('')
  });
}

function addProb5() {
  var formData = $('#addProb5').serialize();
  console.log(formData)
  $.post("prob5process.php", formData, function (data, status) {
    // Refresh the list after adding
    alert("Data: " + data + "\nStatus: " + status);
    loadProb5();

    $('#field1').val('')
    $('#field2').val('')
    $('#field3').val('')
  });
}

function loadSalesList() {
  $.get("sales.php", function (data) {
    $("#salesTable").html(data);
  });
}

function loadTerr() {
  $.get("loadTerr.php", function (data) {
    $("#terrTable").html(data);
  });
}

function loadCust() {
  $.get("loadCust.php", function (data) {
    $("#custTable").html(data);
  });
}

function loadDesc() {
  $.get("loadDesc.php", function (data) {
    $("#descTable").html(data);
  });
}

function loadProb2() {
  $.get("prob2.php", function (data) {
    $("#prob2").html(data);
  });
}

function loadProb4() {
  $.get("prob4.php", function (data) {
    $("#prob4").html(data);
  });
}

function loadProb5() {
  $.get("prob5.php", function (data) {
    $("#prob5").html(data);
  });
}

function closePopup() {
  $("#editPopup").hide();
}

$(document).ready(function () {
  loadSalesList();
  loadTerr();
  loadCust();
  loadDesc();
  loadProb2();
  loadProb4();
  loadProb5();
})