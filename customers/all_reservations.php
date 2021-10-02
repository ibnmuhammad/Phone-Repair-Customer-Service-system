<?php include'header.php';
      include'nav.php';

if (empty($_SESSION['phonenumber'])) {
    header('location: ../index.php');
  }

?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->

  <div class="content-wrapper">
    <div class="container-fluid">

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> My Reservations</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Device Name</th>
                  <th>Defect Type</th>
                  <th>Reservation Date</th>
                  <th>Amount to be paid(Tshs)</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
              	<?php

              	$db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

                $mobilenumber = $_SESSION['phonenumber'];

                $df = "SELECT * FROM reservations WHERE Amount_to_be_paid IS NOT NULL AND phonenumber = $mobilenumber";

                $datafetch = mysqli_query($db, $df);

                while ($row = mysqli_fetch_array($datafetch, MYSQLI_ASSOC)) {
                  echo "<tr><td>";
                  echo $row['ID'];
                  echo "</td><td>";
                  echo $row['devicename'];
                  echo "</td><td>";
                  echo $row['defecttype'];
                  echo "</td><td>";
                  echo $row['Reservation_date'];
                  echo "</td><td>";
                  echo $row['Amount_to_be_paid'];
                  echo "</td><td>";
                  echo "<a href='confirm.php?confirm=".$row['ID']."' class='btn btn-success'>Confirm</a>";
                  echo "</td></tr>";
                 } 
              	
              	?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
 
 </div>
 <?php include'footer.php'; ?>