<?php
require('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IVR Portal</title>
    <link rel="icon"  type="image/x-icon" href="favicon.ico">
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
  <style>
table {
  border-collapse: collapse;
  width: 80%;
  padding-left: 50px;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
  <body id="page-top">
<!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Request Result</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                  <thead>
                    <tr>
                     <th>Vendors</th>
                      <th>Fee Charged</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Vendors</th>
                      <th>Fee Charged</th>
                      <th>Total</th>
                    
                    </tr>
                  </tfoot>

<tbody>
<?php
$conn = mysqli_connect($servername, $username, $password, $DBname);
//check connection
if (!$conn) {
  die("connection failed: " . mysqli_connect_error());
}

if (isset($_POST["send"])) {
  $budget = mysqli_real_escape_string($conn, $_POST["budget"]);
  $loc = mysqli_real_escape_string($conn, $_POST["location"]);
  $date = mysqli_real_escape_string($conn, $_POST["date"]);

$sql = "SELECT DISTINCT service AS Vendors, SUM(act_price) AS Price, count(act_price)AS total FROM `vendors` GROUP BY service;";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
 echo "<tr><td>"
   .$row['Vendors']."<td>".
   $row['Price']."<td>".
   $row['total'].
   "</td></tr>";
    # code...
  }
  echo "</table>";
}
else{
  echo "0 result";
}
}
mysqli_close($conn);
?>
</table>
</div>
</div>
</div>
</body>
</html>
