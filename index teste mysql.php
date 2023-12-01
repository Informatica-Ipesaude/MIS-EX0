<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=windows-1252" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://www.w3schools.com/appml/2.0.3/appml.js"></script>
</head>

<body>

<div class="w3-container" appml-data="appml.php?model=model_customerslist">
<h1>Customers</h1>
<h3>Displayed from a PHP mySQL database</h3>
<table class="w3-table-all">
  <tr>
    <th>Customer</th>
    <th>City</th>
    <th>Country</th>
  </tr>
  <tr appml-repeat="records">
    <td>{{CustomerName}}</td>
    <td>{{City}}</td>
    <td>{{Country}}</td>
  </tr>
</table>
</div>

</body>
</html>