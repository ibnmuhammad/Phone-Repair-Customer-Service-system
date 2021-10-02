<?php include'header.php'; 

// if (empty($_SESSION['phonenumber'])) {
//     header('location: ../index.php');
//   }

?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <?php include'nav.php'; ?>

    <div class="content-wrapper">

      <div class="container-fluid">
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Device Return</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Phone Number</th>
                  <th>Device Name</th>
                  <th>Defect Type</th>
                  <th>Device Delivery</th>
                  <th>Device Return</th>
                  <th>SMS</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php

                $db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

                $df = "SELECT * FROM reservations";

                $datafetch = mysqli_query($db, $df);

                while($row = mysqli_fetch_array($datafetch, MYSQLI_ASSOC)) {
                  echo "<tr><td>";
                  echo $row['ID'];
                  echo "</td><td>";
                  echo $row['phonenumber'];
                  echo "</td><td>";
                  echo $row['devicename'];
                  echo "</td><td>";
                  echo $row['defecttype'];
                  echo "</td><td>";
                  echo $row['Device_delivery'];
                  echo "</td><td>";
                  echo $row['Device_return'];
                  echo "</td><td>";
                  echo "<a href='sms.php' class='btn btn-success'>SMS</a>";
                  echo "</td><td>";
                  echo "<a href='return.php?return=".$row['ID']."' class='btn btn-success'>Approve</a>";
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