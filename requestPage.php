<?php
require('connect.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mr. and Mrs.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600|Montserrat:500,600,700&display=swap" rel="stylesheet">
    <style media="screen">
      .nav{
        background-color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        font-size: 16px;
        line-height: 29px;
        color: #9E9A9A;
      }
      .nav li{
        padding-left: 36px;
        display: inline-flex;
        list-style-type: none;
      }
      .sidebar{
        padding-top: 20px;
        width: 280px;
        background: #00528A;
      }
      .sidebar li{
        margin-bottom: 25px;
        list-style-type: none;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 15px;
        line-height: 29px;

        color: #9E9A9A;
      }
      .sidebar li.active{
        color: #fff;
      }
      .main{
        width: calc(100% - 280px);
        margin-left: 280px;
      }
      .main .top{
        background: rgba(97, 166, 213, 0.5);
        color: #000;
      }
      .body h4{
        font-family: 'Montserrat', sans-serif;
        font-style: normal;
        font-weight: 600;
        font-size: 20px;
        line-height: 29px;

        color: #000000;
      }
      .body p{
        font-family: 'Montserrat', sans-serif;
        font-weight: normal;
        font-size: 18px;
        line-height: 24px;
        text-align: center;

        color: #000000;
      }
      .empty-box{
        width: 960px;
        height: 400px;
        background: rgba(97, 166, 213, 0.75);
        border-radius: 6px;
        justify-content: space-around;
        align-items: center;
        padding-bottom: 20px;
      }
      .empty-box .inner{
        width: 204px;
        height: 192px;
        background: #C4C4C4;
        border-radius: 6px;
      }
      .body .btn{
        background: #61A6D5;
        border: 1px solid #FFF;
        box-sizing: border-box;
        border-radius: 3px;
        color: #fff;
      }
    </style>
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
  </head>
  <body>
    <div class="page">
      <div class="nav w-100 px-4 py-2">
        <div class="">
          <a href="index.php" style="text-decoration: none;">MRandMRS</a>
        </div>
        <ul class="pl-0 mr-0 ml-auto">
          <li>PLANNING TOOLS</li>
          <li>PHOTOS</li>
          <li>IDEAS AND INSPIRATION</li>
          <li><i class="far fa-comment"></i></li>
          <li>SETTINGS</li>
        </ul>
      </div>
      <div class="sidebar h-100 position-fixed">
        <ul>
          <li class="active"><i class="fas fa-home mr-2"></i>Dashboard</li>
          <li><i class="fas fa-check mr-2"></i>Checklist</li>
          <li><i class="fas fa-wallet mr-2"></i>Budgeter</li>
          <li><i class="fas fa-user mr-2"></i>Guest List</li>
          <li><i class="fas fa-piggy-bank mr-2"></i>Savings</li>
          <li><i class="fas fa-browser mr-2"></i>Wedding Website</li>
          <li><i class="fas fa-users mr-2"></i>Vendors</li>
          <li><i class="fas fa-stream mr-2"></i>Wedding Day Timeline</li>
        </ul>
      </div>
      <div class="main">
        <div class="top text-center py-3">
          <h4>It's nearly three months to your big day!</h4>
        </div>
        <div class="body">
          <h4 class="mt-5 ml-3">Let's get this party started</h4>
          <p class="w-100 text-center mt-5">
            From your answers earlier, we know you’d love to have a simple and classy<br>
            wedding in the middle of August. Explore more options and streamline<br>
            your searches from your dashboard.
          </p>
          <div class="empty-box d-flex mx-auto">

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

if (isset($_POST["submit"])) {
  $budget = mysqli_real_escape_string($conn, $_POST["budget"]);
  $loc = mysqli_real_escape_string($conn, $_POST["location"]);
  $date = mysqli_real_escape_string($conn, $_POST["date"]);

  if (empty($budget)) {
    die();
    
$sql = "SELECT DISTINCT service , SUM('dj','hairstyle','catering','makeup','hall') AS total FROM `vendors` GROUP BY service;";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>"
   .$row['service']."<td>".
   $row['total'].
   "</td></tr>";
    # code...
  }
  echo "</table>";

}else{
  echo "Please a detail";
  }
}else{
  echo "0 result";
  die();
}
}


mysqli_close($conn);
?>
</table>

            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
