function addSales() {
  var formData = $("#addForm").serialize();
  console.log(formData)
  $.post("salesprocess.php", formData, function (data, status) {
    // Refresh the list after adding
    alert("Data: " + data + "\nStatus: " + status);
    loadSalesList();
  });
  
  $('#trndtw').val('')
  $('#custcde').val('')
  $('#trntot').val('')
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
    loadCharacterList();
    closePopup();
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

function loadProb2() {
  $.get("prob2.php", function (data) {
    $("#prob2").html(data);
  });
}

$(document).ready(function () {
  loadSalesList();
  loadTerr();
  loadCust();
  loadProb2();
})